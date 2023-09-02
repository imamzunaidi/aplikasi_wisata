
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bank extends CI_Model {

    private $table = 'tbl_bank';

    public function get_all(){
    
        return $this->db->get($this->table)->result();
    }

    public function get_by_id($id_bank){
        $this->db->where('id_bank', $id_bank);
        return $this->db->get($this->table)->result();
    }

    public function get_by_toko($id_toko){
        $this->db->where('id_toko', $id_toko);
        return $this->db->get($this->table)->result();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function insert_bank($data_bank){
        $this->db->insert($this->table, $data_bank);
    }

    public function update($data, $id_bank){
        $this->db->where('id_bank', $id_bank)->update($this->table, $data);
    }

    public function delete($id_bank){
        $this->db->where('id_bank', $id_bank)->delete($this->table);
    }
}

/* End of file ModelName.php */





