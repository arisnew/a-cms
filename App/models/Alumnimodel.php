<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumnimodel extends Model {

    private $site_id;

    public function __construct() {
        parent::__construct();
        $this->site_id = $this->config->item('default_org_site');
    }

    public function getTotal()
    {
        $this->db->where('site_id', $this->site_id);
        $this->db->where('is_publish', 1);
        return $this->db->get('cms_alumni')->num_rows();
    }

    public function getAlumni($page, $per_page = 5)
    {
        $this->db->where('site_id', $this->site_id);
        $this->db->where('is_publish', 1);
        $this->db->limit($per_page, $page); //limit
        return $this->db->get('cms_alumni')->result();
    }
}