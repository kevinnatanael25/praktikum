<?php
    class Backupdb extends CI_Controller
    {
        public function bckdb()
        {
            $this->load->dbutil();

            $aturan = array(
                'format' => 'zip',
                'filename' => 'databaseku.sql'
            );

            $bckupan = &$this->dbutil->Backup($aturan);
            $webci  = 'backup-on-' . date("Y-m-d-H-i-s") . 'zip';
            $simpan = '/backup' . $webci;

            $this->load->helper('file');
            write_file($simpan, $bckupan);

            $this->load->helper('download');
            force_download($webci, $bckupan);
        }
    }
    