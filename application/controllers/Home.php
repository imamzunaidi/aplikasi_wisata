<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Aplikasi Desa Wisata',
            'data_homestay' => $this->M_homestay->get_limit(6),
            'data_souvenir' => $this->M_souvenir->get_limit(8),
            'data_kuliner' => $this->M_kuliner->get_limit(4),
            'data_karcis' => $this->M_karcis->get_limit(8),
            'profile' => $this->M_profile->get_all(),
        );
        $this->templates->pengunjung('v_home', $data);
    }

    public function detail_informasi($kd_informasi){
        $data = array(
            'informasi' => $this->M_informasi->get_by_id($kd_informasi),
        );
        $this->templates->pengunjung('v_detail_informasi', $data);
    }

    public function insert_pesan(){

        $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'subyek' => $this->input->post('subyek'),
            'pesan' => $this->input->post('pesan'),
        );
        $this->M_pesan->insert($data);
           
        $this->flash_message->success('terimakasi sudah memberikan pesan kepada kami', '');
        

    }

 
}

/* End of file Data_kategori.php */
