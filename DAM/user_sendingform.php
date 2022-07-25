

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



		<?php
$server="localhost";
$userid ="root";
$Password = "";
$myDB = "data";$con = mysqli_connect($server,$userid,$Password,$myDB);if (mysqli_connect_errno()) {

}

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
			 <h4>Transaction Form
				
			 </h4>
		 </div>
		 <div class="card-body">

			 <table class="table table-bordered table-striped">
				 <thead>
					 <tr>
		  <label for="">Name:</label>
          <input type="text" name="idemployee"  class="form-control">
          <label for="">Date:</label>
          <input type="date" name="ename"  class="form-control">
          <label for="">Department:</label>
          <input type="text" name="eaccount"  class="form-control">
          <label for="">Transaction Type:</label>
          <input type="text" name="uname"  class="form-control">
          <label for="">Upload File:</label>
          <input type="file" name="password"  class="form-control">
		  <br>
          <label for="">Sending To:</label>
		  <br>
      	<?php
		echo'<select>
			<option>Select</option>';
		
			$sqli="SELECT * FROM tb_data";
			$result = mysqli_query($con, $sqli);
			while ($row = mysqli_fetch_array($result)){
				echo '<option>'.$row['eaccount'].'</option>';
			}
			?>
       
      </select>

 
<br>
<br>
		  <div class="mb-3">
                                <button type="submit"  class="btn btn-primary">Send</button>
                            </div>

					 
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