
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_member extends CI_Model {

    private $table = 'tbl_member';

    public function get_all(){        
        return $this->db->get($this->table)->result();
    }

    public function jumlah_member(){
        return $this->db->get($this->table)->num_rows();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function get_by_id($id_member){
        $this->db->where('id_member', $id_member);
        return $this->db->get($this->table)->row();
        
    }

    public function update($data, $id_member){
        $this->db->where('id_member', $id_member)->update($this->table, $data);
    }

    public function delete($id_member){
        $this->db->where('id_member', $id_member)->delete($this->table);
    }
}

/* End of file ModelName.php */





