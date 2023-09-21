<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_riwayat_kuliner extends CI_Controller {
    
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
            'title' => 'Data kuliner',
            'data_pemesanan_kuliner' => $this->M_pemesanan_kuliner->get_riwayat($id_member),
        );

        $this->templates->pengunjung('v_data_riwayat_kuliner', $data);
    }

    public function detail_pembayaran_kuliner($id_pemesanan_kuliner){
        $data_pemesanan = $this->M_pemesanan_kuliner->detail($id_pemesanan_kuliner);
        $data = array(
            'title' => 'Detail Pemesanan kuliner',
            'data_bank' => $this->M_bank->get_all(),
            'detail_pembayaran_kuliner' => $this->M_pembayaran->detail_riwayat_kuliner($id_pemesanan_kuliner),
            'detail_pemesanan' => $this->M_detail_pemesanan_kuliner->get_all($data_pemesanan->id_pemesanan_kuliner),
        );


        $this->templates->pengunjung('v_detail_pembayaran_kuliner', $data);
    }

}

/* End of file Data_kategori.php */
