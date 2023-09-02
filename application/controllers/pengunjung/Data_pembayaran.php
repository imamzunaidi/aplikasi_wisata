<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pembayaran extends CI_Controller {
    


    public function index()
    {
        $data = array(
            'title' => 'Data Pembayaran',
            'data_pembayaran_homestay' => $this->M_pembayaran->get_pembayaran_homestay(),
        );
        $this->templates->pengunjung('v_data_pembayaran', $data);
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

    public function detail_pembayaran_homestay($id_pembayaran){
        $data = array(
            'title' => 'Detail Pemesanan Homestay',
            'data_bank' => $this->M_bank->get_all(),
            'detail_pembayaran_homestay' => $this->M_pembayaran->detail_pembayaran_homestay($id_pembayaran),
        );

        $this->templates->pengunjung('v_detail_pembayaran_homestay', $data);
    }
  
    public function search(){
        $search = $this->input->post('search');

        $data = array(
            'title' => 'Data Kuliner',
            'data_kuliner' => $this->M_kuliner->get_search($search),
        );
        $this->templates->pengunjung('v_data_pembayaran', $data);
    }

}

/* End of file Data_kategori.php */
