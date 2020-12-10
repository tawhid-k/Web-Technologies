<?php
   require_once 'controller/userController.php';
?>

<html>
<head>
	<title>Add Student</title>
</head>
<body>
     <form action="" onsubmit="return validate()" method="post">
	 	 <table>
	 	 	<tr>
	 	 		<td>
	 	 			Name:
	 	 		</td>
	 	 		<td>
	 	 			<input type="text" id="name" name="name">
	 	 			<span id = "err_name"> </span>
	 	 		</td>
	 	 	</tr>
	 	 	<tr>
	 	 		<td>
	 	 			ID:
	 	 		</td>
	 	 		<td>
	 	 			<input type="text" id="id" name="id">
	 	 			<span id = "err_id"> </span>
	 	 		</td>
	 	 	</tr>
	 	 	<tr>
	 	 		<td>
	 	 			Date of Birth:
	 	 		</td>
	 	 		<td>
	 	 			<input type="text" id="dob" name="dob">
	 	 			<span id = "err_dob"> </span>
	 	 		</td>
	 	 	</tr>
	 	 	<tr>
	 	 		<td>
	 	 			Credit:
	 	 		</td>
	 	 		<td>
	 	 			<input type="text" id="credit" name="credit">
	 	 			<span id = "err_credit"> </span>
	 	 		</td>
	 	 	</tr>
	 	 	<tr>
	 	 		<td>
	 	 			CGPA:
	 	 		</td>
	 	 		<td>
	 	 			<input type="text" id="cgpa" name="cgpa">
	 	 			<span id = "err_cgpa"> </span>
	 	 		</td>
	 	 	</tr>
	 	 	<tr>
	 	 		<td>
	 	 			Department id:
	 	 		</td>
	 	 		<td>
	 	 			<input type="text" id="did" name="did">
	 	 			<span id = "err_did"> </span>
	 	 		</td>
	 	 	</tr>
	 	 	<tr>
	 	 		<td colspan="2" align="center">
	 	 			<input type="submit" name="register" value="register">
	 	 		</td>
	 	 	</tr>
	 	 </table>
	 </form>
	 <script src = "validate_registration.js"> </script>
</body>
</html>