<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tugas Web Framework</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link rel ="stylesheet" href="assets/css/clean-blog.min.css">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#page-top"><img src="assets/img/logo.jpg" width="60" height="40"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-trigger" href="welcome">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="welcome">About</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="welcome">Image</a>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="home">Blog</a>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="Datatablesctr">Data Table</a>
            </li>




          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('assets/img/zalora.png')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <!-- <h1>Fashion Shop</h1>
              <span class="subheading">Z A L O R A</span> -->
            </div>
          </div>
        </div>
      </div>
    </header>



    <header class=" text-center d-flex">
      <div class="container my-auto">
        <div class="row">
          
          <div class="col-lg-10 mx-auto">
            <h3 class="text-uppercase">
              <strong>Data Table</strong>
            </h3><hr>
          </div>
    
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <table id="dt-basic" class="table table-striped table-bordered text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                             <th>ID Kategori</th>
                            <th>Tanggal</th>
                            <th>Penulis</th>
                            <th>Sumber</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $d) : ?>
                        <tr>
                            <td><?php echo $d->id_blog ?></td>
                            <td><?php echo $d->judul_blog ?></td>
                            <td><?php echo $d->id_cat ?></td>
                            <td><?php echo $d->tanggal_blog ?></td>
                            <td><?php echo $d->penulis ?></td>
                            <td><?php echo $d->sumber ?></td>
                            <td>
                                <a href="<?php echo base_url('/home/edit/') . $d->id_blog ?>" class="btn btn-sm btn-outline-primary">Edit</a> 
                                <a href="<?php echo base_url('/blog/delete/') . $d->id_blog ?>" class="btn btn-sm btn-outline-danger">Delete</a> 
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
  
</main>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css">
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery-1.9.1.min.js"></script>
<script>
    jQuery(document).ready(function(){

        // Contoh inisialisasi Datatable tanpa konfigurasi apapun
        // #dt-basic adalah id html dari tabel yang diinisialisasi
        $('#dt-basic').DataTable();
    });

</script>



