<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="user_login.php" method="post">
	

     	<h2>Document Approval Management System</h2>
     	<?php if (isset($_GET['error'])) { ?>       
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>  

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>