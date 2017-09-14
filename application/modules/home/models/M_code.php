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

}
