<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatable extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if(!$this->input->is_ajax_request()){
      exit('No direct script access allowed :)');
    }
     $this->load->model('m_aset','aset');
     $this->load->model('m_bu','bu');
      $this->load->model('m_user','user');
    //Codeigniter : Write Less Do More
  }

  function index()
  {

  }
  function asetlist(){


      $list = $this->aset->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $aset) {
          $no++;
          $row = array();
         $row[] = $aset->idAset;
          $row[] = $aset->asetCode;
          $row[] = $aset->asetName;
          $row[] = $aset->sn;
          $row[] = $aset->brand;
          $row[] = $aset->type;
          $row[] = tgl_indo($aset->year);


          $row[] = tgl_indo($aset->addDate);
          $row[] = tgl_indo($aset->editDate);
          $row[] = $aset->updateBy;



          $row[] = '<a class="btn btn-sm btn-warning"  href="editaset/'."".base64_encode($aset->asetCode)."".'" title="Edit" ><i class="icon icon-pencil"></i> Edit</a>';




          //add html for action





          $data[] = $row;
        }

        $output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->aset->count_all(),
                "recordsFiltered" => $this->aset->count_filtered(),
                "data" => $data,
            );
        //output to json format
        echo json_encode($output);

}
function bulist(){

        $list = $this->bu->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $bu) {
            $no++;
            $row = array();
           $row[] = $bu->idBu;
            $row[] = $bu->buName;
            $row[] = $bu->address;
            $row[] = $bu->phone;
            $row[] = $bu->email;
            $row[] = tgl_indo($bu->addDate);
            $row[] = tgl_indo($bu->editDate);
            $row[] = $bu->updateBy;



            $row[] = '<a class="btn btn-sm btn-warning"  href="editbu/'."".base64_encode($bu->idBu)."".'" title="Edit" ><i class="icon icon-pencil"></i> Edit</a>';




            //add html for action





            $data[] = $row;
          }

          $output = array(
                  "draw" => $_POST['draw'],
                  "recordsTotal" => $this->bu->count_all(),
                  "recordsFiltered" => $this->bu->count_filtered(),
                  "data" => $data,
              );
          //output to json format
          echo json_encode($output);
}
function userlist(){

          $list = $this->user->get_datatables();
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $user) {
              $no++;
              $row = array();
             $row[] = $user->id;
              $row[] = $user->user_nip;
              $row[] = $user->userName;
              $row[] = $user->email;
              $row[] = $user->nameRoles;

              if ($user->active=='1') {
                  $row[] ='<span class="label label-success">Active</span>';
              }else{
                  $row[] ='<span class="label label-important">Non Active</span>';
              }





              $row[] = '<a class="btn btn-sm btn-warning"  href="edituser/'."".base64_encode($user->user_nip)."".'" title="Edit" ><i class="icon icon-pencil"></i> Edit</a>
              <a class="btn btn-sm btn-primary"  href="access/'."".base64_encode($user->user_nip)."".'" title="Acces" ><i class="icon icon-key"></i> Add Access</a>';




              //add html for action





              $data[] = $row;
            }

            $output = array(
                    "draw" => $_POST['draw'],
                    "recordsTotal" => $this->bu->count_all(),
                    "recordsFiltered" => $this->bu->count_filtered(),
                    "data" => $data,
                );
            //output to json format
            echo json_encode($output);
}

}
