<?php
   if (isset($_POST["submit"])) {
      $file = simplexml_load_file("books.xml");
      $child = $file->addChild("book");
      $child->addChild("name", $_POST["name"]);
      $child->addChild("publisher", $_POST["publisher"]);
      $child->addChild("isbn", $_POST["isbn"]);
      $child->addChild("price", $_POST["price"]);
      $child->addChild("image", "resources/img.jpg");
      $child->addChild("cat", $_POST["category"]);
      $child->addChild("des", $_POST["description"]);
      $newFile = fopen("books.xml", "w");
      fwrite($newFile, $file->saveXML());
   }
?>
<html>
	<title>Add Book</title>
	<body>
		<form action="" method="post">
		<table style="background-color: lightgray; width: 200px;">
			<tr>
				<td>
					<img src="resources/book.jpg">
					<h1 align="center">Add a Book</h1>
		       </td>
	        </tr>
	        <tr>
	        	<td>
	        		Book Name
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		<input type="text" name="name">
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		Category
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		<select name="category">
	        			<option>Thrilling</option>
	        			<option>Science fiction</option>
	        			<option>Literature</option>
	        		</select>
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		Description
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		<textarea name="description"></textarea>
	        	</td>
	        </tr>
	         <tr>
	        	<td>
	        		Publisher
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		<input type="text" name="publisher">
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		Edition
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		<input type="text" name="edition">
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		ISBN
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		<input type="text" name="isbn">
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		pages
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		<input type="text" name="page">
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		price
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		<input type="text" name="price">
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		<input type="submit" name="submit">
	        	</td>
	        </tr>
		</table>
	</form>
	</body>
</html>