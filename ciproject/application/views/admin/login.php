<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Login</title>
  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Admin Login</div>
        <!---- Error Message ---->

<?php if ($this->session->flashdata('error')) { ?>
<p style="color:red; font-size:18px;" align="center"><?php echo $this->session->flashdata('error');?></p>

<?php } ?>  
        <div class="card-body">
<?php echo form_open('admin/login');?>
            <div class="form-group">
              <div class="form-label-group">
<?php echo form_input(['name'=>'username','id'=>'username','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('username')]);?>
<?php echo form_label('Enter Username', 'username'); ?>
<?php echo form_error('username',"<div style='color:red'>","</div>");?>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
<?php echo form_password(['name'=>'password','id'=>'password','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('password')]);?>
<?php echo form_label('Password', 'password'); ?>
<?php echo form_error('password',"<div style='color:red'>","</div>");?>
              </div>
            </div>
   
 <?php echo form_submit(['name'=>'login','value'=>'Login','class'=>'btn btn-primary btn-block']); ?>
  <a class="d-block small" href="<?php echo site_url('Home'); ?>">Back to Home page</a>
<?php echo form_close(); ?>
     
        </div>
      </div>
    </div>
  </body>

</html>
