<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More

  }

  function index()
  {
    $data['app']=$this->db->get('app')->row();
    if ($this->session->userdata('login')==TRUE) {
      redirect('home');
    }
    $this->load->view('login',$data);
  }
  function cek(){
    if (empty($_POST)) {
      $this->session->set_flashdata('error','value');
      redirect('login');

    }

    $this->load->model('m_login');

    $user=trim($this->input->post('nip',TRUE));
 $pass=base64_encode(strtoupper(trim($this->input->post('pass',TRUE))));
 $status='1';
 $cek=$this->m_login->cek($user,$pass,$status);
 if ($cek->num_rows()>0) {
   foreach($cek->result() as $data){
     $sess_data['login'] =TRUE;
     $sess_data['nip'] = $data->user_nip;
     $sess_data['nama'] = $data->userName;
     $sess_data['photo'] =  $data->photo;
     $x=$sess_data['active'] =  $data->status;
     $this->session->set_userdata($sess_data);
 }
$agen=$this->agent->browser().' '.$this->agent->version();
$ip=$_SERVER['REMOTE_ADDR'] ;
$date=date('Y-m-d H:i:s');
 $data=array('lastIp'=>$ip,'lastLogin'=>$date,'useragent'=>$agen);
$this->db->where('user_nip', $user);
 $this->db->update('login', $data);
 redirect('home');

 }
 if($x=0){
   $this->session->set_flashdata('nonactive','value');
    redirect('login');
 }
 $agen=$this->agent->browser().' '.$this->agent->version();
 $ip=$_SERVER['REMOTE_ADDR'] ;
 $date=date('Y-m-d H:i:s');
 $data1=array('user_nip'=>$user,'ip'=>$ip,'useragent'=>$agen,'last'=>$date);
 $this->db->insert('logErrorLogin', $data1);
 $this->session->set_flashdata('gagal','value');
  redirect('login');

  }
  function out(){
    $data=array('');

    session_destroy();
    redirect('login');

  }

}
