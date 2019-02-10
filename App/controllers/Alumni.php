<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumni extends CI_Controller {

    private $activeSession; // store session
    private $cms_var;   //store CMS var

	public function __construct() {
	    parent::__construct();
	    $this->activeSession = $this->session->userdata('_USER_ID');
        $this->cms_var = $this->model->getRecord(array('table' => 'v_cms_var', 'where' => array('is_active' => 1)));
        //load CMS Model
        $this->load->model('cmsmodel');
    }
    
    /* 
    * BASE CMS view template
    */
    public function view($view_file, $data = array(), $title = null) {
        $title = ($title == null) ? 'Welcome | ' . $this->cms_var->web_name : $title;
        $jumbotron = ($this->cms_var->is_jumbotron == 1) ? $this->cmsmodel->getJumbotronPost() : null;
        $featured = ($this->cms_var->is_featured == 1) ? $this->cmsmodel->getFeaturedPost() : null;
        $popular = ($this->cms_var->is_popular == 1) ? $this->cmsmodel->getPopularPost() : null;
        $categories = $this->cmsmodel->getCategories();
        $galleries = ($this->cms_var->is_gallery == 1) ? $this->cmsmodel->getGalleryDetail($this->cms_var->default_gallery_id) : null;
        $data_to_view = array(
            /* basic variable on view CMS */
            'CMS' => $this->cms_var,
            'TEMPLATE_DIR' => base_url('asset/' . $this->cms_var->template_path),
            'BASE_URL' => base_url(), //$this->cms_var->home_url
            'MENU_TOP' => $this->load->view($this->cms_var->template_path.'/_menu_top',array('menus' => $this->cmsmodel->getMenuByGroup(1)), TRUE),
            'JUMBOTRON' => $jumbotron,
            'GALLERIES' => $galleries,
            //sidebar / related
            'BREADCRUMB' => NULL,
            'WIDGETS' => null,
            'ARCHIVES' => $this->cmsmodel->getArchivePost(),
            'CATEGORIES' => $categories,
            'POPULAR_POSTS' => $popular,
            'RECENT_POSTS' => $this->cmsmodel->getRecentPost(5),
            'RELATED_POST' => null,
            'FEATURED_POST' => $featured,
            //single page
            'TITLE' => $title,
            'CONTENT_TITLE' => null,
            'CONTENT_IMAGE' => null,
            'CONTENT_BODY' => null,
            'CONTENT_CATEGORIES' => null,
            'CONTENT_TAGS' => null,
            'SHARE_SOCIAL_MEDIA' => null,
            'COMMENT' => null
            );
        
        $data_to_view['SIDEBAR'] = $this->load->view($this->cms_var->template_path.'/inc/_sidebar', $data_to_view, TRUE);

        //merge array
        
        $this->load->view($this->cms_var->template_path.'/inc/_header', $data_to_view);
        $this->load->view($view_file, array_merge($data_to_view, $data));
        $this->load->view($this->cms_var->template_path.'/inc/_footer', $data_to_view);
	}

	public function index() {
        $data_alumni = array();
        $view_file = $this->cms_var->template_path.'/alumni';
        
        $this->view($view_file, $data_alumni, 'Data Alumni | ' . $this->cms_var->web_name);
	}
}