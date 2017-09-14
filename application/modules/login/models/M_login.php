<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function cek($user,$pass,$status){
    return $this->db->get_where('login',array('user_nip'=>$user,'pass'=>$pass,'active'=>$status));

  }

}
