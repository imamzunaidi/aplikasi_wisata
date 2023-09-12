<?php class M_detail_pemesanan_kuliner extends CI_Model{

    private $table = 'tbl_detail_pemesanan_kuliner';

    public function get_all($id_pemesanan_kuliner){
        $this->db->select('*');
        $this->db->from('tbl_pemesanan_kuliner tpk');
        $this->db->join('tbl_detail_pemesanan_kuliner tdp', 'tdp.id_pemesanan_kuliner = tpk.id_pemesanan_kuliner', 'inner');
        $this->db->join('tbl_kuliner tk', 'tk.id_kuliner = tdp.id_kuliner', 'inner');
        
        $this->db->where('tpk.id_pemesanan_kuliner', $id_pemesanan_kuliner);
        
        return $this->db->get()->result();
    }

    public function get_by_id($id_detail_pemesanan_kuliner){
        $this->db->where('id_detail_pemesanan_kuliner', $id_detail_pemesanan_kuliner);
        return $this->db->get($this->table)->row();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function update($data, $id_detail_pemesanan_kuliner){
        $this->db->where('id_detail_pemesanan_kuliner', $id_detail_pemesanan_kuliner);
        $this->db->update($this->table, $data);
    }

    public function delete($id_detail_pemesanan_kuliner){
        $this->db->where('id_detail_pemesanan_kuliner', $id_detail_pemesanan_kuliner);
        $this->db->delete($this->table);
    }
}
