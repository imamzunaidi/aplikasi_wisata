<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_riwayat_souvenir extends CI_Controller {
    
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
            'title' => 'Data souvenir',
            'data_pemesanan_souvenir' => $this->M_pemesanan_souvenir->get_riwayat($id_member),
        );

        $this->templates->pengunjung('v_data_riwayat_sovenir', $data);
    }


    public function detail_pembayaran_souvenir($id_pembayaran){
        $data_pemesanan = $this->M_pembayaran->detail_pembayaran_souvenir($id_pembayaran);
        $data = array(
            'title' => 'Detail Pemesanan Souvenir',
            'data_bank' => $this->M_bank->get_all(),
            'detail_pembayaran_souvenir' => $this->M_pembayaran->detail_pembayaran_souvenir($id_pembayaran),
            'detail_pemesanan' => $this->M_detail_pemesanan_souvenir->get_all($data_pemesanan->id_pemesanan_souvenir),
        );


        $this->templates->pengunjung('v_detail_pembayaran_souvenir', $data);
    }

}

/* End of file Data_kategori.php */
