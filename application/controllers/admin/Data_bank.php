<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_bank extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('hak_akses') != 'admin') {
            $hak_akses = $this->session->userdata('hak_akses');
      
            switch ($hak_akses) {
                case 'admin':
                    if($hak_akses != 'admin'){
                        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Gagal!!</strong> Anda Belum Login !!
                        </div>');
    
                        redirect('login');
                    }
                    break;
                
                default:
                    $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Gagal!!</strong> Anda Belum Login !!
                    </div>');

                    redirect('login');
                break;
            }

        }
    }

    public function index()
    {

        $data = array(
            'title' => 'Data Bank',
            'data_bank' => $this->M_bank->get_all(),
        );
        $this->templates->admin('v_data_bank', $data);
    }

    public function insert(){
        $data = array(
            'nama_bank' => $this->input->post('nama_bank', TRUE),
            'no_rek' => $this->input->post('no_rek'),
            'atas_nama' => $this->input->post('atas_nama'),
        );

        $this->M_bank->insert($data);
        $this->flash_message->success('Tambahkan', 'data-bank-penjual');
    }

    public function update(){
        $id_bank = $this->input->post('id_bank', TRUE);
        
        $data = array(
            'nama_bank' => $this->input->post('nama_bank', TRUE),
            'no_rek' => $this->input->post('no_rek'),
            'atas_nama' => $this->input->post('atas_nama'),
        );
      
        $this->M_bank->update($data, $id_bank);
        $this->flash_message->success('Update', 'data-bank-penjual');
    }

    public function delete($id_bank){       
        $this->M_bank->delete($id_bank);
        $this->flash_message->success('Hapus', 'data-bank-penjual');
    
    }

}

/* End of file Data_bank.php */
