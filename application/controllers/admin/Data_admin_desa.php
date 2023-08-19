<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_admin_desa extends CI_Controller {

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
            'title' => 'Data Admin Desa',
            'data_admin' => $this->M_admin->get_admin_desa(),
        );
        $this->templates->admin('v_data_admin_desa', $data);
    }

    public function insert(){

        $data = array(
            'nama_admin' => $this->input->post('nama_admin', TRUE),
            'username' => $this->input->post('username', TRUE),
            'password' => md5($this->input->post('password', TRUE)),
            'no_hp' => $this->input->post('no_hp', TRUE),
            'alamat' => $this->input->post('alamat', TRUE),
            'email' => $this->input->post('email', TRUE),
            'hak_akses' => 'desa',
        );

        $this->M_admin->insert($data);
        $this->flash_message->success('Tambahkan', 'data-admin-desa');
    }

    public function update(){

        $id_users = $this->input->post('id_users', TRUE);
        $data = array(
            'nama_admin' => $this->input->post('nama_admin', TRUE),
            'username' => $this->input->post('username', TRUE),
            'password' => md5($this->input->post('password', TRUE)),
            'no_hp' => $this->input->post('no_hp', TRUE),
            'alamat' => $this->input->post('alamat', TRUE),
            'email' => $this->input->post('email', TRUE),
        );

        $this->M_admin->update($data, $id_users);
        $this->flash_message->success('Update', 'data-admin-desa');
    }

    public function delete($id_admin){

        $this->M_admin->delete($id_admin);
        $this->flash_message->success('Status Non Aktif', 'data-admin-desa');
    }

}

/* End of file Data_kategori.php */
