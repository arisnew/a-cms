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
    public function view($view_file, $data = array()) {
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
        $this->load->view($view_file, $data);
        $this->load->view($this->cms_var->template_path.'/inc/_footer', $data_to_view);
	}

	public function index() {
        $data_alumni = array();
        $view_file = $this->cms_var->template_path.'/alumni';
        
        $this->view($view_file, $data_alumni);
	}
}