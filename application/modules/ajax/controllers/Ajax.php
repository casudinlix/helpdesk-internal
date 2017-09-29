<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    if(!$this->input->is_ajax_request()){
      exit('No direct script access allowed :)');
    }
  }

  function index()
  {

  }
function deletebu(){
$id=base64_decode($this->uri->segment(3));
  $idbu=$this->uri->segment(4);
  $data=$this->db->where(array('id'=>$idbu));
  $this->db->delete('bu_permision',$data);
}
}
