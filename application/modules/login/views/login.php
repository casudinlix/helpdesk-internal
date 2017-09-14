<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $app->appName ?></title>


    <link href="<?php echo depan()?>sweat/dist/sweetalert.css" rel="stylesheet">


<link rel="stylesheet" href="<?php echo depan()?>css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo depan()?>css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="<?php echo depan()?>css/matrix-login.css" />
    <link href="<?php echo depan()?>font-awesome/css/font-awesome.css" rel="stylesheet" />
  </head>
  <body>
      <div id="loginbox">
          <form id="loginform" class="form-vertical" action="<?php echo site_url('login/cek')?>" method="post">
       <div class="control-group normal_text"> <h3><img src="<?php echo site_url('xupload')?>/rk.png" alt="Logo" width="100px" higth="70px"/></h3></div>
              <div class="control-group">
                  <div class="controls">
                      <div class="main_input_box">
                          <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" placeholder="NIP" name="nip" required="" />
                      </div>
                  </div>
              </div>
              <div class="control-group">
                  <div class="controls">
                      <div class="main_input_box">
                          <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="Password" name="pass" />
                      </div>
                  </div>
              </div>
              <div class="form-actions">
                  <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
                  <span class="pull-right"><button type="submit" class="btn btn-success ">Log-In</button>
                  </span>
              </div>
          </form>
          <form id="recoverform" action="#" class="form-vertical">
      <p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>

                  <div class="controls">
                      <div class="main_input_box">
                          <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                      </div>
                  </div>

              <div class="form-actions">
                  <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                  <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
              </div>
          </form>
      </div>

      <script src="<?php echo depan()?>js/jquery.min.js"></script>
      <script src="<?php echo depan()?>js/matrix.login.js"></script>
  <script src="<?php echo depan()?>sweat/dist/sweetalert.min.js"></script>
      <?php if ($this->session->flashdata('error')): ?>c
        <script>swal(
          {title: "Not Allowed Access!", text: "Please Try Again", timer: 3000, type: "error", showConfirmButton: false }
        )</script>
      <?php endif; ?>

      <?php if ($this->session->flashdata('gagal')): ?>
      <script>swal(
        {title: "Wrong password Or Nip!", text: "Please Try Again", timer: 3000, type: "error", showConfirmButton: false }
      )</script>
      <?php endif; ?>
      <?php if ($this->session->flashdata('nonactive')): ?>
      <script>swal(
        {title: "Your Account Has Ben Suspend!", text: "Please Call Administrator For Active", timer: 3000, type: "error", showConfirmButton: false }
      )</script>
      <?php endif; ?>
  </body>
</html>
