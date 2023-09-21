<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_riwayat_homestay extends CI_Controller {
    
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
            'title' => 'Data Homestay',
            'data_pemesanan_homestay' => $this->M_pemesanan_home_stay->get_riwayat($id_member),
        );

        $this->templates->pengunjung('v_data_riwayat_homestay', $data);
    }

    public function detail_pembayaran_homestay($id_pemesanan_homestay){
        $data = array(
            'title' => 'Detail Pemesanan Homestay',
            'data_bank' => $this->M_bank->get_all(),
            'detail_pembayaran_homestay' => $this->M_pembayaran->detail_riwayat_homestay($id_pemesanan_homestay),
        );

        $this->templates->pengunjung('v_detail_pembayaran_homestay', $data);
    }

}

/* End of file Data_kategori.php */
