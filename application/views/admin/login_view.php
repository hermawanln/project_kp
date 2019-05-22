
<link href="<?php echo base_url(); ?>assets/css/style-admin.css" rel="stylesheet" type="text/css">

<div id="login">
<h1>Login Administrator</h1>


 <?php 
          echo form_open('admin/login/validasi'); 
            echo validation_errors('<div class="alert alert-danger"><button class="close" data-dismiss="alert" type="button">×</button>','</div>');
            echo $this->session->flashdata('msg');
            
        ?>
  <p>
    <label for="email">Email</label>
    <input type="text" name="email" id="username">
  </p>
  <p>
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Login">
    <a href="<?php echo base_url(); ?>"><span class="tambah">    Back to home
    </span></a></p>
<?php echo form_close();?>
<footer><a href="http://javawebmedia.com" target="_blank">Website BMN Semarang</a> | &copy;by Tim Genggong - 2019</footer>

</div>