<?php 
  require_once 'models/database.php';
  if (isset($_POST["login"])) {
  	 if (isUser($_POST["username"], $_POST["pass"])) {
  	 	header("Location: dashboard.php");
  	 }
  	 else echo "Wrong username or password";
  }
  if (isset($_POST["change"])) {
     $id = $_GET["id"];
     updateStudent($_POST["name"], $id, $_POST["dob"], $_POST["credit"], $_POST["cgpa"], $_POST["did"]);
     header("Location: show_students.php");
  }
  if (isset($_POST["register"])) {
     addStudent($_POST["name"], $_POST["id"], $_POST["dob"], $_POST["credit"], $_POST["cgpa"], $_POST["did"]);
     header("Location: dashboard.php");
  }
  function getStudentData() {
     return getResult("select * from student");
  }
  function getDepartmentData() {
     return getResult("select * from department");
  }
  function isUser ($u, $p) {
      $p = md5($p);
      $q = "select * from users where username = '$u' and password = '$p'";
      $data = getResult($q);
      if (count($data) > 0) return true;
      else return false;
  }
  function addStudent($n, $id, $dob, $c, $cg, $did) {
      runQuery("insert into student values('".$n."','".$id."','".$dob."',".$c.",".$cg.",".$did.")");
  }
  function updateStudent($n, $id, $dob, $c, $cg, $did) {
      runQuery("update student set name='$n',dob='$dob',credit=$c,cgpa=$cg,dept_id=$did where id='$id'");
  }
  function deleteStudent($id) {
      runQuery("delete from student where id = '$id'");
  }
?>