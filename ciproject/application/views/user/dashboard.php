<!DOCTYPE html>
<html lang="en">

  <head>
    <title>User dashboard</title>
  </head>

  <body id="page-top">

 <?php include APPPATH.'views/user/includes/header.php';?>

    <div id="wrapper">

      <!-- Sidebar -->
 <?php include APPPATH.'views/user/includes/sidebar.php';?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url('user/Dashboard'); ?>">User</a>
            </li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-12 col-sm-6 mb-3">
   <h3>Welcome Back : <?php echo $profile->firstName;?> <?php echo $profile->lastName;?>  </h3>
            </div>
 
  
          </div>



        </div>
        
   <?php include APPPATH.'views/user/includes/footer.php';?>

      </div>
       </div>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
  </body>

</html>
