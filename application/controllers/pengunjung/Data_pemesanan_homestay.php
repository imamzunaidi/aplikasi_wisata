<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pemesanan_homestay extends CI_Controller {
    
    public function __construct(){ 
		parent::__construct(); 
        $id_member = $this->session->userdata('id_member');

        if($id_member == ''){
            $this->flash_message->failed('Wajib Login Dulu', 'home');
        }
	}

    public function index(){
        $data = array(
            'title' => 'Data Homestay',
            'data_pemesanan_homestay' => $this->M_pemesanan_home_stay->get_all(),
        );

        $this->templates->pengunjung('v_data_pemesanan_homestay', $data);
    }

    public function pemesanan($id_home_stay)
    {
        $data = array(
            'title' => 'Data kuliner',
            'data_pemesanan_homestay' => $this->M_homestay->get_by_id($id_home_stay),
        );
        $this->templates->pengunjung('v_create_pemesanan_homestay', $data);
    }

    public function insert(){
        $data = array(
            'nama_pemesan' => $this->input->post('nama_pemesan', TRUE),
            'no_telp_pemesan' => $this->input->post('no_telp_pemesan', TRUE),
            'email_pemesan' => $this->input->post('email_pemesan', TRUE),
            'check_in' => $this->input->post('check_in', TRUE),
            'check_out' => $this->input->post('check_out', TRUE),
            'jumlah_hari' => $this->input->post('jumlah_hari', TRUE),
            'total_harga' => $this->input->post('total_harga', TRUE),
            'keterangan_tambahan' => $this->input->post('keterangan_tambahan', TRUE),
            'id_home_stay' => $this->input->post('id_home_stay', TRUE),
            'id_member' => $this->session->userdata('id_member'),
        );

        $this->M_pemesanan_home_stay->insert($data);
        $this->flash_message->success('Tambahkan', 'pesanan-homestay');
    }

    public function delete_pemesanan($id_pemesanan_homestay){
        $this->M_pemesanan_home_stay->delete($id_pemesanan_homestay);
        $this->flash_message->success('Di hapus', 'pesanan-homestay');
    }

    public function detail_pemesanan($id_pemesanan_homestay){
        $data = array(
            'title' => 'Detail Pemesanan Homestay',
            'data_bank' => $this->M_bank->get_all(),
            'detail_pemesanan_homestay' => $this->M_pemesanan_home_stay->detail($id_pemesanan_homestay),
        );

        $this->templates->pengunjung('v_detail_pemesanan_homestay', $data);
    }

}

/* End of file Data_kategori.php */
