<!DOCTYPE html>
<html lang="en">

<head>
 <title>Home Page</title>
  </head>

  <body id="page-top">
    <div id="wrapper">
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <!-- <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a>Home Page</a>
            </li>
      
          </ol>
 -->
          <!-- Page Content -->
          <h1>User & Admin home</h1>
          <hr>
<div class="row">
<div class="col-xl-3 col-sm-6 mb-3">
  &nbsp;
</div>

  <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  
                  <div class="mr-5">User Login</div>
                </div>
               <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('user/login'); ?>">
                  <span class="float-left">Click Here</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div> 
            <br>


       <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                  <div class="mr-5">Admin Login</div>
                </div>
               <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/login'); ?>">
                  <span class="float-left">Click Here</span>
                </a>
              </div>
            </div>
        </div>
        </div>
      </div>
    </div>
  </body>
</html>
