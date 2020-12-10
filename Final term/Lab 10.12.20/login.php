<html>
<head>
	<title>Login Page</title>
	<?php require_once 'controller/userController.php'; ?>
</head>
<body>
	 <form action=""  method="post">
	 	 <table>
	 	 	<tr>
	 	 		<td>
	 	 			Username:
	 	 		</td>
	 	 		<td>
	 	 			<input type="text" name="username">
	 	 		</td>
	 	 	</tr>
	 	 	<tr>
	 	 		<td>
	 	 			Password:
	 	 		</td>
	 	 		<td>
	 	 			<input type="Password" name="pass">
	 	 		</td>
	 	 	</tr>
	 	 	<tr>
	 	 		<td colspan="2" align="center">
	 	 			<input type="submit" name="login" value="login">
	 	 		</td>
	 	 </table>
	 </form>
</body>
</html>