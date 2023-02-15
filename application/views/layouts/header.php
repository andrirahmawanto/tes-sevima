<!DOCTYPE html>
<html lang="en">
<head>

  <!-- meta tags -->
  <meta charset="utf-8">
  <meta name="keywords" content="instagram" />
  <meta name="description" content="instaApp" />
  <meta name="author" content="instaApp" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>InstaApp - Andri Rahmawanto</title>

  <!-- Favicon Icon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/icon-ig.png">
  <!-- Jquery Ui -->
  <link href="<?php echo base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />
  <!--Morris Chart CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/morris/morris.css">
  <!--Form Wizard-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugins/jquery.steps/css/jquery.steps.css" />
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <!-- App css -->
  <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url() ?>assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url() ?>assets/css/core.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url() ?>assets/css/components.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url() ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url() ?>assets/css/pages.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url() ?>assets/css/menu.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url() ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/switchery/switchery.min.css">

  <!-- DataTables -->
  <link href="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url() ?>assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url() ?>assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url() ?>assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url() ?>assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url() ?>assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url() ?>assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/switchery/switchery.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">   
  <link type="text/css" href="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.11/css/dataTables.checkboxes.css" rel="stylesheet" />  
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="<?php echo base_url() ?>assets/js/modernizr.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
</head>
<script src="<?php echo base_url() ?>assets/plugins/morris/morris.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/raphael/raphael-min.js"></script>

<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left" style="background-color: #F3F3F3;">
                <a class="logo">
                    <span>
                        <img src="<?php echo base_url() ?>assets/images/logo-ig.png" alt="" height="50">
                    </span>
                    <i>
                        <img src="<?php echo base_url() ?>assets/images/icon-ig.png" alt="" height="30">
                    </i>
                </a>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">

                    <!-- Navbar-left -->
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-tune"></i>
                            </button>
                        </li>
                    </ul>
                    <!-- Right(Notification) -->
                    <ul class="nav navbar-nav navbar-right">
                       <li class="dropdown user-box">
                        <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                            <img src="<?php echo base_url() ?>assets/images/users/user-2.png" alt="user-img" class="img-circle user-img">
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                            <li>
                                <h5><?php echo ucwords($this->session->userdata('username')) ?></h5>
                            </li>
                                    <?php if($this->session->userdata('level') == 1){ ?>
                                        <li><a href="<?php echo base_url().'Admin/logout'?>"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                    <?php } else { ?>
                                        <li><a href="<?php echo base_url().'Admin/logout'?>"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                    <?php } ?>
                                </ul>
                            </li>

                        </ul> <!-- end navbar-right -->

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            