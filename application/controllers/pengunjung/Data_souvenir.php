<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_souvenir extends CI_Controller {
    


    public function index()
    {
        $data = array(
            'title' => 'Data Souvenir',
            'data_souvenir' => $this->M_souvenir->get_all(),
        );
        $this->templates->pengunjung('v_data_souvenir', $data);
    }



    public function detail($id_souvenir){
        $data = array(
            'title' => 'Detail Data Souvenir',
            'detail_souvenir' => $this->M_souvenir->get_by_id($id_souvenir),
        );
        $this->templates->pengunjung('v_detail_souvenir', $data);
    }


    public function search(){
        $search = $this->input->post('search');

        $data = array(
            'title' => 'Data Souvenir',
            'data_souvenir' => $this->M_souvenir->get_search($search),
        );
        $this->templates->pengunjung('v_data_souvenir', $data);
    }

}

/* End of file Data_kategori.php */
