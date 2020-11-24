<?php
   $username = "root";
   $servername = "localhost";
   $password = "";
   $db_name = "projectdemo";

   $con = mysqli_connect($servername, $username, $password, $db_name);
   if (!$con) {
   	 die("Faled to connect to the local server". mysqli_connect_error());
   }
   if (isset($_POST["submit"])) {
   	 if (!empty($_POST["uname"]) && !empty($_POST["age"]) && !empty($_POST["pass"])) {
   	 	$_POST["pass"] = md5($_POST["pass"]);
   	 	$query = "insert into registration values ('". $_POST["uname"] ."'," . $_POST["age"] . ",'" . $_POST["pass"] ."')";
   	 	mysqli_query($con, $query);
   	 }
   	 header("Location: showRegData.php");
   }
?>

<html>
<head>
	<title>Sample registration</title>
</head>
<body>
    <form action="" method="post">
    	<table>
    		<tr>
    			<td>
    				Username:
    			</td>
    			<td>
    				<input type="text" name="uname">
    			</td>
    		</tr>
    		<tr>
    			<td>
    				Age:
    			</td>
    			<td>
    				<input type="text" name="age">
    			</td>
    		</tr>
    		<tr>
    			<td>
    				Password:
    			</td>
    			<td>
    				<input type="text" name="pass">
    			</td>
    		</tr>
    		<tr>
    			<td colspan="2" align="right">
    				<input type="submit" name="submit" value="Confirm">
    			</td>
    		</tr>
    	</table>
    </form>
</body>
</html>