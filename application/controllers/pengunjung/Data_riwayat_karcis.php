<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_riwayat_karcis extends CI_Controller {
    
    public function __construct(){ 
		parent::__construct(); 
        $id_member = $this->session->userdata('id_member');

        if($id_member == ''){
            $this->flash_message->failed('Wajib Login Dulu', 'home');
        }
	}

    public function index(){
        $id_member = $this->session->userdata('id_member');
        $data = array(
            'title' => 'Data Karcis',
            'data_pemesanan_karcis' => $this->M_pemesanan_karcis->get_riwayat($id_member),
        );

        $this->templates->pengunjung('v_data_riwayat_karcis', $data);
    }

    public function detail_pembayaran_karcis($id_pemesanan_karcis){
        $data_pemesanan = $this->M_pemesanan_karcis->detail($id_pemesanan_karcis);
        $data = array(
            'title' => 'Detail Pemesanan karcis',
            'data_bank' => $this->M_bank->get_all(),
            'detail_pembayaran_karcis' => $this->M_pembayaran->detail_riwayat_karcis($id_pemesanan_karcis),
            'detail_pemesanan' => $this->M_detail_pemesanan_karcis->get_all($data_pemesanan->id_pemesanan_karcis),
        );


        $this->templates->pengunjung('v_detail_pembayaran_karcis', $data);
    }

}

/* End of file Data_kategori.php */
