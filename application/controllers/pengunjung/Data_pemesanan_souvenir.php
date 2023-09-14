<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pemesanan_souvenir extends CI_Controller {
    
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
            'data_pemesanan_souvenir' => $this->M_pemesanan_souvenir->get_member($id_member),
        );

        $this->templates->pengunjung('v_data_pemesanan_souvenir', $data);
    }

    public function pemesanan()
    {
      
        $data = array(
            'title' => 'Data souvenir',
            'data_souvenir' => $this->M_souvenir->get_all(),
        
        );
        $this->templates->pengunjung('v_create_pemesanan_souvenir', $data);
    }

    public function insert(){
        $id_member = $this->session->userdata('id_member');

       

        $data = array(
            'id_member' => $id_member,
            'nama_pemesan' => $this->input->post('nama_pemesan', TRUE),
            'no_telp_pemesan' => $this->input->post('no_telp_pemesan', TRUE),
            'total_harga' => $this->input->post('total_harga', TRUE),
            'keterangan_tambahan' => $this->input->post('keterangan_tambahan', TRUE),
            'status_pemesanan' => 'lakukan pembayaran',
        );

        $this->db->insert('tbl_pemesanan_souvenir', $data);
        $insert_id = $this->db->insert_id();

        $id_souvenir = $this->input->post('id_souvenir', TRUE);
        $subtotal = $this->input->post('subtotal', TRUE);
        $qty = $this->input->post('qty', TRUE);

        $index = 0;
        foreach ($id_souvenir as $key => $value) {
            # code...
            $data_detail = [
                'id_souvenir' => $value,
                'id_pemesanan_souvenir' => $insert_id,
                'subtotal' => $subtotal[$index],
                'qty' => $qty[$index]
            ];
            $this->M_detail_pemesanan_souvenir->insert($data_detail);

            $index++;
        }
        $this->cart->destroy();
        $this->flash_message->success('Tambahkan', 'pesanan-souvenir');
    }

    public function delete_pemesanan($id_pemesanan_souvenir){
        $this->M_pemesanan_souvenir->delete($id_pemesanan_souvenir);
        $this->flash_message->success('Di hapus', 'pesanan-souvenir');
    }

    public function detail_pemesanan($id_pemesanan_souvenir){
        $data = array(
            'title' => 'Detail Pemesanan souvenir',
            'data_bank' => $this->M_bank->get_all(),
            'detail_pemesanan' => $this->M_detail_pemesanan_souvenir->get_all($id_pemesanan_souvenir),
            'detail_pemesanan_souvenir' => $this->M_pemesanan_souvenir->detail($id_pemesanan_souvenir),
        );

        $this->templates->pengunjung('v_detail_pemesanan_souvenir', $data);
    }

    public function add_souvenir(){
        
        $id_souvenir = $this->input->post('id_souvenir');
        $data_souvenir = $this->M_souvenir->get_by_id($id_souvenir);


        $data = array(
          'id'      => $id_souvenir,
          'qty'     => $this->input->post('qty', TRUE),
          'price'   => $data_souvenir->harga_souvenir,
          'name'    => $data_souvenir->nama_souvenir,
         );

       
        $this->cart->insert($data);
    
        redirect('pengunjung/data_pemesanan_souvenir/pemesanan' , 'refresh');
    }

    public function delete_souvenir($rowid){

        $this->cart->remove($rowid);

        redirect('pengunjung/data_pemesanan_souvenir/pemesanan' , 'refresh');
    }


}

/* End of file Data_kategori.php */