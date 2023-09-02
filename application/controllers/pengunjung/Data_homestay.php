<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_homestay extends CI_Controller {
    
    
    public function index()
    {
        $data = array(
            'title' => 'Data Home Stay',
            'data_homestay' => $this->M_homestay->get_all(),
        );
        $this->templates->pengunjung('v_data_home_stay', $data);
    }



    public function detail($id_home_stay){
        $data = array(
            'title' => 'Detail Data Home Stay',
            'detail_home_stay' => $this->M_homestay->get_by_id($id_home_stay),
        );
        $this->templates->pengunjung('v_detail_home_stay', $data);
    }
  
    public function search(){
        $search = $this->input->post('search');

        $data = array(
            'title' => 'Data Home Stay',
            'data_homestay' => $this->M_homestay->get_search($search),
        );
        $this->templates->pengunjung('v_data_home_stay', $data);
    }

}

/* End of file Data_kategori.php */
