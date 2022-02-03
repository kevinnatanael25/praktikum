<?php
    class Cobaapi extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Datamhs');
            $this->load->model('Tmbh_m');
            header("Access-Control-Allow-Origin: *");
            header("Access-Control-Allow-Methods: GET, POST, PUT, OPTIONS");
            header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
        }
        public function get($data = null)
        {
            $hasil = $this->Datamhs->ambildata($data);
            echo json_encode($hasil);
        }
        public function post()
        {
            $data = json_decode($this->input->_raw_input_stream);
            echo json_encode($data);
        }
        public function ubah()
        {
            $this->db->where('id');
            $data = json_decode($this->input->_raw_input_stream);
            echo json_encode($data);
        }
        public function hapus($id = null)
        {
            $hasil = $this->Datamhs->hapusdata($id);
            echo json_encode($hasil);
        }
    }
    