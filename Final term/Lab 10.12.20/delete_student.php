<?php
   require_once 'controller/userController.php'; 
   $id = $_GET["id"];
   deleteStudent($id);
   header("Location: show_students.php");
?>
