<?php
  if (!isset($_COOKIE["username"])) {
    header("Location: login.php");
  }
?>

<style>
	table, tr, td {
		border: 1px solid black;
		padding: 5px;
	}
</style>

<html>
	<title>Dashboard</title>
	<body>
		<?php
               $books = simplexml_load_file("books.xml");
               if (count($books) == 0) {
               	 echo "<h1>No books to show</h1> " . strval(count($books->name));
               }
               else { ?>
			            <table style="">
						<tr>
							<td>
								<a href="addBook.php"> Add a new book </a>
							</td>
						</tr>
						<tr style="text-transform: uppercase; text-decoration: underline; color: green;">
							<td> sr no. </td>
							<td> name </td>
							<td> publisher </td>
							<td> isbn </td>
							<td> price </td>
							<td> image </td>
							<td> delete </td>
						</tr>
                        
                        <?php
                            $number = 0;
                            foreach ($books as $i) {
                            	$number++;
                              echo "
                                   <tr>
                                     <td>
                                         $number
                                     </td>
                                      <td> 
                                          $i->name
                                      </td>
                                      <td> 
                                          $i->publisher
                                      </td>
                                      <td> 
                                          $i->isbn
                                      </td>
                                      <td> 
                                          $i->price
                                      </td>
                                      <td> 
                                         <img src = '$i->image' >";
                                      echo "</td>
                                      <td> 
                                          <img src='resources/delete.png'>";
                                   echo "   </td>
                                   </tr>
                            	";
                            }
                        ?>

					</table>
               <?php }
			?> 

	</body>
</html>