<?php include 'main_header.php';?>
<?php require_once "../controllers/userController.php"; ?>
<!--login starts -->
<div class="center-login">
	<h1 class="text text-center">Login</h1>
	<form action="" class="form-horizontal form-material" method="post">
		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" name = "username" class="form-control">
			<?php echo $err_uname; ?>
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" name = "password" class="form-control">
			<?php echo $err_pass; ?>
		</div>
		<div class="form-group text-center">
			
			<input type="submit" name = "login" class="btn btn-danger" value="Login" class="form-control">
		</div>
		<div class="form-group text-center">
			
			<a href="signup.php" >Not registered yet? Sign Up</a>
		</div>
</div>

<!--login ends -->
<?php include 'main_footer.php';?>