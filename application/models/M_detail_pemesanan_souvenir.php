<?php class M_detail_pemesanan_souvenir extends CI_Model{

    private $table = 'tbl_detail_pemesanan_souvenir';

    public function get_all($id_pemesanan_souvenir){
        $this->db->select('*');
        $this->db->from('tbl_pemesanan_souvenir tpk');
        $this->db->join('tbl_detail_pemesanan_souvenir tdp', 'tdp.id_pemesanan_souvenir = tpk.id_pemesanan_souvenir', 'inner');
        $this->db->join('tbl_souvenir tk', 'tk.id_souvenir = tdp.id_souvenir', 'inner');
        
        $this->db->where('tpk.id_pemesanan_souvenir', $id_pemesanan_souvenir);
        
        return $this->db->get()->result();
    }

    public function get_by_id($id_detail_pemesanan_souvenir){
        $this->db->where('id_detail_pemesanan_souvenir', $id_detail_pemesanan_souvenir);
        return $this->db->get($this->table)->row();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function update($data, $id_detail_pemesanan_souvenir){
        $this->db->where('id_detail_pemesanan_souvenir', $id_detail_pemesanan_souvenir);
        $this->db->update($this->table, $data);
    }

    public function delete($id_detail_pemesanan_souvenir){
        $this->db->where('id_detail_pemesanan_souvenir', $id_detail_pemesanan_souvenir);
        $this->db->delete($this->table);
    }
}
