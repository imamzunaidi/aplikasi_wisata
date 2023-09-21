<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pembayaran extends CI_Controller {
    
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
    
    public function index()
    {
        $id_member = $this->session->userdata('id_member');
        $data = array(
            'title' => 'Data Pembayaran',
            'data_pembayaran_homestay' => $this->M_pembayaran->get_all_homestay($id_member),
            'data_pembayaran_kuliner' => $this->M_pembayaran->get_all_kuliner($id_member),
            'data_pembayaran_souvenir' => $this->M_pembayaran->get_all_souvenir($id_member),
            'data_pembayaran_karcis' => $this->M_pembayaran->get_all_karcis($id_member),
        );
        $this->templates->admin('v_data_pembayaran', $data);
    }



    public function pembayaran_homestay(){
        $gambar= $_FILES['gambar']['name'];

        $result_gambar= $this->upload_foto->upload($gambar,'gambar', 'pembayaran');

        if($result_gambar== NULL ){
            $this->flash_message->failed('Foto Gagal di simpan', 'pesanan-homestay');
        }
        
        $data = array(
            'pembayaran' => $this->input->post('pembayaran'),
            'id_pemesanan_homestay' => $this->input->post('id_pemesanan_homestay'),
            'id_bank' => $this->input->post('id_bank'),
            'kategori' => 'Pembayaran Homestay',
            'bukti_bayar' => $result_gambar,
        );

        $this->M_pembayaran->insert($data);


        $id_pemesanan_homestay = $this->input->post('id_pemesanan_homestay');

        $update = [
            'status_pemesanan' => 'menunggu konfirmasi'
        ];

        $this->M_pemesanan_home_stay->update($update, $id_pemesanan_homestay);

        $this->flash_message->success('Tambahkan', 'pembayaran');
    }


    public function pembayaran_kuliner(){
        $gambar= $_FILES['gambar']['name'];

        $result_gambar= $this->upload_foto->upload($gambar,'gambar', 'pembayaran');

        if($result_gambar== NULL ){
            $this->flash_message->failed('Foto Gagal di simpan', 'pesanan-kuliner');
        }
        
        $data = array(
            'pembayaran' => $this->input->post('pembayaran'),
            'id_pemesanan_kuliner' => $this->input->post('id_pemesanan_kuliner'),
            'id_bank' => $this->input->post('id_bank'),
            'kategori' => 'Pembayaran Kuliner',
            'bukti_bayar' => $result_gambar,
        );

        $this->M_pembayaran->insert($data);


        $id_pemesanan_kuliner = $this->input->post('id_pemesanan_kuliner');

        $update = [
            'status_pemesanan' => 'menunggu konfirmasi'
        ];

        $this->M_pemesanan_kuliner->update($update, $id_pemesanan_kuliner);

        $this->flash_message->success('Tambahkan', 'pembayaran');
    }

    public function pembayaran_souvenir(){
        $gambar= $_FILES['gambar']['name'];

        $result_gambar= $this->upload_foto->upload($gambar,'gambar', 'pembayaran');

        if($result_gambar== NULL ){
            $this->flash_message->failed('Foto Gagal di simpan', 'pesanan-kuliner');
        }
        
        $data = array(
            'pembayaran' => $this->input->post('pembayaran'),
            'id_pemesanan_souvenir' => $this->input->post('id_pemesanan_souvenir'),
            'id_bank' => $this->input->post('id_bank'),
            'kategori' => 'Pembayaran Souvenir',
            'bukti_bayar' => $result_gambar,
        );

        $this->M_pembayaran->insert($data);


        $id_pemesanan_souvenir = $this->input->post('id_pemesanan_souvenir');

        $update = [
            'status_pemesanan' => 'menunggu konfirmasi'
        ];

        $this->M_pemesanan_souvenir->update($update, $id_pemesanan_souvenir);

        $this->flash_message->success('Tambahkan', 'pembayaran');
    }

    public function pembayaran_karcis(){
        $gambar= $_FILES['gambar']['name'];

        $result_gambar= $this->upload_foto->upload($gambar,'gambar', 'pembayaran');

        if($result_gambar== NULL ){
            $this->flash_message->failed('Foto Gagal di simpan', 'pesanan-karcis');
        }
        
        $data = array(
            'pembayaran' => $this->input->post('pembayaran'),
            'id_pemesanan_karcis' => $this->input->post('id_pemesanan_karcis'),
            'id_bank' => $this->input->post('id_bank'),
            'kategori' => 'Pembayaran Karcis',
            'bukti_bayar' => $result_gambar,
        );

        $this->M_pembayaran->insert($data);


        $id_pemesanan_karcis = $this->input->post('id_pemesanan_karcis');

        $update = [
            'status_pemesanan' => 'menunggu konfirmasi'
        ];

        $this->M_pemesanan_karcis->update($update, $id_pemesanan_karcis);

        $this->flash_message->success('Tambahkan', 'pembayaran');
    }


    public function detail_pembayaran_homestay($id_pembayaran){
        $data = array(
            'title' => 'Detail Pemesanan Homestay',
            'data_bank' => $this->M_bank->get_all(),
            'detail_pembayaran_homestay' => $this->M_pembayaran->detail_pembayaran_homestay($id_pembayaran),
        );

        $this->templates->admin('v_detail_pembayaran_homestay', $data);
    }
  
    public function detail_pembayaran_kuliner($id_pembayaran){
        $data_pemesanan = $this->M_pembayaran->detail_pembayaran_kuliner($id_pembayaran);
        $data = array(
            'title' => 'Detail Pemesanan Kuliner',
            'data_bank' => $this->M_bank->get_all(),
            'detail_pembayaran_kuliner' => $this->M_pembayaran->detail_pembayaran_kuliner($id_pembayaran),
            'detail_pemesanan' => $this->M_detail_pemesanan_kuliner->get_all($data_pemesanan->id_pemesanan_kuliner),
        );


        $this->templates->admin('v_detail_pembayaran_kuliner', $data);
    }
    
    public function detail_pembayaran_souvenir($id_pembayaran){
        $data_pemesanan = $this->M_pembayaran->detail_pembayaran_souvenir($id_pembayaran);
        $data = array(
            'title' => 'Detail Pemesanan Souvenir',
            'data_bank' => $this->M_bank->get_all(),
            'detail_pembayaran_souvenir' => $this->M_pembayaran->detail_pembayaran_souvenir($id_pembayaran),
            'detail_pemesanan' => $this->M_detail_pemesanan_souvenir->get_all($data_pemesanan->id_pemesanan_souvenir),
        );


        $this->templates->admin('v_detail_pembayaran_souvenir', $data);
    }

    public function detail_pembayaran_karcis($id_pembayaran){
        $data_pemesanan = $this->M_pembayaran->detail_pembayaran_karcis($id_pembayaran);
        $data = array(
            'title' => 'Detail Pemesanan karcis',
            'data_bank' => $this->M_bank->get_all(),
            'detail_pembayaran_karcis' => $this->M_pembayaran->detail_pembayaran_karcis($id_pembayaran),
            'detail_pemesanan' => $this->M_detail_pemesanan_karcis->get_all($data_pemesanan->id_pemesanan_karcis),
        );


        $this->templates->admin('v_detail_pembayaran_karcis', $data);
    }
    

    public function search(){
        $search = $this->input->post('search');

        $data = array(
            'title' => 'Data Kuliner',
            'data_kuliner' => $this->M_kuliner->get_search($search),
        );
        $this->templates->admin('v_data_pembayaran', $data);
    }

}

/* End of file Data_kategori.php */
