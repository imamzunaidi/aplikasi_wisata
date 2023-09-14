<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pemesanan_homestay extends CI_Controller {
    
    public function __construct(){ 
		parent::__construct(); 
        $hak_akses = $this->session->userdata('hak_akses');
      
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

    public function index(){

        $data = array(
            'title' => 'Data Pemesanan Homestay',
            'data_pemesanan_homestay' => $this->M_pemesanan_home_stay->get_all(),
        );

        $this->templates->admin('v_data_pemesanan_homestay', $data);
    }

    public function detail_pemesanan($id_pemesanan_homestay){
        $data = array(
            'title' => 'Detail Pemesanan Homestay',
            'data_bank' => $this->M_bank->get_all(),
            'detail_pemesanan_homestay' => $this->M_pemesanan_home_stay->detail($id_pemesanan_homestay),
            'data_pembayaran_homestay' => $this->M_pembayaran->get_homestay_by_id($id_pemesanan_homestay),
        );
        $this->templates->admin('v_detail_pemesanan_homestay', $data);
    }

    public function konfirmasi($id_pemesanan_homestay){
       
        $data = array(
            'status_pemesanan' => 'lunas',
        );

        $this->M_pemesanan_home_stay->update($data, $id_pemesanan_homestay);

        $this->flash_message->success('Konfirmasi', 'data-pemesanan-homestay');
        
    }


}

/* End of file Data_kategori.php */
