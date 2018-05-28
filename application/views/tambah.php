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
        </button>
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




<?php
      echo form_open('home/tambah', array('enctype'=>'multipart/form-data')); 
       ?>
      <table>
        <?php echo validation_errors(); ?>
        <tr>
          <td>Judul</td>
          <td>:</td>
          <td><input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>"></td>
        </tr>
        <tr>
          <td>Content</td>
          <td>:</td>
          <td><input type="text" name="input_content" value="<?php echo set_value('input_content'); ?>"></td>
        </tr>
        <tr>
          <td>Tanggal </td>
          <td>:</td>
          <td><input type="text" name="input_tanggal" value="<?php echo set_value('input_tanggal'); ?>"></td>
        </tr>
        <tr>
          <td>Gambar</td>
          <td>:</td>
          <td><input type="file" name="input_gambar"></td>
        </tr>
        <tr>
          <td>Penulis </td>
          <td>:</td>
          <td><input type="text" name="input_penulis" value="<?php echo set_value('input_penulis'); ?>"></td>
        </tr>
        <tr>
          <td>Sumber </td>
          <td>:</td>
          <td><input type="text" name="input_sumber" value="<?php echo set_value('input_sumber'); ?>"></td>
        </tr>
        <tr>
          <td>Lokasi Penulis </td>
          <td>:</td>
          <td><input type="text" name="input_lokasi_penulis" value="<?php echo set_value('input_lokasi_penulis'); ?>"></td>
        </tr>


        <tr>
          <label>Category</label>
          <select name="id_cat" class="form-control" required> 
            <option value="">Pilih Category</option>
            <?php foreach ($Category as $Category): ?>
              <option value="<?php echo $Category->id_cat; ?>"><?php echo $Category->cat_name; ?></option>
              <?php endforeach; ?>
            </select>
            

        <tr>
          <td colspan="3"><input type="submit" name="simpan" value="<?php echo set_value('input_gambar'); ?>simpan"></td>
        </tr>

      </table>



<?php if(!$this->session->userdata('logged_in')) : ?>

                   <div class="btn-group" role="group" aria-label="Data baru">
                         <?php echo anchor('user/register', 'Register', array('class' => 'btn btn-sm btn-info')); ?>
                        <?php echo anchor('user/login', 'Login', array('class' => 'btn btn-sm btn-info')); ?>

                    </div>

                <?php endif; ?>


                <?php if($this->session->userdata('logged_in')) : ?>
                    <div class="btn-group" role="group" aria-label="Data baru">


                         <?php echo anchor('user/register', 'Register', array('class' => 'btn btn-sm btn-info')); ?>

                        
                        <?php echo anchor('user/logout', 'Logout', array('class' => 'btn btn-sm btn-info')); ?>
                    </div>
                <?php endif; ?>

             </div>
         </nav>

       <?php if($this->session->flashdata('user_registered')): ?>
         <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
       <?php endif; ?>
        <?php if($this->session->flashdata('login_failed')): ?>
         <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('login_failed').'</div>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</div>'; ?>
        <?php endif; ?>

         <?php if($this->session->flashdata('user_loggedout')): ?>
          <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</div>'; ?>
        <?php endif; ?>
    </nav>





    </div>