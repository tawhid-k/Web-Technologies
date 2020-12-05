<?php 
   include 'admin_header.php';
   require_once '../controllers/productController.php';
   require_once '../controllers/categoryController.php';
   $item_types = get_categories();
   $myID = $_GET["id"];
?>
<div class="center">
<table>
	<td>
		<img class="item-image" src="https://m.media-amazon.com/images/I/41n0GIKkW8L._AC_SR160,160_.jpg"></img>
	</td>
	<td>
		<form action="" class="form-horizontal form-material" enctype="multipart/form-data" method="post">
			<div class="form-group">
				<h4 class="text">Name:</h4> 
				<input name="name" type="text" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">Category:</h4> 
				<select name="cat" class="form-control">
				<option selected="selected" disabled="disabled">Choose</option>
				<?php 
                    foreach ($item_types as $i) {
                      echo '<option> '.$i["name"].' </option>';
                    }
				?>
			</select>
			</div>
			<div class="form-group">
				<h4 class="text">Price:</h4> 
				<input name="price" type="text" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">Quantity:</h4> 
				<input name="qty" type="text" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">Description:</h4> 
				<textarea name="desc" type="text" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<h4 class="text">Image</h4> 
				<input name="image" type="file" class="form-control">
			</div>
			<div class="form-group text-center">
				
				<input name="edit_product" type="submit" class="btn btn-success" value="Edit Product" class="form-control">
			</div>
		</form>
	</td>
</table>				
</div>
<?php include 'admin_footer.php';?>