<!DOCTYPE html>
<html lang="en">

<head>
<title>My Profile</title>
</head>

  <body id="page-top">

   <?php include APPPATH.'views/user/includes/header.php';?>

    <div id="wrapper">

      <!-- Sidebar -->
  <?php include APPPATH.'views/user/includes/sidebar.php';?>

      <div id="content-wrapper">

        <div class="container-fluid">

         <ol class="breadcrumb">
            <li class="breadcrumb-item active">My Profile</li>
          </ol>

          <h1>My Profile</h1>
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

 <?php echo form_open('admin/User_edit/updateprofile');?>

<p> <strong>Reg Date :</strong> <?php echo $profile->regDate; ?>


            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
              <?php echo form_input(['name'=>'firstname','id'=>'firstname','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('firstname',$profile->firstName)]);?>
            <?php echo form_label('Enter your first name', 'firstname'); ?>
          <?php echo form_error('firstname',"<div style='color:red'>","</div>");?>
                  </div>
                </div>
              </div>
            </div>


              <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                <?php echo form_input(['name'=>'lastname','id'=>'lastname','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('lastname',$profile->lastName)]);?>
                <?php echo form_label('Enter your  last name', 'lastname'); ?>
                <?php echo form_error('lastname',"<div style='color:red'>","</div>");?>
                 </div>
                </div>
              </div>
            </div>


            <div class="form-group">
               <div class="form-row">
                    <div class="col-md-6">
              <div class="form-label-group">
              <?php echo form_input(['name'=>'emailid','id'=>'emailid','class'=>'form-control','autofocus'=>'autofocus','readonly'=>'true','value'=>set_value('emailid',$profile->emailId)]);?>
              <?php echo form_label('Enter valid email id', 'emailid'); ?>
              <?php echo form_error('emailid',"<div style='color:red'>","</div>");?>
              </div>
            </div>
            </div>
          </div>


     <div class="form-group">
       <div class="form-row">
            <div class="col-md-6">
              <div class="form-label-group">
                <?php echo form_input(['name'=>'mobilenumber','id'=>'mobilenumber','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('mobilenumber',$profile->mobileNumber)]);?>
                <?php echo form_label('Enter Mobile Number', 'mobilenumber'); ?>
                <?php echo form_error('mobilenumber',"<div style='color:red'>","</div>");?>
              </div>
            </div>
        </div>
    </div>


       <div class="form-row">
            <div class="col-md-6">  
        <?php echo form_submit(['name'=>'Update','value'=>'Update','class'=>'btn btn-primary btn-block']); ?>
      </div>
    </div>
 <?php echo form_close();?>

        </div>
       <?php include APPPATH.'views/user/includes/footer.php';?>

      </div>
      </div>
  </body>

</html>
