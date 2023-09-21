<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pesan extends CI_Controller {

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

    public function index()
    {
        $data = array(
            'title' => 'Data Pesan Kontak',
            'data_pesan' => $this->M_pesan->get_all(),
        );
        $this->templates->admin('v_data_pesan', $data);
    }

}

/* End of file Data_kategori.php */


