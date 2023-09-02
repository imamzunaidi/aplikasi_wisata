<?php class M_karcis extends CI_Model{

private $table = 'tbl_karcis';

public function get_all(){
   
    $this->db->select('*');
    $this->db->from('tbl_karcis tbs');
    return $this->db->get()->result();

}

public function get_limit($limit){
   
    $this->db->select('*');
    $this->db->from('tbl_karcis tbs');
    $this->db->limit($limit);
    return $this->db->get()->result();

}

public function get_search($search){
    $this->db->like('nama_karcis', $search, 'both'); 
    return $this->db->get($this->table)->result();
}

public function get_by_id($id_karcis){
    $this->db->where('id_karcis', $id_karcis);
    return $this->db->get($this->table)->row();
    
}

public function insert($data){
    $this->db->insert($this->table, $data);
}

public function update($data, $id_karcis){
    $this->db->where('id_karcis', $id_karcis);
    $this->db->update($this->table, $data);
}

public function delete($id_karcis){
    $this->db->where('id_karcis', $id_karcis);
    $this->db->delete($this->table);
}
}
