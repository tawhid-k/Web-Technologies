<?php
   $err_msg1 = "";
   $err_msg2 = "";
   if (isset($_POST["submit"])) {
     $has_err = false;
     if (empty($_POST["uname"])) {
       $err_msg1 = "Username required*";
       $has_err = true;
     }
     if (empty($_POST["pass"])) {
       $err_msg2 = "Password required";
       $has_err = true;
     }
     if (!$has_err) {
       $file = simplexml_load_file("php files/data.xml");
       $file = $file->user;
       $is_success = false;
       foreach ($file as $i) {
       	 //echo $i->name . "  " . $_POST["uname"] . "<br>" . $i->pass . "  " . $_POST["pass"] . "<br>";
       	 if (($i->name == $_POST["uname"]) && ($i->pass == $_POST["pass"])) {
       	   $is_success = true;
       	 }
       }
       if ($is_success) {
       	 echo "This is successful<br>";
       	 header("Location: dashboard.php");
       }
       else echo "Wrong username or password!!!";
     } 
   }
?>