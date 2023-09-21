<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pemesanan_kuliner extends CI_Controller {
    
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
            'title' => 'Data Pemesanan kuliner',
            'data_pemesanan_kuliner' => $this->M_pemesanan_kuliner->get_all(),
        );

        $this->templates->admin('v_data_pemesanan_kuliner', $data);
    }

    public function detail_pemesanan($id_pemesanan_kuliner){
        $data = array(
            'title' => 'Detail Pemesanan kuliner',
            'data_bank' => $this->M_bank->get_all(),
            'detail_pemesanan_kuliner' => $this->M_pemesanan_kuliner->detail($id_pemesanan_kuliner),
            'data_pembayaran_kuliner' => $this->M_pembayaran->get_kuliner_by_id($id_pemesanan_kuliner),
            'data_kuliner' => $this->M_detail_pemesanan_kuliner->get_all($id_pemesanan_kuliner),
        );
        $this->templates->admin('v_detail_pemesanan_kuliner', $data);
    }

    public function konfirmasi($id_pemesanan_kuliner){
       
        $data = array(
            'status_pemesanan' => 'lunas',
        );

        $this->M_pemesanan_kuliner->update($data, $id_pemesanan_kuliner);

        $this->flash_message->success('Konfirmasi', 'data-pemesanan-kuliner');
        
    }


}

/* End of file Data_kategori.php */
