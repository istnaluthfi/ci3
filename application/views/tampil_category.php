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
              <h1>Fashion Shop</h1>
              <span class="subheading">Z A L O R A</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->              



                <!-- <button>Edit</button> -->



        <div>
      <?php foreach ($Category as $key): ?>
                <br>
                <?php echo $key->id_cat ?>
                  <br>
                  <?php echo $key->cat_name ?>
                <br>
                <?php echo $key->cat_description ?>
                <br>
                <a href='home/edit/<?php echo $key->id_cat?>' class='btn btn-sm btn-info'>Update</a>

                <a href='category/delete/<?php echo $key->id_cat;?>' class='btn btn-sm btn-danger'>Hapus</a>
      <?php endforeach?>

    </div>

<br>
<div>
  <a href='category/create' class='btn btn-sm btn-danger'>Tambah</a>
</div>


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





              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/js/clean-blog.min.js"></script>

  </body>

</html>
