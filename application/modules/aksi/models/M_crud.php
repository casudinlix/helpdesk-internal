<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function insert($table,$data){
return    $this->db->insert($table, $data);
  }
  function edit($table,$id,$field,$data){
    $this->db->where($field, $id);
$query=$this->db->update($table, $data);

return $query;

  }
  function delete($table,$id,$field){
    $this->db->where($field, $id);
return  $this->db->update($table, $data);
  }

}
