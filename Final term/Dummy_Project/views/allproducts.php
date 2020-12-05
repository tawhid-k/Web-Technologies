<?php 
    include 'admin_header.php';
    require_once '../controllers/productController.php';
    $results = get_all_products();
?>
<!--All Products starts -->

<div class="center">
	<h3 class="text">All Products</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>Category </th>
			<th> Price</th>
			<th> Quantity</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
               foreach ($results as $i) {
               	  echo "<tr>";
               	  echo "<td>" . $i["id"] . "</td>";
               	  echo "<td>" . $i["name"] . "</td>";
               	  echo "<td>" . $i["category_id"] . "</td>";
               	  echo "<td>" . $i["price"] . "</td>";
               	  echo "<td>" . $i["quantity"] . "</td>";
               	  echo "<td>" . $i["quantity"] . "</td>";
               	  echo "<td> <img src = '".$i["image"]."' width='100px' height='100px'> </td>";
               	  echo '<td><a href="editproduct.php? id='.$i["id"].'" class="btn btn-success">Edit</a></td>';
			      echo '<td><a class="btn btn-danger">Delete</td>';
               }
			?>
		</tbody>
	</table>
</div>
<!--Products ends -->
<?php include 'admin_footer.php';?>