<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_member extends CI_Controller {

    public function __construct(){ 
		parent::__construct(); 
        $hak_akses = $this->session->userdata('hak_akses');
      
        switch ($hak_akses) {
            case 'admin':
                if($hak_akses != 'admin'){
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
            'title' => 'Data member',
            'data_member' => $this->M_member->get_all(),
        );
        $this->templates->admin('v_data_member', $data);
    }



}

/* End of file Data_kategori.php */
