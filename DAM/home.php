

<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['uname'])) {

	require 'db_conn.php';
 ?>


 
<!DOCTYPE html>
<html>
<head>
     
 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


<title>HOME</title>

	<link rel="stylesheet" href="https://maxst.icons8.com/vue
	-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" href="admin.css">



</head>

</head>
<body>


<input type="checkbox" id="nav-toggle">
<div class="sidebar">
	<div class="sidebar-brand">
		<h2><span class="las la-accusoft"></span>Admin Panel</h2>
	</div>


	<div class="sidebar-menu">
		<ul>
			<li>
				<a href="home.php" ><span class="las la-igloo"></span>
					<span>Dashboard</span></a>

					
			</li>

			



		</ul>
	</div>
</div>

  <div class="main-content">
	   <header>
		<h2>
				
			<label for="nav-toggle">
				<span class="las la-bars"></span>
			</label>

			Dashboard
			</h2>
			<div class="search-wrapper">
				<span class="las la-search"></span>
				<input type="search" placeholder="Search here" />
			</div>
			

			<div class="user-wrapper">
				 <img src="img/2.jpg" width="30px" height="30px" alt="">
				 <div>
				<h4> <?php echo $_SESSION['name']; ?></h4>
                            <a href="logout.php">Logout</a>
				 </div>
			</div>
			
		
		
	   </header>
<br>
<br>
		<main>

		<?php
 
    require 'dbcon.php';
?>






		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<div class="container mt-4">

<?php include('message.php'); ?>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4>Employee Details
					<a href="employee-create.php" class="btn btn-primary float-end">Add Employee</a>
				</h4>
			</div>
			<div class="card-body">

				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Id</th>
							<th>Employee Name</th>
							<th>Email Account</th>
							<th>User Name</th>
							<th>Password</th>
							<th>Position</th>
							<th>Department</th>
							
							<th>Action</th>
						
						</tr>
					</thead>
					<tbody>
						<?php 
							$query = "SELECT * FROM tb_data";
							$query_run = mysqli_query($con, $query);

							if(mysqli_num_rows($query_run) > 0)
							{
								foreach($query_run as $employee)
								{
									?>
									<tr>
										  <td><?= $employee['id']; ?></td>
										<td><?= $employee['ename']; ?></td>
										<td><?= $employee['eaccount']; ?></td>
										<td><?= $employee['uname']; ?></td>
										<td><?= $employee['password']; ?></td>
										<td><?= $employee['position']; ?></td>
										<td><?= $employee['department']; ?></td>
									   
									  
										<td>
											<a href="employee-view.php?id=<?= $employee['id']; ?>" class="btn btn-info btn-sm">View</a>
											<a href="employee-edit.php?id=<?= $employee['id']; ?>" class="btn btn-success btn-sm">Edit</a>
											<form action="code.php" method="POST" class="d-inline">
											<button type="submit" name="delete_employee" value="<?=$employee['id'];?>" class="btn btn-danger btn-sm">Delete</button>
											</form>
										</td>
									</tr>
									<?php
								}
							}
							else
							{
								echo "<h5> No Record Found </h5>";
							}
						?>
						
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

















	





	</main>






	   
  </div>
</div>

</body>
</html>


<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>