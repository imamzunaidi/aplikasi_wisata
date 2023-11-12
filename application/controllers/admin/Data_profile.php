<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_profile extends CI_Controller {

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
            'title' => 'Data Profile Wisata',
            'profile' => $this->M_profile->get_all(),
        );

        $this->templates->admin('v_data_profile', $data);
    }

    public function update(){
        $id_profile = $this->input->post('id_profile', TRUE);
        $profile = $this->M_profile->get_by_id($id_profile);
        $data_hapus = $profile->gambar;

        $gambar= $_FILES['gambar']['name'];

        $result_foto = $this->upload_foto->update($gambar,'gambar','profile',$data_hapus);

        if($result_foto == NULL){
            $data = array(
                'visi' => $this->input->post('visi', TRUE),
                'email' => $this->input->post('email', TRUE),
                'misi' => $this->input->post('misi', TRUE),
                'no_hp' => $this->input->post('no_hp', TRUE),
                'deskripsi' => $this->input->post('deskripsi', TRUE),
                'facebook' => $this->input->post('facebook', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                'instagram' => $this->input->post('instagram', TRUE),
            );
        }else{
            $data = array(
                'visi' => $this->input->post('visi', TRUE),
                'email' => $this->input->post('email', TRUE),
                'misi' => $this->input->post('misi', TRUE),
                'no_hp' => $this->input->post('no_hp', TRUE),
                'deskripsi' => $this->input->post('deskripsi', TRUE),
                'facebook' => $this->input->post('facebook', TRUE),
                'instagram' => $this->input->post('instagram', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                'gambar' => $result_foto,
            );
        }
        
        $this->M_profile->update($data, $id_profile);
        $this->flash_message->success('Update', 'data-profile');
       
    }

}

/* End of file Data_kategori.php */
