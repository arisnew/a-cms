<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cms extends CI_Controller {

    private $activeSession; // store session
    private $templateDir; // store template dir front end

	public function __construct() {
	    parent::__construct();
	    $this->activeSession = $this->session->userdata('_USER_ID');
        $this->templateDir = $this->config->item('cms_template');
	}

	public function index() {
        $data_to_view = array(
            /* basic variable on view CMS */
            'WEB_NAME' => $this->getSetByVar('WEB_NAME'),
            'WEB_LOGO' => $this->getSetByVar('WEB_LOGO'),
            'WEB_TAG' => $this->getSetByVar('TAG_WEB'),
            'ICON' => $this->getSetByVar('ICON_LOGO'),
            'META' => null,
            'TEMPLATE_DIR' => base_url('asset/' . $this->templateDir),
            'BASE_URL' => base_url('cms'),
            'MENU_TOP' => $this->load->view($this->templateDir.'/_menu_top',array('menus' => $this->getMenuByGroup(1)), TRUE),
            'HEADING' => null,
            //special page
            'SLIDE' => null,
            'JUMBOTRON' => $this->getJumbotronPost(),
            'INFO' => null,
            //sidebar / related
            'BREADCRUMB' => NULL,
            'WIDGETS' => null,
            'ARCHIVES' => $this->getArchivePost(),
            'CATEGORIES' => null,
            'POPULAR_POSTS' => $this->getPopularPost(),
            'RECENT_POSTS' => $this->getRecentPost(5),
            'RELATED_POST' => null,
            'FEATURED_POST' => $this->getFeaturedPost(2),
            //single page
            'TITLE' => 'Welcome | '.$this->getSetByVar('WEB_NAME'),
            'CONTENT_TITLE' => null,
            'CONTENT_IMAGE' => null,
            'CONTENT_BODY' => null,
            'CONTENT_CATEGORIES' => null,
            'CONTENT_TAGS' => null,
            'SHARE_SOCIAL_MEDIA' => null,
            'COMMENT' => null
            );
        
        $this->load->view($this->templateDir.'/inc/_header', $data_to_view);
        $this->load->view($this->templateDir.'/index', $data_to_view);
        $this->load->view($this->templateDir.'/inc/_footer', $data_to_view);
	}

    /*
    * get menu by menu group id
    * return result array object
    */
    private function getMenuByGroup($menu_group_id = null)
    {
        return $this->model->getList(array(
            'table' => 'cms_menu',
            'where' => array(
                'menu_group_id' => $menu_group_id,
                'is_active' => 1,
                'site_id' => $this->config->item('default_org_site')
                ),
            'sort' => 'menu_index ASC'
            ));
    }

    /*
    * get value setting by var_set
    * return string
    */
    private function getSetByVar($var_set)
    {
        $val_set = '';
        $dataSet = $this->model->getRecord(array(
            'table' => 'cms_setting',
            'where' => array(
                'var_set' => $var_set,
                'is_active' => 1
                )
            ));
        
        if ($dataSet) {
            if ($dataSet->is_file == 1){
                $val_set = base_url('asset/files/cms_setting/'.$dataSet->file_set);
            }else{
                $val_set = $dataSet->val_set;   
            }
        }

        return $val_set;
    }

    /*
    * get recent post
    * return array object
    */
    private function getRecentPost($limit = 5)
    {
        $dataPost = $this->model->getList(array(
            'table' => 'v_cms_article',
            'where' => array(
                'is_publish' => 1,
                'site_id' => $this->config->item('default_org_site')
                ),
            'sort' => 'created_on DESC',
            'limit' => array($limit)
            ));

        return $dataPost;
    }

    /*
    * get featured post
    * return array object
    */
    private function getFeaturedPost($limit = 5)
    {
        $dataPost = $this->model->getList(array(
            'table' => 'v_cms_article',
            'where' => array(
                'is_publish' => 1,
                'is_featured' => 1,
                'site_id' => $this->config->item('default_org_site')
                ),
            'sort' => 'created_on DESC',
            'limit' => array($limit)
            ));

        return $dataPost;
    }

    /*
    * get jumbotron post
    * return array object
    */
    private function getJumbotronPost($limit = 1)
    {
        $dataPost = $this->model->getList(array(
            'table' => 'v_cms_article',
            'where' => array(
                'is_publish' => 1,
                'is_jumbotron' => 1,
                'site_id' => $this->config->item('default_org_site')
                ),
            'sort' => 'created_on DESC',
            'limit' => array($limit)
            ));

        return $dataPost;
    }

    /*
    * get archives post
    * return array object
    */
    private function getArchivePost()
    {
        $dataPost = $this->model->getList(array(
            'table' => 'v_cms_archive_post',
            'where' => array(
                'site_id' => $this->config->item('default_org_site')
                )
            ));

        return $dataPost;
    }
    
    /*
    * get popular post
    * return array object
    */
    private function getPopularPost($limit = 5, $category = null)
    {
            
        if ($category) {
            $query = "
                SELECT * FROM v_cms_article WHERE is_publish = 1 AND site_id = ".$this->config->item('default_org_site')." 
                    AND article_id IN (SELECT article_id FROM cms_articlecategory WHERE article_category_id = $category)
                     ORDER BY $sort
                     LIMIT $limit

            ";
            $dataPost = $this->model->getListByQuery($query);
        } else {
            $query = array(
                'table' => 'v_cms_article',
                'where' => array(
                    'is_publish' => 1,
                    'site_id' => $this->config->item('default_org_site')
                    ),
                'sort' => 'counter DESC',
                'limit' => array($limit)
                );
            $dataPost = $this->model->getList($query);
        }
        

        return $dataPost;
    }

    /*
    * for single article
    * @param $link
    */
    public function single($link = NULL ){
        $article = $this->model->getRecord(array('table' => 'v_cms_article', 'where' => array('article_link' => $link, 'is_publish' => 1)));
        
        if($article == NULL){
            $viewFile = 'cms/404';
            $categories = NULL;
            $tags = NULL;
        } else {
           $categories = $this->model->getList(array('table' => 'v_cms_articlecategory','where' => array('article_id'=>$article->article_id)));
           $tags = $this->model->getList(array('table' => 'v_cms_articletags','where' => array('article_id'=>$article->article_id)));
           $viewFile='cms/'.$this->templateDir.'/single_template'; 
        }
        //$data['CONTENT'] = $this->load->view('cms/single_article', array('article' => $article),true);
        $this->load->view($viewFile,array('article' => $article,'categories'=>$categories,'tags'=>$tags));
    }
    
    public function slider(){
        $slider = $this->load->view('cms/'.$this->templateDir.'/slider',null, TRUE);
        $this->load->view('cms/'.$this->templateDir.'/index',array('SLIDER' => $slider));
    }
    
    public function comment(){
        $kode = 0;
        $data = array(
                'name'      => $this->input->post('name'),
                'email'     => $this->input->post('email'),
                'website'   => $this->input->post('website'),
                'content'   => $this->input->post('content'),
                'site_id'   => $this->input->post('site'),
                'is_publish'=> $this->input->post('publish'),
                'article_id'=> $this->input->post('article_id'),
                'created_on'=> date('Y-m-d H:i:s'),
                'parent_comment_id' => ($this->input->post('parent_comment_id') > 0)?$this->input->post('parent_comment_id'):NULL
                );
            //$this->modelscms->insert($data);
            $save = $this->db->insert('cms_comment',$data);
        if($save==true){
            $kode=1;
        }
        echo json_encode(array('code'=>$kode));
    }
    
    public function gallery(){
        $this->load->view($this->templateDir.'/gallery');
    }
    
    public function galleryvidio(){
        $this->load->view($this->templateDir.'/galleryvidio');
    }

}