<?php class M_souvenir extends CI_Model{

private $table = 'tbl_souvenir';

public function get_all(){
   
    $this->db->select('*');
    $this->db->from('tbl_souvenir tbs');
    return $this->db->get()->result();

}

public function get_limit($limit){
   
    $this->db->select('*');
    $this->db->from('tbl_souvenir tbs');
    $this->db->limit($limit);
    
    return $this->db->get()->result();

}

public function get_search($search){
    $this->db->like('nama_souvenir', $search, 'both'); 
    return $this->db->get($this->table)->result();
}


public function get_by_id($id_souvenir){
    $this->db->where('id_souvenir', $id_souvenir);
    return $this->db->get($this->table)->row();
    
}

public function insert($data){
    $this->db->insert($this->table, $data);
}

public function update($data, $id_souvenir){
    $this->db->where('id_souvenir', $id_souvenir);
    $this->db->update($this->table, $data);
}

public function delete($id_souvenir){
    $this->db->where('id_souvenir', $id_souvenir);
    $this->db->delete($this->table);
}
}
