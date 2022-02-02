<?php
    class Tambah extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model("Tmbh_m");
        }
        public function index()
        {
            $this->load->view("tambah_vw");
        }
        public function adddata()
        {
            $this->form_validation->set_rules('npm', 'Npm', 'required|trim');
            $this->form_validation->set_rules('namamhs', 'Namamhs', 'required|trim');
            $this->form_validation->set_rules('jurusan', 'Jurusan', 'required|trim');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');

            if($this->form_validation->run() == false){
                $this->load->view('tambah_vw');
            }else{
                $npm = $this->input->post('npm');
                $namamhs = $this->input->post('namamhs');
                $jurusan = $this->input->post('jurusan');
                $alamat = $this->input->post('alamat');

                $this->Tmbh_m->mendaftar($npm, $namamhs, $jurusan, $alamat);
                $this->session->set_flashdata(
                    'message',
                    '<div class = "alert alert-success" role="alert">Selamat, Akun Anda Telah Dibuat!!!</div>'
                );
                redirect('beranda');
            }
        }
    }
    