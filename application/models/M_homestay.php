<?php class M_homestay extends CI_Model{

private $table = 'tbl_home_stay';

public function get_all(){
   
    $this->db->select('*');
    $this->db->from('tbl_home_stay tbs');
    return $this->db->get()->result();

}

public function get_limit($limit){
   
    $this->db->select('*');
    $this->db->from('tbl_home_stay tbs');
    $this->db->limit($limit);
    
    return $this->db->get()->result();

}


public function get_by_id($id_home_stay){
    $this->db->where('id_home_stay', $id_home_stay);
    return $this->db->get($this->table)->row();
    
}

public function get_search($search){
    $this->db->like('nama_home_stay', $search, 'both'); 
    return $this->db->get($this->table)->result();
}

public function insert($data){
    $this->db->insert($this->table, $data);
}

public function update($data, $id_home_stay){
    $this->db->where('id_home_stay', $id_home_stay);
    $this->db->update($this->table, $data);
}

public function delete($id_home_stay){
    $this->db->where('id_home_stay', $id_home_stay);
    $this->db->delete($this->table);
}
}
