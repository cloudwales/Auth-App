<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>CW Auth</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/admin/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/admin/css/template.css'); ?>" rel="stylesheet">

    <script src="<?php echo base_url('assets/admin/js/ie-emulation-modes-warning.js');?>"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url('assets/admin/js/ie10-viewport-bug-workaround.js');?>"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Auth App</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url('index.php/admin/dashboard'); ?>">Dashboard</a></li>
            <li><a href="#about">Menu 1</a></li>
            <li><a href="#contact">Menu 2</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="<?php echo base_url('index.php/admin/users');?>">Users</a></li>
                  <li><a href="#">Settings</a></li>
                  <li class="divider"></li>
                  <li><a href="#">My Profile</a></li>
                </ul>
              </li>
              <li><a href="<?php echo base_url('index.php/admin/auth/logout'); ?>">Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">