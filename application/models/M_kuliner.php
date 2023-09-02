<?php class M_kuliner extends CI_Model{

private $table = 'tbl_kuliner';

public function get_all(){
   
    $this->db->select('*');
    $this->db->from('tbl_kuliner tbs');
    return $this->db->get()->result();

}

public function get_limit($limit){
   
    $this->db->select('*');
    $this->db->from('tbl_kuliner tbs');
    $this->db->limit($limit);
    
    return $this->db->get()->result();

}

public function get_search($search){
    $this->db->like('nama_kuliner', $search, 'both'); 
    return $this->db->get($this->table)->result();
}


public function get_by_id($id_kuliner){
    $this->db->where('id_kuliner', $id_kuliner);
    return $this->db->get($this->table)->row();
    
}

public function insert($data){
    $this->db->insert($this->table, $data);
}

public function update($data, $id_kuliner){
    $this->db->where('id_kuliner', $id_kuliner);
    $this->db->update($this->table, $data);
}

public function delete($id_kuliner){
    $this->db->where('id_kuliner', $id_kuliner);
    $this->db->delete($this->table);
}
}
