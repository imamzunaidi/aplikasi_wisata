
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pembayaran extends CI_Model {

    private $table = 'tbl_pembayaran';

    public function get_all(){  
        $this->db->select('*');
        $this->db->from('tbl_pembayaran tpb');
        $this->db->join('tbl_bank tb', 'tb.id_bank = tpb.id_bank', 'inner');
        $this->db->order_by('tpb.id_pembayaran', 'desc');
              
        return $this->db->get()->result();
    }



    public function get_all_homestay(){  
        $this->db->select('*');
        $this->db->from('tbl_pembayaran tpb');
        $this->db->join('tbl_pemesanan_home_stay tph', 'tph.id_pemesanan_homestay = tpb.id_pemesanan_homestay', 'inner');
        $this->db->join('tbl_member tm', 'tm.id_member = tph.id_member', 'inner');
        $this->db->join('tbl_home_stay th', 'tph.id_home_stay = th.id_home_stay', 'inner');
        $this->db->join('tbl_bank tb', 'tb.id_bank = tpb.id_bank', 'inner');  
        $this->db->order_by('tpb.id_pembayaran', 'desc');
              
        return $this->db->get()->result();
    }


    public function get_all_kuliner(){  
        $this->db->select('*');
        $this->db->from('tbl_pembayaran tpb');
        $this->db->join('tbl_pemesanan_kuliner tph', 'tph.id_pemesanan_kuliner = tpb.id_pemesanan_kuliner', 'inner');
        $this->db->join('tbl_member tm', 'tm.id_member = tph.id_member', 'inner');
        $this->db->join('tbl_bank tb', 'tb.id_bank = tpb.id_bank', 'inner');
        $this->db->order_by('tpb.id_pembayaran', 'desc');
        return $this->db->get()->result();
    }

    public function get_all_souvenir(){  
        $this->db->select('*');
        $this->db->from('tbl_pembayaran tpb');
        $this->db->join('tbl_pemesanan_souvenir tph', 'tph.id_pemesanan_souvenir = tpb.id_pemesanan_souvenir', 'inner');
        $this->db->join('tbl_member tm', 'tm.id_member = tph.id_member', 'inner');
        $this->db->join('tbl_bank tb', 'tb.id_bank = tpb.id_bank', 'inner');        
        $this->db->order_by('tpb.id_pembayaran', 'desc');
        return $this->db->get()->result();
    }

    public function get_all_karcis(){  
        $this->db->select('*');
        $this->db->from('tbl_pembayaran tpb');
        $this->db->join('tbl_pemesanan_karcis tph', 'tph.id_pemesanan_karcis = tpb.id_pemesanan_karcis', 'inner');
        $this->db->join('tbl_member tm', 'tm.id_member = tph.id_member', 'inner');
        $this->db->join('tbl_bank tb', 'tb.id_bank = tpb.id_bank', 'inner');
        $this->db->order_by('tpb.id_pembayaran', 'desc');
        return $this->db->get()->result();
    }


    public function get_pembayaran_homestay($id_member){  
        $this->db->select('*');
        $this->db->from('tbl_pembayaran tpb');
        $this->db->join('tbl_pemesanan_home_stay tph', 'tph.id_pemesanan_homestay = tpb.id_pemesanan_homestay', 'inner');
        $this->db->join('tbl_member tm', 'tm.id_member = tph.id_member', 'inner');
        $this->db->join('tbl_home_stay th', 'tph.id_home_stay = th.id_home_stay', 'inner');
        $this->db->join('tbl_bank tb', 'tb.id_bank = tpb.id_bank', 'inner');
        $this->db->where('tm.id_member', $id_member);
        
        return $this->db->get()->result();
    }

    public function get_homestay_by_id($id_pemesanan_homestay){  
        $this->db->select('*');
        $this->db->from('tbl_pembayaran tpb');
        $this->db->join('tbl_pemesanan_home_stay tph', 'tph.id_pemesanan_homestay = tpb.id_pemesanan_homestay', 'inner');
        $this->db->join('tbl_member tm', 'tm.id_member = tph.id_member', 'inner');
        $this->db->join('tbl_home_stay th', 'tph.id_home_stay = th.id_home_stay', 'inner');
        $this->db->join('tbl_bank tb', 'tb.id_bank = tpb.id_bank', 'inner');
        $this->db->where('tph.id_pemesanan_homestay', $id_pemesanan_homestay);
        
        return $this->db->get()->row();
    }

    public function get_pembayaran_kuliner($id_member){  
        $this->db->select('*');
        $this->db->from('tbl_pembayaran tpb');
        $this->db->join('tbl_pemesanan_kuliner tph', 'tph.id_pemesanan_kuliner = tpb.id_pemesanan_kuliner', 'inner');
        $this->db->join('tbl_member tm', 'tm.id_member = tph.id_member', 'inner');
        $this->db->join('tbl_bank tb', 'tb.id_bank = tpb.id_bank', 'inner');
        $this->db->where('tm.id_member', $id_member);
        
        return $this->db->get()->result();
    }

    public function get_kuliner_by_id($id_pemesanan_kuliner){
        $this->db->select('*');
        $this->db->from('tbl_pembayaran tpb');
        $this->db->join('tbl_pemesanan_kuliner tph', 'tph.id_pemesanan_kuliner = tpb.id_pemesanan_kuliner', 'inner');
        $this->db->join('tbl_member tm', 'tm.id_member = tph.id_member', 'inner');
        $this->db->join('tbl_bank tb', 'tb.id_bank = tpb.id_bank', 'inner');
        $this->db->where('tph.id_pemesanan_kuliner', $id_pemesanan_kuliner);
        
        return $this->db->get()->row();
    }

    public function get_pembayaran_souvenir($id_member){  
        $this->db->select('*');
        $this->db->from('tbl_pembayaran tpb');
        $this->db->join('tbl_pemesanan_souvenir tph', 'tph.id_pemesanan_souvenir = tpb.id_pemesanan_souvenir', 'inner');
        $this->db->join('tbl_member tm', 'tm.id_member = tph.id_member', 'inner');
        $this->db->join('tbl_bank tb', 'tb.id_bank = tpb.id_bank', 'inner');
        $this->db->where('tm.id_member', $id_member);
        
        return $this->db->get()->result();
    }

    public function get_souvenir_by_id($id_pemesanan_souvenir){  
        $this->db->select('*');
        $this->db->from('tbl_pembayaran tpb');
        $this->db->join('tbl_pemesanan_souvenir tph', 'tph.id_pemesanan_souvenir = tpb.id_pemesanan_souvenir', 'inner');
        $this->db->join('tbl_member tm', 'tm.id_member = tph.id_member', 'inner');
        $this->db->join('tbl_bank tb', 'tb.id_bank = tpb.id_bank', 'inner');
        $this->db->where('tph.id_pemesanan_souvenir', $id_pemesanan_souvenir);
        return $this->db->get()->row();
    }

    public function get_karcis_by_id($id_pemesanan_karcis){
        $this->db->select('*');
        $this->db->from('tbl_pembayaran tpb');
        $this->db->join('tbl_pemesanan_karcis tph', 'tph.id_pemesanan_karcis = tpb.id_pemesanan_karcis', 'inner');
        $this->db->join('tbl_member tm', 'tm.id_member = tph.id_member', 'inner');
        $this->db->join('tbl_bank tb', 'tb.id_bank = tpb.id_bank', 'inner');
        $this->db->where('tpb.id_pemesanan_karcis', $id_pemesanan_karcis);
        
        return $this->db->get()->row();
    }


    public function get_pembayaran_karcis($id_member){  
        $this->db->select('*');
        $this->db->from('tbl_pembayaran tpb');
        $this->db->join('tbl_pemesanan_karcis tph', 'tph.id_pemesanan_karcis = tpb.id_pemesanan_karcis', 'inner');
        $this->db->join('tbl_member tm', 'tm.id_member = tph.id_member', 'inner');
        $this->db->join('tbl_bank tb', 'tb.id_bank = tpb.id_bank', 'inner');
        $this->db->where('tm.id_member', $id_member);
        
        return $this->db->get()->result();
    }

    public function detail_pembayaran_homestay($id_pembayaran){
        $this->db->select('*');
        $this->db->from('tbl_pembayaran tpb');
        $this->db->join('tbl_pemesanan_home_stay tph', 'tph.id_pemesanan_homestay = tpb.id_pemesanan_homestay', 'inner');
        $this->db->join('tbl_member tm', 'tm.id_member = tph.id_member', 'inner');
        $this->db->join('tbl_home_stay th', 'tph.id_home_stay = th.id_home_stay', 'inner');
        $this->db->join('tbl_bank tb', 'tb.id_bank = tpb.id_bank', 'inner');
        $this->db->where('id_pembayaran', $id_pembayaran);
        
        return $this->db->get()->row();
    }

    public function detail_riwayat_homestay($id_pemesanan_homestay){
        $this->db->select('*');
        $this->db->from('tbl_pembayaran tpb');
        $this->db->join('tbl_pemesanan_home_stay tph', 'tph.id_pemesanan_homestay = tpb.id_pemesanan_homestay', 'inner');
        $this->db->join('tbl_member tm', 'tm.id_member = tph.id_member', 'inner');
        $this->db->join('tbl_home_stay th', 'tph.id_home_stay = th.id_home_stay', 'inner');
        $this->db->join('tbl_bank tb', 'tb.id_bank = tpb.id_bank', 'inner');
        $this->db->where('tph.id_pemesanan_homestay', $id_pemesanan_homestay);
        return $this->db->get()->row();
    }


    public function detail_pembayaran_kuliner($id_pembayaran){
        $this->db->select('*');
        $this->db->from('tbl_pembayaran tpb');
        $this->db->join('tbl_pemesanan_kuliner tph', 'tph.id_pemesanan_kuliner = tpb.id_pemesanan_kuliner', 'inner');
        $this->db->join('tbl_member tm', 'tm.id_member = tph.id_member', 'inner');
        $this->db->join('tbl_bank tb', 'tb.id_bank = tpb.id_bank', 'inner');
        $this->db->where('id_pembayaran', $id_pembayaran);
        
        return $this->db->get()->row();
    }

    public function detail_riwayat_kuliner($id_pemesanan_kuliner){
        $this->db->select('*');
        $this->db->from('tbl_pembayaran tpb');
        $this->db->join('tbl_pemesanan_kuliner tph', 'tph.id_pemesanan_kuliner = tpb.id_pemesanan_kuliner', 'inner');
        $this->db->join('tbl_member tm', 'tm.id_member = tph.id_member', 'inner');
        $this->db->join('tbl_bank tb', 'tb.id_bank = tpb.id_bank', 'inner');
        $this->db->where('tph.id_pemesanan_kuliner', $id_pemesanan_kuliner);
        
        return $this->db->get()->row();
    }

    public function detail_pembayaran_souvenir($id_pembayaran){
        $this->db->select('*');
        $this->db->from('tbl_pembayaran tpb');
        $this->db->join('tbl_pemesanan_souvenir tph', 'tph.id_pemesanan_souvenir = tpb.id_pemesanan_souvenir', 'inner');
        $this->db->join('tbl_member tm', 'tm.id_member = tph.id_member', 'inner');
        $this->db->join('tbl_bank tb', 'tb.id_bank = tpb.id_bank', 'inner');
        $this->db->where('id_pembayaran', $id_pembayaran);
        
        return $this->db->get()->row();
    }

    public function detail_pembayaran_karcis($id_pembayaran){
        $this->db->select('*');
        $this->db->from('tbl_pembayaran tpb');
        $this->db->join('tbl_pemesanan_karcis tph', 'tph.id_pemesanan_karcis = tpb.id_pemesanan_karcis', 'inner');
        $this->db->join('tbl_member tm', 'tm.id_member = tph.id_member', 'inner');
        $this->db->join('tbl_bank tb', 'tb.id_bank = tpb.id_bank', 'inner');
        $this->db->where('id_pembayaran', $id_pembayaran);
        
        return $this->db->get()->row();
    }

    public function detail_riwayat_karcis($id_pemesanan_karcis){
        $this->db->select('*');
        $this->db->from('tbl_pembayaran tpb');
        $this->db->join('tbl_pemesanan_karcis tph', 'tph.id_pemesanan_karcis = tpb.id_pemesanan_karcis', 'inner');
        $this->db->join('tbl_member tm', 'tm.id_member = tph.id_member', 'inner');
        $this->db->join('tbl_bank tb', 'tb.id_bank = tpb.id_bank', 'inner');
        $this->db->where('tph.id_pemesanan_karcis', $id_pemesanan_karcis);
        
        return $this->db->get()->row();
    }

    public function jumlah_pembayaran(){
        return $this->db->get($this->table)->num_rows();
    }

    public function insert($data){
        $this->db->insert($this->table, $data);
    }

    public function get_by_id($id_pembayaran){
        $this->db->where('id_pembayaran', $id_pembayaran);
        return $this->db->get($this->table)->row();
        
    }

    public function update($data, $id_pembayaran){
        $this->db->where('id_pembayaran', $id_pembayaran)->update($this->table, $data);
    }

    public function delete($id_pembayaran){
        $this->db->where('id_pembayaran', $id_pembayaran)->delete($this->table);
    }
}

/* End of file ModelName.php */





