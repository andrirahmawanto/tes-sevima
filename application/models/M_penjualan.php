<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_penjualan extends CI_Model
{
    var $table = 'v_rekap_harian';
    var $column_order = array('bulan','waktu','total',null); //set column field database for datatable orderable
    var $column_search = array('bulan','waktu','total'); //set column field database for datatable searchable just firstname , lastname , address are searchable
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  } 
  function getAll(){
   $this->db->select('*');
   $this->db->from('tb_toko_penjualan');
   $this->db->join('tb_toko_konfirmasi', 'tb_toko_konfirmasi.id_penjualan = tb_toko_penjualan.id_penjualan', 'left');
   $this->db->order_by('tb_toko_penjualan.id_penjualan', 'DESC');
   $query = $this->db->get();
   return $query->result();
 }
 
 function belum(){
   $this->db->select('*');
   $this->db->from('tb_toko_penjualan');
   $this->db->join('tb_toko_konfirmasi', 'tb_toko_konfirmasi.id_penjualan = tb_toko_penjualan.id_penjualan', 'left');
   $this->db->where('tb_toko_penjualan.status', 0);
   $this->db->order_by('tb_toko_penjualan.id_penjualan', 'DESC');
   $query = $this->db->get();
   return $query->result();
 }
 
 function bayar(){
   $this->db->select('*');
   $this->db->from('tb_toko_penjualan');
   $this->db->join('tb_toko_konfirmasi', 'tb_toko_konfirmasi.id_penjualan = tb_toko_penjualan.id_penjualan', 'left');
   $this->db->where('tb_toko_penjualan.status', 1);
   $this->db->where('tb_toko_penjualan.resi =', '');
   $this->db->order_by('tb_toko_penjualan.id_penjualan', 'DESC');
   $query = $this->db->get();
   return $query->result();
 }
 
 function resi(){
   $this->db->select('*');
   $this->db->from('tb_toko_penjualan');
   $this->db->join('tb_toko_konfirmasi', 'tb_toko_konfirmasi.id_penjualan = tb_toko_penjualan.id_penjualan', 'left');
   $this->db->where('tb_toko_penjualan.status', 2);
   $this->db->order_by('tb_toko_penjualan.id_penjualan', 'DESC');
   $query = $this->db->get();
   return $query->result();
 }
 
 function resi2(){
   $this->db->select('*');
   $this->db->from('tb_toko_penjualan');
   $this->db->join('tb_toko_konfirmasi', 'tb_toko_konfirmasi.id_penjualan = tb_toko_penjualan.id_penjualan', 'left');
   $this->db->where('tb_toko_penjualan.status', 1);
   $this->db->where('tb_toko_penjualan.resi =', '0');
   $this->db->order_by('tb_toko_penjualan.id_penjualan', 'DESC');
   $query = $this->db->get();
   return $query->result();
 }
 
function edit($data,$id){
  $this->db->where('id_penjualan',$id);
  $this->db->update('tb_toko_penjualan',$data);
}

function tahun(){
       $this->db->select('*');
       $this->db->from('v_rekap_tahun');
       $this->db->order_by('tahun', 'ASC');
       $query = $this->db->get();
       return $query->result();
     }
function gettahun($id){
   $this->db->select('*');
   $this->db->from('v_rekap_tahun');
   $this->db->where('tahun',$id);
   $query = $this->db->get();
   return $query->result();
 } 
 function getrekaptahun($id){
   $sql="
        SELECT * FROM v_rekap WHERE DATE_FORMAT(waktu_transaksi, '%Y') = $id";
        return $this->db->query($sql)->result();
 }
 
 function getbulan(){
       $this->db->select('*');
       $this->db->from('v_rekap_bulan');
       $this->db->order_by('bulan', 'ASC');
       $query = $this->db->get();
       return $query->result();
     }
function getrekapbulan($id){
   $this->db->select('*');
   $this->db->from('v_rekap_bulan');
   $this->db->where('bulan',$id);
   $this->db->order_by('bulan', 'ASC');
   $query = $this->db->get();
   return $query->result();
 } 
 function getrekap($id){
   $sql="
        SELECT * FROM v_rekap WHERE DATE_FORMAT(waktu_transaksi, '%m') = $id AND YEAR(waktu_transaksi) = YEAR(CURDATE())";
        return $this->db->query($sql)->result();
 }
 
 function getminggu(){
       $this->db->select('*');
       $this->db->from('v_rekap_mingguan');
       $query = $this->db->get();
       return $query->result();
     }
    function getrekapminggu($id){
    $sql="
        SELECT * FROM v_rekap WHERE DATE_FORMAT(waktu_transaksi, '%u') = $id AND YEAR(waktu_transaksi) = YEAR(CURDATE())";
        return $this->db->query($sql)->result();
    }
 
 private function _get_datatables_query()
    {
         
        $this->db->from($this->table);
        
 
        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
     function get_datatables()
    {
        $this->_get_datatables_query();        
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);        
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
 
    public function get_by_id($id)
    {
        $this->db->from($this->table);
        $this->db->where('tanggal',$id);
        $query = $this->db->get();
 
        return $query->row();
    }
    
    function getrekaphari($id){
   $sql="
        SELECT * FROM v_rekap WHERE DATE_FORMAT(waktu_transaksi, '%d%m') = $id AND YEAR(waktu_transaksi) = YEAR(CURDATE())";
        return $this->db->query($sql)->result();
 }
 


}
?>
