<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aksi extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More

    if (empty($_POST)) {

    redirect($_SERVER['HTTP_REFERER']);

    }
      $this->load->model('m_crud','crud');
  }

  function addasset()
  {

$data=array('asetCode'=>strtoupper($this->input->post('code',TRUE)),
'asetName'=>strtoupper($this->input->post('nama',TRUE)),
'sn'=>strtoupper($this->input->post('sn',TRUE)),
'brand'=>strtoupper($this->input->post('brand',TRUE)),
'type'=>strtoupper($this->input->post('type')),
'year'=>date('Y-m-d', strtotime($this->input->post('year',TRUE))),
'addDate'=>date('Y-m-d'),
'editDate'=>date('Y-m-d'),
'updateBy'=>$this->session->userdata('nama'));
$this->db->insert('m_asset', $data);

$this->session->set_flashdata('sukses','value');
redirect('home/aset');
  }
function editasset(){
  $id=$this->input->post('code');
  $data=array(
  'sn'=>strtoupper($this->input->post('sn',TRUE)),
  'asetName'=>strtoupper($this->input->post('nama',TRUE)),
  'brand'=>strtoupper($this->input->post('brand',TRUE)),
  'type'=>strtoupper($this->input->post('type')),
  'year'=>date('Y-m-d', strtotime($this->input->post('year',TRUE))),

  'editDate'=>date('Y-m-d'),
  'updateBy'=>$this->session->userdata('nama'));
  $this->db->where('asetCode', $id);
  $this->db->update('m_asset', $data);

  $this->session->set_flashdata('sukses','value');
  redirect('home/aset');
}
function addbu(){
  $data=array('buName'=>strtoupper($this->input->post('nama',TRUE)),'address'=>strtoupper($this->input->post('address',TRUE)),'phone'=>$this->input->post('phone',TRUE),
  'email'=>strtoupper($this->input->post('email',TRUE)),'addDate'=>date('Y-m-d'),'editDate'=>date('Y-m-d'),'updateBy'=>$this->session->userdata('nama'));
$this->db->insert('m_bu', $data);
$this->session->set_flashdata('sukses','value');
redirect('home/bu');
}
function editbu(){
$id=$this->input->post('id');
  $data=array('buName'=>strtoupper($this->input->post('nama',TRUE)),'address'=>strtoupper($this->input->post('address',TRUE)),'phone'=>$this->input->post('phone',TRUE),
  'email'=>strtoupper($this->input->post('email',TRUE)),'editDate'=>date('Y-m-d'),'updateBy'=>$this->session->userdata('nama'));
$this->db->where('idBu', $id);
$this->db->update('m_bu', $data);
$this->session->set_flashdata('sukses','value');
redirect('home/bu');

}
function adduser(){
  $table='login';
  $data=array('user_nip'=>strtoupper($this->input->post('nip',TRUE)),'userName'=>strtoupper($this->input->post('nama',TRUE)),
'pass'=>base64_encode(strtoupper($this->input->post('pwd2'))),'email'=>$this->input->post('email',TRUE),'roles_id'=>$this->input->post('role'));
$this->crud->insert($table,$data);
$this->session->set_flashdata('sukses','value');
redirect('home/user');

}
function edituser(){
    $table='login';
    $id=$this->input->post('nip');
    $field='user_nip';

    $data=array('userName'=>strtoupper($this->input->post('nama',TRUE)),'email'=>$this->input->post('email',TRUE),'active'=>$this->input->post('active'));

  $this->crud->edit($table,$id,$field,$data);
  $this->session->set_flashdata('sukses','value');
  redirect('home/user');

}
function editpass(){
  $table='login';
    $id=$this->input->post('id');
    $field='user_nip';

   $data=array('pass'=>base64_encode(strtoupper($this->input->post('pwd2'))));

  $this->crud->edit($table,$id,$field,$data);
  $this->session->set_flashdata('sukses','value');
  redirect('home/user');
}

}
