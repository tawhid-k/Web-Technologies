<?php 
  require_once 'models/database.php';
  if (isset($_POST["login"])) {
  	 if (isUser($_POST["username"], $_POST["pass"])) {
  	 	header("Location: dashboard.php");
  	 }
  	 else echo "Wrong username or password";
  }
  if (isset($_POS["register"])) {
    echo "Hello World";
  }
  function isUser ($u, $p) {
      $p = md5($p);
      $q = "select * from users where username = '$u' and password = '$p'";
      $data = getResult($q);
      if (count($data) > 0) return true;
      else return false;
   }
?>