<?php
    require_once '../Controllers/userController.php';
    include 'main_header.php'
 ;?>


<!--sign up starts -->
<div class="center-login">
	<h1 class="text text-center">Sign Up</h1>
	<form action = "" class="form-horizontal form-material" method = "post">
		<div class="form-group">
			<h4 class="text">Name</h4> 
			<input type="text" name = "name" class="form-control">
			<?php echo $err_name; ?>
		</div>
		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" name = "username"  class="form-control">
			<?php echo $err_uname; ?>
		</div>
		<div class="form-group">
			<h4 class="text">Email</h4> 
			<input type="text" name = "mail" class="form-control">
			<?php echo $err_email; ?>
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" name = "password" class="form-control">
			<?php echo $err_pass; ?>
		</div>
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-success" name = "sign_up" value="Sign Up" class="form-control">
		</div>
</div>

<!--sign up ends -->
<?php include 'main_footer.php';?>