<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guestbookmodel extends Model {

    private $site_id;

    public function __construct() {
        parent::__construct();
        $this->site_id = $this->config->item('default_org_site');
    }

    public function saveData($data = null)
    {
        if ($data) {
            return $this->db->insert('cms_guestbook', $data);
        } else {
            return false;
        }        
    }
}