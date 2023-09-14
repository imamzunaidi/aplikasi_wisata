
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemesanan_karcis extends CI_Model {

    private $table = 'tbl_pemesanan_karcis';

    public function get_all(){  
        $this->db->select('*');
        $this->db->from('tbl_pemesanan_karcis tp');
        $this->db->join('tbl_member tm', 'tm.id_member = tp.id_member', 'inner');   
        $this->db->order_by('tp.id_pemesanan_karcis', 'desc');
        
        return $this->db->get()->result();
    }


    
    public function get_member($id_member){  
        $this->db->select('*');
        $this->db->from('tbl_pemesanan_karcis tp');
        $this->db->join('tbl_member tm', 'tm.id_member = tp.id_member', 'inner');
        $this->db->where('status_pemesanan', 'lakukan pembayaran');
        $this->db->where('tm.id_member', $id_member);
        
        return $this->db->get()->result();
    }

    public function detail($id_pemesanan_karcis){  
        $this->db->select('*');
        $this->db->from('tbl_pemesanan_karcis tp');
        $this->db->join('tbl_member tm', 'tm.id_member = tp.id_member', 'inner');
        // $this->db->join('tbl_karcis th', 'tp.id_karcis = th.id_karcis', 'inner');
        $this->db->where('tp.id_pemesanan_karcis', $id_pemesanan_karcis);
        return $this->db->get()->row();
    }

    public function jumlah_pemesanan_karcis(){
        return $this->db->get($this->table)->num_rows();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function get_by_id($id_pemesanan_karcis){
        $this->db->where('id_pemesanan_karcis', $id_pemesanan_karcis);
        return $this->db->get($this->table)->row();
        
    }

    public function update($data, $id_pemesanan_karcis){
        $this->db->where('id_pemesanan_karcis', $id_pemesanan_karcis)->update($this->table, $data);
    }

    public function delete($id_pemesanan_karcis){
        $this->db->where('id_pemesanan_karcis', $id_pemesanan_karcis)->delete($this->table);
    }
}

/* End of file ModelName.php */





