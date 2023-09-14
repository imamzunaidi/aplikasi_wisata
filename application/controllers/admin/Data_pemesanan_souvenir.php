<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pemesanan_souvenir extends CI_Controller {
    
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
            'title' => 'Data Pemesanan souvenir',
            'data_pemesanan_souvenir' => $this->M_pemesanan_souvenir->get_all(),
        );

        $this->templates->admin('v_data_pemesanan_souvenir', $data);
    }

    public function detail_pemesanan($id_pemesanan_souvenir){
        $data = array(
            'title' => 'Detail Pemesanan Souvenir',
            'data_bank' => $this->M_bank->get_all(),
            'detail_pemesanan_souvenir' => $this->M_pemesanan_souvenir->detail($id_pemesanan_souvenir),
            'data_pembayaran_souvenir' => $this->M_pembayaran->get_souvenir_by_id($id_pemesanan_souvenir),
            'data_souvenir' => $this->M_detail_pemesanan_souvenir->get_all($id_pemesanan_souvenir),
        );
        $this->templates->admin('v_detail_pemesanan_souvenir', $data);
    }

    public function konfirmasi($id_pemesanan_souvenir){
       
        $data = array(
            'status_pemesanan' => 'lunas',
        );

        $this->M_pemesanan_souvenir->update($data, $id_pemesanan_souvenir);

        $this->flash_message->success('Konfirmasi', 'data-pemesanan-souvenir');
        
    }


}

/* End of file Data_kategori.php */
