<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_karcis extends CI_Controller {
    


    public function index()
    {
        $data = array(
            'title' => 'Data Karcis',
            'data_karcis' => $this->M_karcis->get_all(),
        );
        $this->templates->pengunjung('v_data_karcis', $data);
    }



    public function detail($id_karcis){
        $data = array(
            'title' => 'Detail Data Karcis',
            'detail_karcis' => $this->M_karcis->get_by_id($id_karcis),
        );
        $this->templates->pengunjung('v_detail_karcis', $data);
    }
  
    public function search(){
        $search = $this->input->post('search');

        $data = array(
            'title' => 'Data Karcis',
            'data_karcis' => $this->M_karcis->get_search($search),
        );
        $this->templates->pengunjung('v_data_karcis', $data);
    }

}

/* End of file Data_kategori.php */
