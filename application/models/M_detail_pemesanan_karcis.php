<?php class M_detail_pemesanan_karcis extends CI_Model{

    private $table = 'tbl_detail_pemesanan_karcis';

    public function get_all($id_pemesanan_karcis){
        $this->db->select('*');
        $this->db->from('tbl_pemesanan_karcis tpk');
        $this->db->join('tbl_detail_pemesanan_karcis tdp', 'tdp.id_pemesanan_karcis = tpk.id_pemesanan_karcis', 'inner');
        $this->db->join('tbl_karcis tk', 'tk.id_karcis = tdp.id_karcis', 'inner');
        
        $this->db->where('tpk.id_pemesanan_karcis', $id_pemesanan_karcis);
        
        return $this->db->get()->result();
    }

    public function get_by_id($id_detail_pemesanan_karcis){
        $this->db->where('id_detail_pemesanan_karcis', $id_detail_pemesanan_karcis);
        return $this->db->get($this->table)->row();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function update($data, $id_detail_pemesanan_karcis){
        $this->db->where('id_detail_pemesanan_karcis', $id_detail_pemesanan_karcis);
        $this->db->update($this->table, $data);
    }

    public function delete($id_detail_pemesanan_karcis){
        $this->db->where('id_detail_pemesanan_karcis', $id_detail_pemesanan_karcis);
        $this->db->delete($this->table);
    }
}
