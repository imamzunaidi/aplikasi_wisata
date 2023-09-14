
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemesanan_kuliner extends CI_Model {

    private $table = 'tbl_pemesanan_kuliner';

    public function get_all(){  
        $this->db->select('*');
        $this->db->from('tbl_pemesanan_kuliner tp');
        $this->db->join('tbl_member tm', 'tm.id_member = tp.id_member', 'inner');     
        $this->db->order_by('tp.id_pemesanan_kuliner', 'desc');
          
        return $this->db->get()->result();
    }


    
    public function get_member($id_member){  
        $this->db->select('*');
        $this->db->from('tbl_pemesanan_kuliner tp');
        $this->db->join('tbl_member tm', 'tm.id_member = tp.id_member', 'inner');
        $this->db->where('status_pemesanan', 'lakukan pembayaran');
        $this->db->where('tm.id_member', $id_member);
        
        return $this->db->get()->result();
    }

    public function detail($id_pemesanan_kuliner){  
        $this->db->select('*');
        $this->db->from('tbl_pemesanan_kuliner tp');
        $this->db->join('tbl_member tm', 'tm.id_member = tp.id_member', 'inner');
        // $this->db->join('tbl_kuliner th', 'tp.id_kuliner = th.id_kuliner', 'inner');
        $this->db->where('tp.id_pemesanan_kuliner', $id_pemesanan_kuliner);
        return $this->db->get()->row();
    }

    public function jumlah_pemesanan_kuliner(){
        return $this->db->get($this->table)->num_rows();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function get_by_id($id_pemesanan_kuliner){
        $this->db->where('id_pemesanan_kuliner', $id_pemesanan_kuliner);
        return $this->db->get($this->table)->row();
        
    }

    public function update($data, $id_pemesanan_kuliner){
        $this->db->where('id_pemesanan_kuliner', $id_pemesanan_kuliner)->update($this->table, $data);
    }

    public function delete($id_pemesanan_kuliner){
        $this->db->where('id_pemesanan_kuliner', $id_pemesanan_kuliner)->delete($this->table);
    }
}

/* End of file ModelName.php */





