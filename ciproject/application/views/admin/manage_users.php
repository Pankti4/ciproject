<!DOCTYPE html>
<html lang="en">

  <head>
	<title>Admin - Manage Users</title>
  </head>

  <body id="page-top">
	<?php include APPPATH.'views/admin/includes/header.php';?>

	<div id="wrapper">

		<?php include APPPATH.'views/admin/includes/sidebar.php';?>

	  <div id="content-wrapper">

		<div class="container-fluid">

		  <!-- Breadcrumbs-->
		  <ol class="breadcrumb">
			<li class="breadcrumb-item">
			  <a href="<?php echo site_url('admin/Dashboard'); ?>">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">Manage Users</li>
		  </ol>

		  <div class="card mb-3">
			<div class="card-header">
			  <i class="fas fa-table"></i>
			 Users Details</div>


			<div class="card-body">
			  <div class="table-responsive">

<?php if ($this->session->flashdata('success')) { ?>
<p style="color:green; font-size:18px;"><?php echo $this->session->flashdata('success'); ?></p>
</div>
<?php } ?>
	

<table id="tblLocations" cellpadding="0" cellspacing="0" border="1">
    <tr>
        <th>ID</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>EmailId</th>
        <th>RegDate</th>
        <th>Action</th>
    </tr>

<?php
if(count($userdetails)) :
$cnt=1; 
foreach ($userdetails as $row) :
?>                    
					<tr>
					  <td><?php echo htmlentities($cnt);?></td>
					  <td><?php echo htmlentities($row->firstName)?></td>
					  <td><?php echo htmlentities($row->lastName)?></td>
					  <td><?php echo htmlentities($row->emailId)?></td>
					  <td><?php echo htmlentities($row->regDate)?></td>
                      <td><a href="<?php echo site_url('admin/Manage_users/updateprofile/').$row->id;?>">Edit</a>
                        <a href="<?php echo site_url('admin/Manage_Users/deleteuser/').$row->id;?>">Delete</td>
					  </td>
					</tr>
 <?php 
$cnt++;
endforeach;
else : ?>

<tr>
<td colspan="6">No Record found</td>
</tr>
<?php
endif;
?>                
				</table>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </body>
</html>
