<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct(){ 
		parent::__construct(); 
        $hak_akses = $this->session->userdata('hak_akses');
      
        switch ($hak_akses) {
            case 'admin':
                if($hak_akses != 'admin'){
                    $this->flash_message->failed('Wajib Login Dulu', 'login');
                }
                break;
            case 'desa':
                if($hak_akses != 'desa'){
                    $this->flash_message->failed('Wajib Login Dulu', 'login');
                }
                break;
            default:
            $this->flash_message->failed('Wajib Login Dulu', 'login');
            break;
        }
	}
    

	public function index(){
        
        $data = array(
            'title' => 'Dashboard',
            'jumlah_pemesanan_home_stay' => $this->M_pemesanan_home_stay->jumlah_pemesanan_home_stay(),
            'jumlah_pemesanan_kuliner' => $this->M_pemesanan_kuliner->jumlah_pemesanan_kuliner(),
            'jumlah_pemesanan_karcis' => $this->M_pemesanan_karcis->jumlah_pemesanan_karcis(),
            'jumlah_pemesanan_souvenir' => $this->M_pemesanan_souvenir->jumlah_pemesanan_souvenir(),
        );

        $this->templates->admin('v_dashboard', $data);
    }

 

}
