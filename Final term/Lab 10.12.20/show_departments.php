<?php
    require_once 'controller/userController.php';
    $results = getDepartmentData();
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
              	<b> ID </b>
              </td>
              <td align="center">
              	<b> Name </b>
              </td>
    		</tr>
    		<?php
               foreach ($results as $i) {
               	  echo '<tr>
                  <td align="center"> '.$i["id"].' </td>
                  <td align="center"> '.$i["name"].' </td>
               	  </tr>';
               }
    		?>
    	</table>
</body>
</html>