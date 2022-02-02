<?php
    class MyModel extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->library('parser');
        }

        public function ambildata()
        {
            $data = $this->db->get('namatablenya');
            return $data->result_array();
        }
        
    }
    