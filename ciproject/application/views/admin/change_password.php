<!DOCTYPE html>
<html>

<head>
<title>Admin Password change</title>
  </head>

  <body id="page-top">

   <?php include APPPATH.'views/admin/includes/header.php';?>

    <div id="wrapper">

      <!-- Sidebar -->
  <?php include APPPATH.'views/admin/includes/sidebar.php';?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url('admin/Dashboard'); ?>">Admin</a>
            </li>
            <li class="breadcrumb-item active">Change Password</li>
          </ol>

          <h1>Change Password</h1>
          <hr>

      <?php if ($this->session->flashdata('success')) { ?>
    <p style="color:green; font-size:18px;"><?php echo $this->session->flashdata('success'); ?></p>
    </div>
    <?php 
  } 
  ?>


    <?php if ($this->session->flashdata('error')) { ?>
    <p style="color:red; font-size:18px;"><?php echo $this->session->flashdata('error');?></p>
    <?php 
  }
   ?> 

 <?php echo form_open('admin/Change_password');?>

     <div class="form-group">     
    <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
<?php echo form_password(['name'=>'currentpassword','id'=>'password','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('currentpassword')]);?>
<?php echo form_label('Current Password', 'currentpassword'); ?>
<?php echo form_error('currentpassword',"<div style='color:red'>","</div>");?>
                  </div>
                </div>
              </div>
            </div>

        <div class="form-group">     
    <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
<?php echo form_password(['name'=>'password','id'=>'password','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('password')]);?>
<?php echo form_label('New Password', 'password'); ?>
<?php echo form_error('password',"<div style='color:red'>","</div>");?>
                  </div>
                </div>
              </div>
            </div>


      <div class="form-group">         
   <div class="form-row">             
                <div class="col-md-6">
                  <div class="form-label-group">
<?php echo form_password(['name'=>'confirmpassword','id'=>'confirmpassword','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('confirmpassword')]);?>
<?php echo form_label('Confirm Password', 'confirmpassword'); ?>
<?php echo form_error('confirmpassword',"<div style='color:red'>","</div>");?>
                  </div>
                </div>
              </div>
            </div>

      <div class="form-group">         
   <div class="form-row">             
                <div class="col-md-6">
 <?php echo form_submit(['name'=>'chnagepwd','value'=>'Change','class'=>'btn btn-primary btn-block']); ?>
</div>
</div>
</div>
 <?php echo form_close();?>

        </div>
     <?php include APPPATH.'views/admin/includes/footer.php';?>

      </div>
 </div>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
  </body>
</html>