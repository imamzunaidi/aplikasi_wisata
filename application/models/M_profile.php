<?php class M_profile extends CI_Model{

    private $table = 'tbl_profile';

    public function get_all(){
        return $this->db->get($this->table)->row();
    }

    public function update($data, $id_profile){
        $this->db->where('id_profile', $id_profile);
        $this->db->update($this->table, $data);
    }

    public function get_by_id($id_profile){
        $this->db->where('id_profile', $id_profile);
         return $this->db->get($this->table)->row();
    }
    // public function delete($kd_jurusan){
    //     $this->db->where('kd_jurusan', $kd_jurusan);
    //     $this->db->delete($this->table);
    // }
}
