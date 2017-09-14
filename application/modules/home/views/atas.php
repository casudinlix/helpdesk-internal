<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $app->appName ?></title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="<?php echo depan()?>sweat/dist/sweetalert.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo depan()?>css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo depan()?>css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo depan()?>css/uniform.css" />
<link rel="stylesheet" href="<?php echo depan()?>css/select2.css" />
<link rel="stylesheet" href="<?php echo depan()?>css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo depan()?>css/matrix-media.css" />
<link rel="stylesheet" href="<?php echo depan()?>css/datepicker.css" />
<link href="<?php echo depan()?>font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='<?php echo depan()?>css/google.css' rel='stylesheet' type='text/css'>
<link rel="icon" href="<?php echo img()?>rk.png" type="image/x-icon" />
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="<?php echo site_url('home')?>"><?php echo $app->appName ?></a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome <?php echo $this->session->userdata('nama') ?></span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="<?php echo site_url('login/out')?>"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="<?php echo site_url('login/out')?>"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li ><a href="<?php echo site_url('home')?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>

    <li class="submenu"> <a href="#"><i class="icon icon-cog"></i> <span>Master & Config</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a  href="<?php echo site_url('home/bu')?>"><i class=" icon-cloud"></i>Business Unit</a></li>
        <li><a  href="<?php echo site_url('home/aset')?>"><i class="icon-book"></i>Asset</a></li>
        <li><a  href="<?php echo site_url('home/aset')?>"><i class="icon-group"></i>Users</a></li>
        <li><a  href="<?php echo site_url('home/aset')?>"><i class="icon-key"></i>Access Control List</a></li>
        <li><a  href="<?php echo site_url('home/aset')?>"><i class="icon-book"></i>Departement</a></li>
        <li><a href="form-validation.html">Form with Validation</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li>
      </ul>
    </li>
    <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
    <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="index2.html">Dashboard2</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="calendar.html">Calendar</a></li>
        <li><a href="invoice.html">Invoice</a></li>
        <li><a href="chat.html">Chat option</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="error403.html">Error 403</a></li>
        <li><a href="error404.html">Error 404</a></li>
        <li><a href="error405.html">Error 405</a></li>
        <li><a href="error500.html">Error 500</a></li>
      </ul>
    </li>
    <li class="content"> <span>Monthly Bandwidth Transfer</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat">21419.94 / 14000 MB</div>
    </li>
    <li class="content"> <span>Disk Space Usage</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 87%;" class="bar"></div>
      </div>
      <span class="percent">87%</span>
      <div class="stat">604.44 / 4000 MB</div>
    </li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
