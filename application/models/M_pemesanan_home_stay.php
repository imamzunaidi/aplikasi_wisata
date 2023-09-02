
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemesanan_home_stay extends CI_Model {

    private $table = 'tbl_pemesanan_home_stay';

    public function get_all(){  
        $this->db->select('*');
        $this->db->from('tbl_pemesanan_home_stay tp');
        $this->db->join('tbl_member tm', 'tm.id_member = tp.id_member', 'inner');
        $this->db->join('tbl_home_stay th', 'tp.id_home_stay = th.id_home_stay', 'inner');
        $this->db->where('status_pemesanan', 'lakukan pembayaran');
        
        return $this->db->get()->result();
    }

    public function detail($id_pemesanan_homestay){  
        $this->db->select('*');
        $this->db->from('tbl_pemesanan_home_stay tp');
        $this->db->join('tbl_member tm', 'tm.id_member = tp.id_member', 'inner');
        $this->db->join('tbl_home_stay th', 'tp.id_home_stay = th.id_home_stay', 'inner');
        $this->db->where('tp.id_pemesanan_homestay', $id_pemesanan_homestay);
        return $this->db->get()->row();
    }

    public function jumlah_pemesanan_home_stay(){
        return $this->db->get($this->table)->num_rows();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function get_by_id($id_pemesanan_homestay){
        $this->db->where('id_pemesanan_homestay', $id_pemesanan_homestay);
        return $this->db->get($this->table)->row();
        
    }

    public function update($data, $id_pemesanan_homestay){
        $this->db->where('id_pemesanan_homestay', $id_pemesanan_homestay)->update($this->table, $data);
    }

    public function delete($id_pemesanan_homestay){
        $this->db->where('id_pemesanan_homestay', $id_pemesanan_homestay)->delete($this->table);
    }
}

/* End of file ModelName.php */





