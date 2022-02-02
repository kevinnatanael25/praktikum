<?php
    class Datamhs extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->library('parser');
        }
        public function ambildata()
        {
            $data = $this->db->get('datamhs');
            return $data->result_array();
        }
        public function editdata($id)
        {
            $queryx = $this->db->get_where('datamhs', ['id' =>$id]);
            return $queryx->result();
        }
        function updatedata($id, $data)
        {
            $this->db->where('id', $id);
            $this->db->update('datamhs', $data);
        }
        public function hapusdata($id)
        {
            $this->db->delete('datamhs', ['id' => $id]);
        }
    }
?>