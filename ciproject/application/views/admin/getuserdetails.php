<!DOCTYPE html>
<html lang="en">

<head>
<title>User Profile</title>

  </head>

  <body id="page-top">

   <?php include APPPATH.'views/admin/includes/header.php';?>

    <div id="wrapper">

      <!-- Sidebar -->
  <?php include APPPATH.'views/admin/includes/sidebar.php';?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url('user/Dashboard'); ?>">User</a>
            </li>
            <li class="breadcrumb-item active">My Profile</li>
          </ol>

          <!-- Page Content -->
          <h3><?php echo $ud->firstName; ?> <?php echo $ud->lastName; ?>'s Profile</h3>
          <hr>
<!---- Success Message ---->






<p> <strong>Reg Date :</strong> <?php echo $ud->regDate; ?>
<p> <strong>First Name :</strong> <?php echo $ud->firstName; ?>
<p> <strong>Last Name :</strong> <?php echo $ud->lastName; ?>
<p> <strong>Email id :</strong> <?php echo $ud->emailId; ?>
<p> <strong>Mobile Number:</strong> <?php echo $ud->mobileNumber; ?>
<p> <strong>Last Updation Date :</strong> <?php echo $ud->lastUpdationDate; ?>
  

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
     <?php include APPPATH.'views/admin/includes/footer.php';?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
  </body>

</html>
