<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guestbook extends CI_Controller {

	public function __construct() {
	    parent::__construct();
        //load Guestbook Model
        $this->load->model('guestbookmodel');
        $this->load->library('form_validation');
    }

	public function index() {
        $code = 0;
        $message = '';
        $config = array(
            array(
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required|max_length[150]'
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            ),
            array(
                'field' => 'message',
                'label' => 'Message',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_error_delimiters('- ', '');
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE){
            $message = validation_errors();
        } else {
            $data_tosave = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'content' => $this->input->post('message'),
                'site_id' => $this->config->item('default_org_site'),
                'created_on' => date('Y-m-d H:i:s')
            );
            $result = $this->guestbookmodel->saveData($data_tosave);
            if ($result) {
                $code = 1;
            }
        }

        echo json_encode(array('code' => $code, 'message' => $message));
	}
}