<?php
    require_once 'controller/userController.php';
    $results = getStudentData();
?>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<html>
<head>
	<title>Student Information</title>
</head>
<body>
    	<table>
    		<tr> 
              <td align="center">
              	<b> Name </b>
              </td>
              <td align="center">
              	<b> ID </b>
              </td>
              <td align="center">
              	<b> Date of Birth </b>
              </td>
              <td align="center">
              	<b> Credit </b>
              </td>
              <td align="center">
              	<b> CGPA </b>
              </td>
              <td align="center">
              	<b> Department ID </b>
              </td>
              <td align="center">
              	<b> Edit student </b>
              </td>
              <td align="center">
              	<b> Delete student </b>
              </td>
    		</tr>
    		<?php
               foreach ($results as $i) {
               	  echo '<tr>
                  <td align="center"> '.$i["name"].' </td>
                  <td align="center"> '.$i["id"].' </td>
                  <td align="center"> '.$i["dob"].' </td>
                  <td align="center"> '.$i["credit"].' </td>
                  <td align="center"> '.$i["cgpa"].' </td>
                  <td align="center"> '.$i["dept_id"].' </td>
                  <td align="center"> <a href="edit_student.php? id='.$i["id"].'"> Edit </a> </td>
                  <td align="center"> <a href="delete_student.php? id='.$i["id"].'"> Delete </a> </td>
               	  </tr>';
               }
    		?>
    	</table>
</body>
</html>