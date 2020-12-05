<?php
    require_once "../models/database.php";
    $err_name = "";
    $err_uname = "";
    $err_email = "";
    $err_pass = "";
    $has_error = false;
    $n = ""; $un = ""; $m = ""; $p = "";
    if (isset($_POST["login"])) {
       if (empty($_POST["username"])) {
       	 $err_uname = "reqired*";
         $has_error = true;
       }
       if (empty($_POST["password"])) {
       	 $err_pass = "required*";
         $has_error = true;
       }
       if ($has_error == false) {
         if (isUser($_POST["username"], $_POST["password"])) {
          header("Location: ../views/dashboard.php");
         }
         else echo "Wrong username or password";
       }
    }
    if (isset($_POST["sign_up"])) {
      if (empty($_POST["name"])) {
      	$has_error = true;
      	$err_name = "required*";
      }
      else $n = $_POST["name"];
      if (empty($_POST["username"])) {
      	$has_error = true;
      	$err_uname = "required*";
      }
      else $un = $_POST["username"];
      if (empty($_POST["mail"])) {
      	$has_error = true;
      	$err_email = "required*";
      }
      else $m = $_POST["mail"];
      if (empty($_POST["password"])) {
      	$has_error = true;
      	$err_pass = "required*";
      }
      else $p = $_POST["password"];
      if ($has_error == false) {
	       addUser($n, $un, $m, $p);
	  }
    }
    function addUser ($n, $un, $m, $p) {
      $p = md5($p);
      $q = "insert into users values ('$n', '$un', '$m', '$p')";
      runQuery($q);
      header("Location: ../views/login.php");
	}
   function isUser ($u, $p) {
      $p = md5($p);
      $q = "select * from users where username = '$u' and password = '$p'";
      $data = getResult($q);
      if (count($data) > 0) return true;
      else return false;
   }
?>