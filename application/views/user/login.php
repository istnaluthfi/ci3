<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tugas Web Framework</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url() ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link rel ="stylesheet" href="<?php echo base_url() ?>assets/css/clean-blog.min.css">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#page-top"><img src="<?php echo base_url() ?>assets/img/logo.jpg" width="60" height="40"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
     <!--    </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-trigger" href="<?php echo base_url()?>welcome">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>welcome">About</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>welcome">Image</a>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>home">Blog</a>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>Datatablesctr">Data Table</a>
            </li>

 -->


          </ul>
        </div>
      </div>
    </nav>








    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo base_url() ?>assets/img/zalora.png')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Fashion Shop</h1>
              <span class="subheading">Z A L O R A</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <tr>
   
   <span id="about"></span>   
   <center><b>
  

   </center> </b>
   <br></br>
<?php echo form_open('user/login'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Masukkan Username" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Login</button>
		</div>
	</div>
<?php echo form_close(); ?>