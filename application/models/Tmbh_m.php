<?php
    class Tmbh_m extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function mendaftar($nama, $email, $jurusan, $alamat)
        {
            $input = array(
                'npm' => $nama,
                'nama' => $email,
                'jurusan' => $jurusan,
                'alamat' => $alamat
            );

            $this->db->insert('datamhs', $input);
        }
    }
    