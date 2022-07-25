

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
		<h2><span class="las la-accusoft"></span>User Panel</h2>
	</div>


	<div class="sidebar-menu">
		<ul>
		 	<li> 
				<a href="user_home.php" ><span class="las la-igloo"></span>
					<span>Dashboard</span></a>

					
			</li>


			<li> 
				<a href="user_sendingform.php" ><span class="las la-envelope"></span>
					<span>Sending Form</span></a>

					
			</li>



            
			<li> 
				<a href="user_approvalform.php" ><span class="las la-check-square-o"></span>
					<span>Approval Form</span></a>

					
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
				 
				 <div>
					<h4> <?php echo $_SESSION['ename']; ?></h4>
                            <a href="user_logout.php">Logout</a>
				 </div>
			</div>
			
		
		
	   </header>
<br>
<br>
		<main>






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
			 <h4>Approval Documents
				
			 </h4>
		 </div>
		 <div class="card-body">

			 <table class="table table-bordered table-striped">
				 <thead>
					 <tr>
						 <th>Name</th>
						 <th>Date</th>
						 <th>Department</th>
						 <th>Transaction</th>
						 <th>File</th>
						 <th>Send to</th>	
						 <th>Action</th>
					 
					 </tr>
				 </thead>
				 
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
     header("Location: user_index.php");
     exit();
}
 ?>