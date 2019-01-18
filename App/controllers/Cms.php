<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cms extends CI_Controller {

    private $activeSession; // store session
    private $cms_var;   //store CMS var

	public function __construct() {
	    parent::__construct();
	    $this->activeSession = $this->session->userdata('_USER_ID');
        $this->cms_var = $this->model->getRecord(array('table' => 'v_cms_var', 'where' => array('is_active' => 1)));
        //load CMS Model
        $this->load->model('cmsmodel');
	}

	public function index() {
        $data_to_view = array(
            /* basic variable on view CMS */
            'CMS' => $this->cms_var,
            'TEMPLATE_DIR' => base_url('asset/' . $this->cms_var->template_path),
            'BASE_URL' => base_url(), //$this->cms_var->home_url
            'MENU_TOP' => $this->load->view($this->cms_var->template_path.'/_menu_top',array('menus' => $this->cmsmodel->getMenuByGroup(1)), TRUE),
            'JUMBOTRON' => $this->cmsmodel->getJumbotronPost(),
            //sidebar / related
            'BREADCRUMB' => NULL,
            'WIDGETS' => null,
            'ARCHIVES' => $this->cmsmodel->getArchivePost(),
            'CATEGORIES' => null,
            'POPULAR_POSTS' => $this->cmsmodel->getPopularPost(),
            'RECENT_POSTS' => $this->cmsmodel->getRecentPost(5),
            'RELATED_POST' => null,
            'FEATURED_POST' => $this->cmsmodel->getFeaturedPost(2),
            //single page
            'TITLE' => 'Welcome | ' . $this->cms_var->web_name,
            'CONTENT_TITLE' => null,
            'CONTENT_IMAGE' => null,
            'CONTENT_BODY' => null,
            'CONTENT_CATEGORIES' => null,
            'CONTENT_TAGS' => null,
            'SHARE_SOCIAL_MEDIA' => null,
            'COMMENT' => null
            );
        
        $this->load->view($this->cms_var->template_path.'/inc/_header', $data_to_view);
        $this->load->view($this->cms_var->template_path.'/index', $data_to_view);
        $this->load->view($this->cms_var->template_path.'/inc/_footer', $data_to_view);
	}

    /*
    * for single article
    * @param $link
    */
    public function single($link = NULL ){
        $article = $this->cmsmodel->getArticleByLink($link);
        
        if($article == NULL){
            $viewFile = 'cms/404';
            $categories = NULL;
            $tags = NULL;
        } else {
           $categories = $this->cmsmodel->getCategoriesByArticle($article->article_id);
           $tags = $this->cmsmodel->getTagsByArticle($article->article_id);
           $viewFile = 'cms/'.$this->cms_var->template_path.'/single_template'; 
        }

        $this->load->view($viewFile,array('article' => $article, 'categories'=>$categories, 'tags'=>$tags));
    }
    
    public function slider(){
        $slider = $this->load->view('cms/'.$this->cms_var->template_path.'/slider',null, TRUE);
        $this->load->view('cms/'.$this->cms_var->template_path.'/index',array('SLIDER' => $slider));
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
        $this->load->view($this->cms_var->template_path.'/gallery');
    }
    
    public function galleryvidio(){
        $this->load->view($this->cms_var->template_path.'/galleryvidio');
    }

}