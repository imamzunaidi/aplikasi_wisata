<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_souvenir extends CI_Controller {
    
    public function __construct(){ 
		parent::__construct(); 
        $hak_akses = $this->session->userdata('hak_akses');

        if($hak_akses == ''){
            $this->flash_message->failed('Wajib Login Dulu', 'login');
        }
      
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
            'title' => 'Data Souvenir',
            'data_souvenir' => $this->M_souvenir->get_all(),
        );
        $this->templates->admin('v_data_souvenir', $data);
    }

    public function insert(){
        
        $gambar= $_FILES['gambar']['name'];

        $result_gambar= $this->upload_foto->upload($gambar,'gambar', 'souvenir');

        if($result_gambar== NULL ){
            $this->flash_message->failed('Foto Gagal di simpan', 'data-souvenir-admin');
        }
        
        $data = array(
            'nama_souvenir' => $this->input->post('nama_souvenir'),
            'harga_souvenir' => $this->input->post('harga_souvenir'),
            'stok_souvenir' => $this->input->post('stok_souvenir'),
            'deskripsi_souvenir' => $this->input->post('deskripsi_souvenir'),
            'gambar_souvenir' => $result_gambar,
        );

        $this->M_souvenir->insert($data);
        $this->flash_message->success('Tambahkan', 'data-souvenir-admin');
    }

    public function update(){

        $id_souvenir = $this->input->post('id_souvenir', TRUE);
        $souvenir = $this->M_souvenir->get_by_id($id_souvenir);
        $data_hapus = $souvenir->gambar_souvenir;

        $gambar= $_FILES['gambar']['name'];

        $result_foto = $this->upload_foto->update($gambar,'gambar','souvenir',$data_hapus);

        if($result_foto == NULL){
            $data = array(
                'nama_souvenir' => $this->input->post('nama_souvenir'),
                'harga_souvenir' => $this->input->post('harga_souvenir'),
                'stok_souvenir' => $this->input->post('stok_souvenir'),
                'deskripsi_souvenir' => $this->input->post('deskripsi_souvenir'),

            );
        }else{
            $data = array(
                'nama_souvenir' => $this->input->post('nama_souvenir'),
                'harga_souvenir' => $this->input->post('harga_souvenir'),
                'stok_souvenir' => $this->input->post('stok_souvenir'),
                'deskripsi_souvenir' => $this->input->post('deskripsi_souvenir'),

                'gambar_souvenir' => $result_foto,
            );
        }

        $this->M_souvenir->update($data, $id_souvenir);

        $this->flash_message->success('Update', 'data-souvenir-admin');
    }

    public function delete($id_souvenir){
        $this->M_souvenir->delete($id_souvenir);
        $this->flash_message->success('Di hapus', 'data-souvenir-admin');
    }


}

/* End of file Data_kategori.php */
