
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemesanan_home_stay extends CI_Model {

    private $table = 'tbl_pemesanan_home_stay';

    public function get_all(){  
        $this->db->select('*');
        $this->db->from('tbl_pemesanan_home_stay tp');
        $this->db->join('tbl_member tm', 'tm.id_member = tp.id_member', 'inner');
        $this->db->join('tbl_home_stay th', 'tp.id_home_stay = th.id_home_stay', 'inner');
        $this->db->order_by('tp.id_pemesanan_homestay', 'desc');
        return $this->db->get()->result();
    }

    public function get_member($id_member){  
        $this->db->select('*');
        $this->db->from('tbl_pemesanan_home_stay tp');
        $this->db->join('tbl_member tm', 'tm.id_member = tp.id_member', 'inner');
        $this->db->join('tbl_home_stay th', 'tp.id_home_stay = th.id_home_stay', 'inner');
        $this->db->where_in('status_pemesanan', ['lakukan pembayaran','menunggu konfirmasi', 'penuh']);
        $this->db->where('tm.id_member', $id_member);
        
        return $this->db->get()->result();
    }

    public function get_riwayat($id_member){  
        $this->db->select('*');
        $this->db->from('tbl_pemesanan_home_stay tp');
        $this->db->join('tbl_member tm', 'tm.id_member = tp.id_member', 'inner');
        $this->db->join('tbl_home_stay th', 'tp.id_home_stay = th.id_home_stay', 'inner');
        $this->db->where('status_pemesanan', 'lunas');
        $this->db->where('tm.id_member', $id_member);
        
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

    public function cek_pemesanan($id_home_stay, $id_member){
        $this->db->where('id_member', $id_member);
        $this->db->where('id_home_stay', $id_home_stay);
        $this->db->where_in('status_pemesanan', ['lakukan pembayaran','menunggu konfirmasi']);
        return $this->db->get('tbl_pemesanan_home_stay')->num_rows();
    }
}

/* End of file ModelName.php */





