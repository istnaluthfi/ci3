<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php echo form_open( 'Category/create', array('class' => 'needs-validation', 'novalidate' => '') ); ?>

<div class="form-group">
   <label for="cat_name">Nama Kategori</label>
   <input type="text" class="form-control" name="cat_name" value="<?php echo set_value('cat_name') ?>" required>
   <div class="invalid-feedback"></div>
</div>

<div class="form-group">
   <label for="text">Deskripsi</label>
   <input type="text" class="form-control" name="cat_description" value="<?php echo set_value('cat_description') ?>" required>
   <div class="invalid-feedback"></div>
</div>
<button type="submit" class="btn btn-primary">Simpan</button>
</form>
<?php if(!$this->session->userdata('logged_in')) : ?>

                   <div class="btn-group" role="group" aria-label="Data baru">
                        <?php echo anchor('user/register', 'Register', array('class' => 'btn btn-outline-light')); ?>
                        <?php echo anchor('user/login', 'Login', array('class' => 'btn btn-outline-light')); ?>

                    </div>

                <?php endif; ?>

                <?php if($this->session->userdata('logged_in')) : ?>
                    <div class="btn-group" role="group" aria-label="Data baru">

                        <?php echo anchor('blog/tambah', 'Artikel Baru', array('class' => 'btn btn-outline-light')); ?>
                        <?php echo anchor('category/create', 'Kategori Baru', array('class' => 'btn btn-outline-light')); ?>
                        <?php echo anchor('user/logout', 'Logout', array('class' => 'btn btn-outline-light')); ?>
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

</body>
</html>