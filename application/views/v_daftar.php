<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />    
    <meta name="author" content="ansiftech solution" />    
    <meta name="description" content="Aplikasi Penjualan Berbasis Web">
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/icon-ig.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Title -->
  <title>InstaApp - Andri Rahmawanto</title>
    <!-- Stylesheets & Fonts -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
        <div class="img-left d-none d-md-flex">
        </div>
        <div class="card-body">
          <div align="center" class="mb-3">
            <img src="<?php echo base_url() ?>assets/images/logo-ig.png" alt="" width="50%">
          </div>            
          <form class="form-box px-3" action="<?php echo site_url('daftar/input');?>" enctype='multipart/form-data' method="post">
            <div class="form-input">
              <span><i class="fa fa-envelope-o"></i></span>
              <input type="email" name="email" placeholder="Email" tabindex="10" required>
            </div>
            <div class="form-input">
              <span><i class="fa fa-edit"></i></span>
              <input type="text" name="full_name" placeholder="Fullname" required>
            </div>
            <div class="form-input">
              <span><i class="fa fa-user-o"></i></span>
              <input type="text" name="username" placeholder="Username" tabindex="10" required>
            </div>
            <div class="form-input">
              <span><i class="fa fa-lock"></i></span>
              <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="mb-3">
              <button type="submit" id="btnsimpan" name="btnsimpan" class="btn btn-block text-uppercase" style="background-color: #15569E;">
                Sign Up
              </button>
            </div>            
          </form>
            <div class="col-md-12" align="center">
              <span>Have an account? <a href="<?php echo base_url().'admin'?>"> Log in</a></span>
            </div>
            
            <hr class="my-4">

            <div class="text-center mb-2">
              <strong> &copy; 2023 Andri Rahmawanto, All Rights Reserved </strong>
            </div>
        </div>
      </div>
    </div>
  </div>
</body>