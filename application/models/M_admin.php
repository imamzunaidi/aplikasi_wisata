
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    private $table = 'tbl_users';

    public function get_admin(){
        $this->db->where('hak_akses', 'admin');
        
        return $this->db->get($this->table)->result();
    }

    public function get_admin_desa(){
        $this->db->where('hak_akses', 'desa');
        
        return $this->db->get($this->table)->result();
    }

    public function jumlah_admin(){
        return $this->db->get($this->table)->num_rows();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function get_by_id($id_users){
        $this->db->where('id_users', $id_users);
        return $this->db->get($this->table)->row();
        
    }

    public function update($data, $id_users){
        $this->db->where('id_users', $id_users)->update($this->table, $data);
    }

    public function delete($id_users){
        $this->db->where('id_users', $id_users)->delete($this->table);
    }
}

/* End of file ModelName.php */





