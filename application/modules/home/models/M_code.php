<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_code extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function addasset(){
    $h=date('d');
    $b=date('m');
    $y=date('y');
    $this->db->select('idAset as kode', FALSE);
    $this->db->order_by('idAset','DESC');
    $this->db->limit(1);
    $query = $this->db->get('m_asset');      //cek dulu apakah ada sudah ada kode di tabel.
    if($query->num_rows() <> 0){
     //jika kode ternyata sudah ada.
     $data = $query->row();
     $kode = intval($data->kode) + 1;
    }
    else{
     //jika kode belum ada
     $kode = 1;
    }

    $kodemax = str_pad($kode, 0, STR_PAD_LEFT);
    $kodejadi = "A-".$y.$b.$h.$kodemax;
    return $kodejadi;
  }
  function codein(){
      $nowMonthYear = date('my');
$this->db->select_max("id_no");      // select max (id_no)
$this->db->where("unit_loct", $Nunit);            // where unit_loct
$this->db->where("dept_unit_loct", $Ndept);   // and dept_unit_loct
$this->db->where("item_type", $Nitem);    // and item_type
$this->db->where("DATE_FORMAT(datepublish, '%y') = ", $nowYear);  // and month to year
$query = $this->db->get('id_item');

if(!empty($query)){
 foreach ($query->result() as $value) {
  $kode = $value->id_no;                 // contoh : X01.Y02.Z03.MMYY.0001
                                     //no urut kode hanya diteruskan jika Nunit and Ndept and Nitem sudah pernah ada record sebelumnya
  $lastkode = substr($kode,17,4);    // urutan digit mulai ke 17 sepanjang 4 karakter
  $nextkode = $lastkode + 1;
  $tempnextno = $Nunit.".".$Ndept.".".$Nitem.".".$nowMonthYear.".";
  $nextnoreg = $tempnextno.sprintf('%04s',$nextkode);    // %04s untuk penyesuaian 4 digit no urut
 }
}else{
                             // jika kondisi  Nunit and Ndept and Nitem tidak dipenuhi maka no urut reset dari 1
 $tempnextno = $Nunit.".".$Ndept.".".$Nitem.".".date('ym').".";
 $nextnoreg = $tempnextno.sprintf('%04s',$nextkode);
}
return $nextnoreg;
}



}
