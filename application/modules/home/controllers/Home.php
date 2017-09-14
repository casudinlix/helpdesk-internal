<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_code','code');
    if ($this->session->userdata('login')!==TRUE) {
      $this->session->set_flashdata('error','value');
      redirect('login');
    }
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['app']=$this->db->get('app')->row();
     $data['kelas']="class='active'";
$this->load->view('atas', $data);
$this->load->view('index', $data);
$this->load->view('bawah', $data);
  }
  function aset(){
$data['app']=$this->db->get('app')->row();
  $this->load->view('atas', $data);
    $this->load->view('aset/aset', $data);
    $this->load->view('bawah', $data);


  }
  function editaset(){
  $id=base64_decode($this->uri->segment(3));
  $data['app']=$this->db->get('app')->row();
  $data['aset']=$this->db->get_where('m_asset',array('asetCode'=>$id))->row();
  $this->load->view('atas', $data);
    $this->load->view('aset/edit', $data);
    $this->load->view('bawah', $data);

  }
  function addasset(){
    $data['app']=$this->db->get('app')->row();
$data['kode']=$this->code->addasset();
    $this->load->view('atas', $data);
$this->load->view('aset/add', $data);
$this->load->view('bawah', $data);
  }
  function bu(){
    $data['app']=$this->db->get('app')->row();
$data['kode']=$this->code->addasset();
    $this->load->view('atas', $data);
$this->load->view('bu/bu', $data);
$this->load->view('bawah', $data);
  }
  function addbu(){
    $data['app']=$this->db->get('app')->row();

    $this->load->view('atas', $data);
$this->load->view('bu/add', $data);
$this->load->view('bawah', $data);
  }
  function editbu(){
      $data['app']=$this->db->get('app')->row();
    $id=base64_decode($this->uri->segment(3));
    $data['bu']=$this->db->get_where('m_bu',array('idBu'=>$id))->row();

    $this->load->view('atas', $data);
    $this->load->view('bu/edit', $data);
    $this->load->view('bawah', $data);

  }

}