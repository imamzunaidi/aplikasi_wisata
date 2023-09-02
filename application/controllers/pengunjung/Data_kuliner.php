<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kuliner extends CI_Controller {
    


    public function index()
    {
        $data = array(
            'title' => 'Data kuliner',
            'data_kuliner' => $this->M_kuliner->get_all(),
        );
        $this->templates->pengunjung('v_data_kuliner', $data);
    }



    public function detail($id_kuliner){
        $data = array(
            'title' => 'Detail Data Kuliner',
            'detail_kuliner' => $this->M_kuliner->get_by_id($id_kuliner),
        );
        $this->templates->pengunjung('v_detail_kuliner', $data);
    }
  
    public function search(){
        $search = $this->input->post('search');

        $data = array(
            'title' => 'Data Kuliner',
            'data_kuliner' => $this->M_kuliner->get_search($search),
        );
        $this->templates->pengunjung('v_data_kuliner', $data);
    }

}

/* End of file Data_kategori.php */
