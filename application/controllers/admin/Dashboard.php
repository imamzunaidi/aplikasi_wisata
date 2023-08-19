<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $hak_akses = $this->session->userdata('hak_akses');

        if ($hak_akses == NULL) {
            $this->flash_message->failed('Wajib Login Dulu', 'login');
        }
        
        switch ($hak_akses) {
            case 'admin':
                if($hak_akses != 'admin'){
                    $this->flash_message->failed('Wajib Login Dulu', 'login');
                }
                break;
            $this->flash_message->failed('Wajib Login Dulu', 'login');
            break;
        }
    }
    

	public function index(){
        
        $data = array(
            'title' => 'Dashboard',
            // 'jumlah_keterima' => $this->M_berkas_siswa->jumlah_keterima(),
            // 'jumlah_ketolak' => $this->M_berkas_siswa->jumlah_ditolak(),
            // 'jumlah_pendaftar' => $this->M_berkas_siswa->jumlah_pendaftaran(),
            // 'jumlah_pesan' => $this->M_pesan->jumlah_pesan(),
        );

        $this->templates->admin('v_dashboard', $data);
    }

 

}
