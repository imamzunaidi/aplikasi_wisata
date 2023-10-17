<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pemesanan_karcis extends CI_Controller {
    
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
            'title' => 'Data karcis',
            'data_pemesanan_karcis' => $this->M_pemesanan_karcis->get_member($id_member),
        );

        $this->templates->pengunjung('v_data_pemesanan_karcis', $data);
    }

    public function pemesanan()
    {
      
        $data = array(
            'title' => 'Data karcis',
            'data_karcis' => $this->M_karcis->get_all(),
        
        );
        $this->templates->pengunjung('v_create_pemesanan_karcis', $data);
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

        $this->db->insert('tbl_pemesanan_karcis', $data);
        $insert_id = $this->db->insert_id();

        $id_karcis = $this->input->post('id_karcis', TRUE);
        $subtotal = $this->input->post('subtotal', TRUE);
        $qty = $this->input->post('qty', TRUE);

        $index = 0;
        foreach ($id_karcis as $key => $value) {
            # code...
            $data_detail = [
                'id_karcis' => $value,
                'id_pemesanan_karcis' => $insert_id,
                'subtotal' => $subtotal[$index],
                'qty' => $qty[$index]
            ];
            $this->M_detail_pemesanan_karcis->insert($data_detail);

            $index++;
        }
        $this->cart->destroy();
        $this->flash_message->success('Tambahkan', 'pesanan-karcis');
    }

    public function delete_pemesanan($id_pemesanan_karcis){
        $this->M_pemesanan_karcis->delete($id_pemesanan_karcis);
        $this->flash_message->success('Di hapus', 'pesanan-karcis');
    }

    public function detail_pemesanan($id_pemesanan_karcis){
        $data = array(
            'title' => 'Detail Pemesanan karcis',
            'data_bank' => $this->M_bank->get_all(),
            'detail_pemesanan' => $this->M_detail_pemesanan_karcis->get_all($id_pemesanan_karcis),
            'detail_pemesanan_karcis' => $this->M_pemesanan_karcis->detail($id_pemesanan_karcis),
        );

        $this->templates->pengunjung('v_detail_pemesanan_karcis', $data);
    }

    public function add_karcis(){
        
        $id_karcis = $this->input->post('id_karcis');
        $data_karcis = $this->M_karcis->get_by_id($id_karcis);


        $data = array(
          'id'      => $id_karcis,
          'qty'     => $this->input->post('qty', TRUE),
          'price'   => $data_karcis->harga_karcis,
          'name'    => $data_karcis->nama_karcis,
         );

       
        $this->cart->insert($data);
    
        redirect('pengunjung/data_pemesanan_karcis/pemesanan' , 'refresh');
    }

    public function delete_karcis($rowid){

        $this->cart->remove($rowid);

        redirect('pengunjung/data_pemesanan_karcis/pemesanan' , 'refresh');
    }


}

/* End of file Data_kategori.php */
