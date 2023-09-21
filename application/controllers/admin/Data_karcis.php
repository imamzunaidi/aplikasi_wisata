<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_karcis extends CI_Controller {
    
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
            'title' => 'Data karcis',
            'data_karcis' => $this->M_karcis->get_all(),
        );
        $this->templates->admin('v_data_karcis', $data);
    }

    public function insert(){
        
        $gambar= $_FILES['gambar']['name'];

        $result_gambar= $this->upload_foto->upload($gambar,'gambar', 'karcis');

        if($result_gambar== NULL ){
            $this->flash_message->failed('Foto Gagal di simpan', 'data-karcis-admin');
        }
        
        $data = array(
            'nama_karcis' => $this->input->post('nama_karcis'),
            'harga_karcis' => $this->input->post('harga_karcis'),
            'stok_karcis' => $this->input->post('stok_karcis'),
            'deskripsi_karcis' => $this->input->post('deskripsi_karcis'),
            'alamat_karcis' => $this->input->post('alamat_karcis'),
            'gambar_karcis' => $result_gambar,
        );

        $this->M_karcis->insert($data);
        $this->flash_message->success('Tambahkan', 'data-karcis-admin');
    }

    public function update(){

        $id_karcis = $this->input->post('id_karcis', TRUE);
        $karcis = $this->M_karcis->get_by_id($id_karcis);
        $data_hapus = $karcis->gambar_karcis;

        $gambar= $_FILES['gambar']['name'];

        $result_foto = $this->upload_foto->update($gambar,'gambar','karcis',$data_hapus);

        if($result_foto == NULL){
            $data = array(
                'nama_karcis' => $this->input->post('nama_karcis'),
                'harga_karcis' => $this->input->post('harga_karcis'),
                'stok_karcis' => $this->input->post('stok_karcis'),
                'deskripsi_karcis' => $this->input->post('deskripsi_karcis'),
                'alamat_karcis' => $this->input->post('alamat_karcis'),
            );
        }else{
            $data = array(
                'nama_karcis' => $this->input->post('nama_karcis'),
                'harga_karcis' => $this->input->post('harga_karcis'),
                'stok_karcis' => $this->input->post('stok_karcis'),
                'deskripsi_karcis' => $this->input->post('deskripsi_karcis'),
                'alamat_karcis' => $this->input->post('alamat_karcis'),
                'gambar_karcis' => $result_foto,
            );
        }

        $this->M_karcis->update($data, $id_karcis);

        $this->flash_message->success('Update', 'data-karcis-admin');
    }

    public function delete($id_karcis){
        $this->M_karcis->delete($id_karcis);
        $this->flash_message->success('Di hapus', 'data-karcis-admin');
    }


}

/* End of file Data_kategori.php */
