<?php 
  require_once 'database.php';
  if (isset($_POST["register"])) {
  	 addUser($_POST["name"], $_POST["uname"], $_POST["mail"], $_POST["phone"], $_POST["pass"]);
  	 header("Location: index.php");
  }
  if (isset($_POST["login"])) {
  	 if (isUser($_POST["username"], $_POST["pass"])) {
  	 	header("Location: dashboard.php");
  	 }
  	 else echo "Wrong username or password";
  }
  function addUser ($n, $un, $m, $phn, $p) {
      $p = md5($p);
      $q = "insert into users values ('$n', '$un', '$m', $phn,'$p')";
      runQuery($q);
	}
   function isUser ($u, $p) {
      $p = md5($p);
      $q = "select * from users where username = '$u' and password = '$p'";
      $data = getResult($q);
      if (count($data) > 0) return true;
      else return false;
   }
?>