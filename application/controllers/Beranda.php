<?php
    class Beranda extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model("Datamhs");
        }
        public function index()
        {
            $hdata['hasil'] = $this->Datamhs->ambildata();
            $this->load->view('beranda_vw', $hdata);
        }
        public function edit($id)
        {
            $data['hasil'] = $this->Datamhs->editdata($id);
            $this->load->view("edit_vw", $data);
        }
        public function updatex()
        {
            $id = $this->input->post('id');
            $data = array(
                'npm' => $this->input->post('npm'),
                'nama' => $this->input->post('namamhs'),
                'jurusan' => $this->input->post('jurusan'),
                'alamat' => $this->input->post('alamat'),
            );
            $this->Datamhs->updatedata($id, $data);
            redirect('beranda/index');
        }
        public function hapus($id)
        {
            $this->Datamhs->hapusdata($id);
            redirect('beranda');
        }
    }

?>