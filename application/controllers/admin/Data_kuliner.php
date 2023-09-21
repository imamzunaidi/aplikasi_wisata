<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kuliner extends CI_Controller {
    
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
            'title' => 'Data Kuliner',
            'data_kuliner' => $this->M_kuliner->get_all(),
        );
        $this->templates->admin('v_data_kuliner', $data);
    }

    public function insert(){
        
        $gambar= $_FILES['gambar']['name'];

        $result_gambar= $this->upload_foto->upload($gambar,'gambar', 'kuliner');

        if($result_gambar== NULL ){
            $this->flash_message->failed('Foto Gagal di simpan', 'data-kuliner-admin');
        }
        
        $data = array(
            'nama_kuliner' => $this->input->post('nama_kuliner'),
            'harga_kuliner' => $this->input->post('harga_kuliner'),
            'deskripsi_kuliner' => $this->input->post('deskripsi_kuliner'),
            'alamat_kuliner' => $this->input->post('alamat_kuliner'),
            'gambar_kuliner' => $result_gambar,
        );

        $this->M_kuliner->insert($data);
        $this->flash_message->success('Tambahkan', 'data-kuliner-admin');
    }

    public function update(){

        $id_kuliner = $this->input->post('id_kuliner', TRUE);
        $kuliner = $this->M_kuliner->get_by_id($id_kuliner);
        $data_hapus = $kuliner->gambar_kuliner;

        $gambar= $_FILES['gambar']['name'];

        $result_foto = $this->upload_foto->update($gambar,'gambar','kuliner',$data_hapus);

        if($result_foto == NULL){
            $data = array(
                'nama_kuliner' => $this->input->post('nama_kuliner'),
                'harga_kuliner' => $this->input->post('harga_kuliner'),
                'deskripsi_kuliner' => $this->input->post('deskripsi_kuliner'),
                'alamat_kuliner' => $this->input->post('alamat_kuliner'),
            );
        }else{
            $data = array(
                'nama_kuliner' => $this->input->post('nama_kuliner'),
                'harga_kuliner' => $this->input->post('harga_kuliner'),
                'deskripsi_kuliner' => $this->input->post('deskripsi_kuliner'),
                'alamat_kuliner' => $this->input->post('alamat_kuliner'),
                'gambar_kuliner' => $result_foto,
            );
        }

        $this->M_kuliner->update($data, $id_kuliner);

        $this->flash_message->success('Update', 'data-kuliner-admin');
    }

    public function delete($id_kuliner){
        $this->M_kuliner->delete($id_kuliner);
        $this->flash_message->success('Di hapus', 'data-kuliner-admin');
    }

}

/* End of file Data_kategori.php */
