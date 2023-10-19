<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_bank extends CI_Controller {
    
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
            'title' => 'Data Bank',
            'data_bank' => $this->M_bank->get_all(),
        );
        $this->templates->admin('v_data_bank', $data);
    }

    public function insert(){
        $data = array(
            'nama_bank' => $this->input->post('nama_bank', TRUE),
            'no_rek' => $this->input->post('no_rek'),
            'atas_nama' => $this->input->post('atas_nama'),
        );

        $this->M_bank->insert($data);
        $this->flash_message->success('Tambahkan', 'data-bank');
    }

    public function update(){
        $id_bank = $this->input->post('id_bank', TRUE);
        
        $data = array(
            'nama_bank' => $this->input->post('nama_bank', TRUE),
            'no_rek' => $this->input->post('no_rek'),
            'atas_nama' => $this->input->post('atas_nama'),
        );
      
        $this->M_bank->update($data, $id_bank);
        $this->flash_message->success('Update', 'data-bank');
    }

    public function delete($id_bank){       
        $this->M_bank->delete($id_bank);
        $this->flash_message->success('Hapus', 'data-bank');
    
    }

}

/* End of file Data_bank.php */
