<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pemesanan_kuliner extends CI_Controller {
    
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
            'data_pemesanan_kuliner' => $this->M_pemesanan_kuliner->get_member($id_member),
        );

        $this->templates->pengunjung('v_data_pemesanan_kuliner', $data);
    }

    public function pemesanan()
    {
        $data = array(
            'title' => 'Data kuliner',
            'data_kuliner' => $this->M_kuliner->get_all(),
        
        );
        $this->templates->pengunjung('v_create_pemesanan_kuliner', $data);
    }

    public function insert(){
        $id_member = $this->session->userdata('id_member');

        date_default_timezone_set('Asia/Jakarta');
        $hari_ini = date('Y-m-d H:i:s');

        $data = array(
            'id_member' => $id_member,
            'nama_pemesan' => $this->input->post('nama_pemesan', TRUE),
            'no_telp_pemesan' => $this->input->post('no_telp_pemesan', TRUE),
            'total_harga' => $this->input->post('total_harga', TRUE),
            'keterangan_tambahan' => $this->input->post('keterangan_tambahan', TRUE),
            'tanggal_pemesanan' => date('Y-m-d H:i:s'),
            'batas_pemesanan' => date('Y-m-d H:i:s', strtotime($hari_ini . ' +1 day')),
            'status_pemesanan' => 'lakukan pembayaran',
        );

        $this->db->insert('tbl_pemesanan_kuliner', $data);
        $insert_id = $this->db->insert_id();

        $id_kuliner = $this->input->post('id_kuliner', TRUE);
        $subtotal = $this->input->post('subtotal', TRUE);
        $qty = $this->input->post('qty', TRUE);

        $index = 0;
        foreach ($id_kuliner as $key => $value) {
            # code...
            $data_detail = [
                'id_kuliner' => $value,
                'id_pemesanan_kuliner' => $insert_id,
                'subtotal' => $subtotal[$index],
                'qty' => $qty[$index]
            ];
            $this->M_detail_pemesanan_kuliner->insert($data_detail);

            $index++;
        }
        $this->cart->destroy();
        $this->flash_message->success('Tambahkan', 'pesanan-kuliner');
    }

    public function delete_pemesanan($id_pemesanan_kuliner){
        $this->M_pemesanan_kuliner->delete($id_pemesanan_kuliner);
        $this->flash_message->success('Di hapus', 'pesanan-kuliner');
    }

    public function detail_pemesanan($id_pemesanan_kuliner){
        $data = array(
            'title' => 'Detail Pemesanan kuliner',
            'data_bank' => $this->M_bank->get_all(),
            'detail_pemesanan' => $this->M_detail_pemesanan_kuliner->get_all($id_pemesanan_kuliner),
            'detail_pemesanan_kuliner' => $this->M_pemesanan_kuliner->detail($id_pemesanan_kuliner),
        );

        $this->templates->pengunjung('v_detail_pemesanan_kuliner', $data);
    }

    public function add_kuliner(){
        
        $id_kuliner = $this->input->post('id_kuliner');
        $data_kuliner = $this->M_kuliner->get_by_id($id_kuliner);

        $data = array(
          'id'      => $id_kuliner,
          'qty'     => $this->input->post('qty', TRUE),
          'price'   => $data_kuliner->harga_kuliner,
          'name'    => $data_kuliner->nama_kuliner,
         );
        $this->cart->insert($data);
    
        redirect('pengunjung/data_pemesanan_kuliner/pemesanan' , 'refresh');
    }

    public function delete_kuliner($rowid){

        $this->cart->remove($rowid);

        redirect('pengunjung/data_pemesanan_kuliner/pemesanan' , 'refresh');
    }


}

/* End of file Data_kategori.php */
