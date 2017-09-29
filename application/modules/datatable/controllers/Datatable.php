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
      $this->load->model('m_buperm','buprem');
      $this->load->model('m_dept','dept');
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
          $num=1;
          foreach ($list as $bu) {
            $no++;
            $row = array();
           $row[] = $num++;
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
            $num=1;
            foreach ($list as $user) {
              $no++;
              $row = array();
             $row[] = $num++;
              $row[] = $user->user_nip;
              $row[] = $user->userName;
              $row[] = $user->email;
              $row[] = $user->nameRoles;

              if ($user->active=='1') {
                  $row[] ='<span class="label label-success">YES</span>';
              }else{
                  $row[] ='<span class="label label-important">NO</span>';
              }



if ($user->nameRoles=="IT-Dev") {
 $row[] ='<span class="icon-user"></span>';
}else{

              $row[] = '<a class="btn btn-mini btn-warning"  href="edituser/'."".base64_encode($user->user_nip)."".'" title="Edit" ><i class="icon icon-pencil"></i> Edit</a>
              <a class="btn btn-mini btn-primary"  href="access/'."".base64_encode($user->user_nip)."".'" title="Acces" ><i class="icon icon-key"></i> Setting Access</a>
              <a class="btn btn-mini btn-inverse"  href="pass/'."".base64_encode($user->user_nip)."".'" title="Password" ><i class="icon icon-lock"></i>Change Passwod</a>
              <a class="btn btn-mini btn-info"  href="buperm/'."".base64_encode($user->user_nip)."".'" title="Permission" ><i class="icon icon-briefcase"></i>BU Permission</a>';
}



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
function buprem(){
  $list = $this->buprem->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $buprem) {
            $no++;
            $row = array();
             $row[] =  $buprem->user_nip;
             $row[] =  $buprem->userName;
            $row[] = $buprem->buName;




            $row[] =  $buprem->nameRoles;




            $row[] = '<a class="btn btn-mini btn-danger"  href="javascript:void(0)" title="Hapus"
            onClick="deletbu('."'".base64_encode($buprem->user_nip)."/".$buprem->id."'".')"><i class="icon icon-trash"></i> Delete</a>';




            //add html for action





            $data[] = $row;
          }

          $output = array(
                  "draw" => $_POST['draw'],
                  "recordsTotal" => $this->buprem->count_all(),
                  "recordsFiltered" => $this->buprem->count_filtered(),
                  "data" => $data,
              );
          //output to json format
          echo json_encode($output);

}
function deptlist(){
  $list = $this->dept->get_datatables();
    $data = array();
    $no = $_POST['start'];
    $num=1;
    foreach ($list as $dept) {
      $no++;
      $row = array();
     $row[] =$num++;
      $row[] = $dept->deptName;
      $row[] = tgl_indo($dept->addDate);


      $row[] = tgl_indo($dept->editDate);

      $row[] = $dept->updateBy;



      $row[] = '<button class="dept btn btn-sm btn-warning" data-toggle="modal" data-target="#editdept" data-id="'.$dept->id.'" title="Edit" ><i class="icon icon-pencil"></i> Edit</button>';




      //add html for action





      $data[] = $row;
    }

    $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->dept->count_all(),
            "recordsFiltered" => $this->dept->count_filtered(),
            "data" => $data,
        );
    //output to json format
    echo json_encode($output);
}

}
