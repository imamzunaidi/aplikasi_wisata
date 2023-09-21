
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemesanan_souvenir extends CI_Model {

    private $table = 'tbl_pemesanan_souvenir';

    public function get_all(){  
        $this->db->select('*');
        $this->db->from('tbl_pemesanan_souvenir tp');
        $this->db->join('tbl_member tm', 'tm.id_member = tp.id_member', 'inner');
        $this->db->order_by('tp.id_pemesanan_souvenir', 'desc');
        return $this->db->get()->result();
    }


    
    public function get_member($id_member){  
        $this->db->select('*');
        $this->db->from('tbl_pemesanan_souvenir tp');
        $this->db->join('tbl_member tm', 'tm.id_member = tp.id_member', 'inner');
        $this->db->where_in('status_pemesanan', ['lakukan pembayaran', 'lunas']);
        $this->db->where('tm.id_member', $id_member);
        
        return $this->db->get()->result();
    }

    public function get_riwayat($id_member){  
        $this->db->select('*');
        $this->db->from('tbl_pemesanan_souvenir tp');
        $this->db->join('tbl_member tm', 'tm.id_member = tp.id_member', 'inner');
        $this->db->where_in('status_pemesanan', ['lakukan pembayaran', 'lunas']);
        $this->db->where('tm.id_member', $id_member);
        
        return $this->db->get()->result();
    }

    public function detail($id_pemesanan_souvenir){  
        $this->db->select('*');
        $this->db->from('tbl_pemesanan_souvenir tp');
        $this->db->join('tbl_member tm', 'tm.id_member = tp.id_member', 'inner');
        // $this->db->join('tbl_souvenir th', 'tp.id_souvenir = th.id_souvenir', 'inner');
        $this->db->where('tp.id_pemesanan_souvenir', $id_pemesanan_souvenir);
        return $this->db->get()->row();
    }

    public function jumlah_pemesanan_souvenir(){
        return $this->db->get($this->table)->num_rows();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function get_by_id($id_pemesanan_souvenir){
        $this->db->where('id_pemesanan_souvenir', $id_pemesanan_souvenir);
        return $this->db->get($this->table)->row();
        
    }

    public function update($data, $id_pemesanan_souvenir){
        $this->db->where('id_pemesanan_souvenir', $id_pemesanan_souvenir)->update($this->table, $data);
    }

    public function delete($id_pemesanan_souvenir){
        $this->db->where('id_pemesanan_souvenir', $id_pemesanan_souvenir)->delete($this->table);
    }
}

/* End of file ModelName.php */





