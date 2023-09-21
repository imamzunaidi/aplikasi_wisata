<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pemesanan_karcis extends CI_Controller {
    
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
            'title' => 'Data Pemesanan karcis',
            'data_pemesanan_karcis' => $this->M_pemesanan_karcis->get_all(),
        );

        $this->templates->admin('v_data_pemesanan_karcis', $data);
    }

    public function detail_pemesanan($id_pemesanan_karcis){
        $data = array(
            'title' => 'Detail Pemesanan karcis',
            'data_bank' => $this->M_bank->get_all(),
            'detail_pemesanan_karcis' => $this->M_pemesanan_karcis->detail($id_pemesanan_karcis),
            'data_pembayaran_karcis' => $this->M_pembayaran->get_karcis_by_id($id_pemesanan_karcis),
            'data_karcis' => $this->M_detail_pemesanan_karcis->get_all($id_pemesanan_karcis),
        );
        $this->templates->admin('v_detail_pemesanan_karcis', $data);
    }

    public function konfirmasi($id_pemesanan_karcis){
       
        $data = array(
            'status_pemesanan' => 'lunas',
        );

        $this->M_pemesanan_karcis->update($data, $id_pemesanan_karcis);

        $this->flash_message->success('Konfirmasi', 'data-pemesanan-karcis');
        
    }


}

/* End of file Data_kategori.php */
