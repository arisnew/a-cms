<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model {
    public $CREATE = 1, $UPDATE = 2, $DELETE = 3, $COMPLETE = 4; // action flag
    private $numData = 0; // num of record
    protected $table = '', $isNew = true;
    public $imgFolder = '';
    protected $NewNumber = 0;

    public function __construct() {
        parent::__construct();
    }

    /* ------------------------ SCENARIO - get ------------------------ */
    public function getNumData() { // get num of record
        return $this->numData;
    }

    public function getLastID() { // get 'id' (PK) of last executed query
        return $this->db->insert_id();
    }

    /*
    | ---------- $query is an array ----------
    | key index = table, where, sort, similar
    */
    public function getRecord($query = array()) { // get record
        $record = null;

        if (isset($query['table'])) {
            $where = (isset($query['where'])) ? $query['where'] : null;
            $order = (isset($query['sort'])) ? $query['sort'] : null;
            $isLike = (isset($query['similar'])) ? $query['similar'] : false;
            self::_initClause($where, $order, $isLike);
            $data = $this->db->get($query['table']);
            $this->numData = $data->num_rows();
            $record = ($this->numData == 0) ? null : $data->row();
        }

        return $record;
    }

    /*
    | -------------- $query is an array --------------
    | key index = table, where, sort, similar, limits
    */
    public function getList($query = array()) { // get list
        $list = array();

        if (isset($query['table'])) {
            $where = (isset($query['where'])) ? $query['where'] : null;
            $order = (isset($query['sort'])) ? $query['sort'] : null;
            $isLike = (isset($query['similar'])) ? $query['similar'] : false;
            self::_initClause($where, $order, $isLike);

            if (isset($query['limits'])) { // $this->db->limit(limit, offset);
                $limits = $query['limits']; // > as array
                $this->db->limit($limits[0]);

                if (isset($limits[1])) {
                    $this->db->limit($limits[0], $limits[1]);
                }
            }

            $data = $this->db->get($query['table']);
            $this->numData = $data->num_rows();
            $list = $data->result();
        }

        return $list;
    }

    private function _initClause($where, $order, $isLike) { // run query
        $clause = false; // where or like clause

        if (is_array($where)) {
            $clause = (count($where) > 0);
        } else {
            $clause = ($where != null);
        }

        if ($clause) {
            if ($isLike) {
                $this->db->like($where);
            } else {
                $this->db->where($where);
            }
        }

        if ($order != null) {
            $this->db->order_by($order); // $this->db->order_by('fieldA desc, fieldB asc');
        }
    }

    /* ------------------------ SCENARIO - set/manage ------------------------ */
    /*
    | ------- $query is an array -------
    | key index = table, type, data, at
    */
    public function action($query = array()) { // action record
        $result = false;

        if (isset($query['table']) && isset($query['type'])) {
            switch ($query['type']) {
                case $this->CREATE:
                    if (isset($query['data'])) {
                        $result = $this->db->insert($query['table'], $query['data']);
                    }

                    break;
                case $this->UPDATE:
                    if (isset($query['at']) && isset($query['data'])) {
                        $this->db->where($query['at']); // at is an array
                        $result = $this->db->update($query['table'], $query['data']);
                    } else {
                        $result = false;
                    }

                    break;
                case $this->COMPLETE:
                    if (isset($query['at']) && isset($query['data'])) {
                        $this->db->where($query['at']); // at is an array
                        $result = $this->db->update($query['table'], $query['data']);
                    } else {
                        $result = false;
                    }

                    break;
                case $this->DELETE: // delete ;)
                    $result = $this->db->delete($query['table'], $query['at']); // at is an array
                    break;
            }
        }

        return $result;
    }

    /* ------------------------ SCENARIO - child class implementation ------------------------ */
    public function isNew($value) { // check action is for new input or update
        $this->isNew = $value;
    }

    public function getTable() {
        return $this->table;
    }

    public function getListByQuery($query = null)
    {
        $sql = $this->db->query($query);
        if ($sql->num_rows() > 0) {
            return $sql->result();
        } else {
            return null;
        }
    }

    /*
    * for upload file using ajax
    * parameter in $request => input_name, folder_path, file_type, max_size,
    */
    function file_upload($request = array())
    {
        $ret = null;
        if ($request['input_name'] != ''){
            $fld = ($request['folder_path'] != '') ? $request['folder_path'] . '/' : 'asset/image/';
            $config['upload_path'] = $fld;
            $config['allowed_types'] = (isset($request['file_type']) && $request['file_type'] != '') ? $request['file_type'] : '*';
            $config['max_size'] = (isset($request['max_size']) && $request['max_size'] != '') ? $request['max_size'] : '5120';

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload($request['input_name']))
            {
                $ret = null;
            } else {
                $result = $this->upload->data();
                if($result !=''){
                    foreach ($result as $item => $value){
                        $ret = $result['file_name'];
                    }

                    //create thumbnail if type file is IMAGE
                    $config1['image_library'] = 'gd2';
                    $config1['source_image'] = $config['upload_path'] . $ret;
                    $config1['new_image'] = $config['upload_path'] . 'thumb';
                    $config1['maintain_ratio'] = FALSE;
                    $config1['width'] = 400;
                    $config1['height'] = 300;
                        
                    $this->load->library('image_lib', $config1);
                    //resize 
                    @$this->image_lib->resize();
                }
            }
        }

        return $ret;
    }

    public function getNewNumber($sequential_name = null, $site_id = 8)
    {
        /* -- using DB System -- */
        $new_number = null;
        if($sequential_name != null){
            $this->db_sys->where('site_id', $site_id);
            $this->db_sys->where('sequential_name', $sequential_name);
            $this->db_sys->where('is_active', 1);
            $seq = $this->db_sys->get('s_sequential_number')->row();

            if ($seq) {
                $toupdate = array();
                $new_length = $seq->digit_length * -1;
                //perfix
                $str_prefix = $seq->prefix;
                if ($str_prefix) {
                    //replace if date
                    $new_prefix = str_replace('{Y}', date('Y'), $str_prefix);
                    $new_prefix = str_replace('{y}', date('y'), $new_prefix);
                    $new_prefix = str_replace('{m}', date('m'), $new_prefix);
                    $new_prefix = str_replace('{d}', date('d'), $new_prefix);
                    //bulan romawi
                    $new_prefix = str_replace('{MONTH}', getMonth(date('Y-m-d'), 'I'), $new_prefix);
                }
                /*reset?*/
                $sys_date = $seq->system_date;
                $sys_year = substr($sys_date, 0, 4);
                $sys_month = substr($sys_date, 5, 2);
                //reset by?
                if ($seq->reset_by == 'year') {
                    if ($sys_year != date('Y')) {
                        /*update system_date & reset counter*/
                        $toupdate['system_date'] = date('Y-m-d');
                        $new_current = $seq->increment;
                    } else {
                        $new_current = $seq->current_increment + $seq->increment;
                    }
                } elseif ($seq->reset_by == 'month') {
                    if ($sys_year != date('Y') || $sys_month != date('m')) {
                        /*update system_date & reset counter*/
                        $toupdate['system_date'] = date('Y-m-d');
                        $new_current = $seq->increment;
                    } else {
                        $new_current = $seq->current_increment + $seq->increment;
                    }
                } else {
                    $new_current = $seq->current_increment + $seq->increment;
                }
                //build number
                //is before prefix?
                if ($seq->is_before_prefix == 1) {
                    $new_number = substr('00000000000'.$new_current, $new_length) . $new_prefix;
                } else {
                    $new_number = $new_prefix . substr('00000000000'.$new_current, $new_length);
                }
                
                $toupdate['current_increment'] = $new_current;
                $toupdate['last_output'] = $new_number;
                //update
                $this->db_sys->where('sequential_id', $seq->sequential_id);
                $this->db_sys->update('s_sequential_number', $toupdate);
            }
        }
        
        return $new_number;
    }
}
