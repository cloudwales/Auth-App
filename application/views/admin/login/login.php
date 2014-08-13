
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
    <link href="<?php echo base_url('assets/admin/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/admin/css/signin.css');?>" rel="stylesheet">

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

    <div class="container">

      <?php 
        $attributes = array('class' => 'form-signin');
        echo form_open('admin/auth/authenticate', $attributes);
      ?>
        
      <div class="panel panel-default">
        <div class="panel-heading">
          <h1 class="panel-title text-center">Please sign in</h1>
        </div>
        <div class="panel-body">
              
              <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
              <input type="password" id="password" name="password"  class="form-control" placeholder="Password" required>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button></br/>
              <?php echo $this->session->flashdata('message'); ?>
            <?php echo form_close();?>
        </div>
        <div class="panel-footer text-center">&copy; CW Auth</div>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
