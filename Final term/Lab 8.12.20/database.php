<?php
   function runQuery($q) {
   	  $username = "root";
   	  $servername = "localhost";
   	  $password = "";
   	  $databse = "projectdemo";
   	  $con = mysqli_connect($servername, $username, $password, $database);
   	  if (!$con) {
   	  	die("Failed to connect to the server" . mysqli_connect_error());
   	  }
   }
   function getResult($q) {
   	  $username = "root";
   	  $servername = "localhost";
   	  $password = "";
   	  $database = "projectdemo";
   	  $con = mysqli_connect($servername, $username, $password, $database);
      if (!$con) {
      	 die("Failed to connect to the server" . mysqli_connect_error());
      }
   	  return mysqli_query($con, $q);
   }
?>