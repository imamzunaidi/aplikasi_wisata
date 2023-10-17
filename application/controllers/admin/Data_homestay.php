<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_homestay extends CI_Controller {
    
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
            'title' => 'Data Home Stay',
            'data_homestay' => $this->M_homestay->get_all(),
        );
        $this->templates->admin('v_data_home_stay', $data);
    }

    public function insert(){
        
        $gambar= $_FILES['gambar']['name'];

        $result_gambar= $this->upload_foto->upload($gambar,'gambar', 'homestay');

        if($result_gambar== NULL ){
            $this->flash_message->failed('Foto Gagal di simpan', 'data-home-stay-admin');
        }
        
        $data = array(
            'nama_home_stay' => $this->input->post('nama_home_stay'),
            'harga_home_stay' => $this->input->post('harga_home_stay'),
            'maximal_home_stay' => $this->input->post('maximal_home_stay'),
            'deskripsi_home_stay' => $this->input->post('deskripsi_home_stay'),
            'alamat_home_stay' => $this->input->post('alamat_home_stay'),
            'gambar_home_stay' => $result_gambar,
        );

        $this->M_homestay->insert($data);
        $this->flash_message->success('Tambahkan', 'data-home-stay-admin');
    }

    public function update(){

        $id_home_stay = $this->input->post('id_home_stay', TRUE);
        $home_stay = $this->M_homestay->get_by_id($id_home_stay);
        $data_hapus = $home_stay->gambar_home_stay;

        $gambar= $_FILES['gambar']['name'];

        $result_foto = $this->upload_foto->update($gambar,'gambar','homestay',$data_hapus);

        if($result_foto == NULL){
            $data = array(
                'nama_home_stay' => $this->input->post('nama_home_stay'),
                'harga_home_stay' => $this->input->post('harga_home_stay'),
                'maximal_home_stay' => $this->input->post('maximal_home_stay'),
                'deskripsi_home_stay' => $this->input->post('deskripsi_home_stay'),
                'alamat_home_stay' => $this->input->post('alamat_home_stay'),
                'status_home_stay' => $this->input->post('status_home_stay'),
            );
        }else{
            $data = array(
                'nama_home_stay' => $this->input->post('nama_home_stay'),
                'harga_home_stay' => $this->input->post('harga_home_stay'),
                'maximal_home_stay' => $this->input->post('maximal_home_stay'),
                'deskripsi_home_stay' => $this->input->post('deskripsi_home_stay'),
                'alamat_home_stay' => $this->input->post('alamat_home_stay'),
                'status_home_stay' => $this->input->post('status_home_stay'),
                'gambar_home_stay' => $result_foto,
            );
        }

        $this->M_homestay->update($data, $id_home_stay);

        $this->flash_message->success('Update', 'data-home-stay-admin');
    }

    public function delete($id_home_stay){
        $this->M_homestay->delete($id_home_stay);
        $this->flash_message->success('Di hapus', 'data-home-stay-admin');
    }


}

/* End of file Data_kategori.php */
