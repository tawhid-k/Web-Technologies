<?php 
    include 'admin_header.php';
    require_once '../controllers/productController.php';
    require_once '../controllers/categoryController.php';
    $item_types = get_categories();
?>

<div class="center">
	<form action="" class="form-horizontal form-material" enctype="multipart/form-data" method="post">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="text" name="name" class="form-control">
			<?php echo $err_name; ?>
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
			<?php echo $err_cid; ?>
		</div>
		<div class="form-group">
			<h4 class="text">Price:</h4> 
			<input name="price" type="text" class="form-control">
			<?php echo $err_price; ?>
		</div>
		<div class="form-group">
			<h4 class="text">Quantity:</h4> 
			<input name="qty" type="text" class="form-control">
			<?php echo $err_qty; ?>
		</div>
		<div class="form-group">
			<h4 class="text">Description:</h4> 
			<textarea name="desc" type="text" class="form-control"></textarea>
			<?php echo $err_desc; ?>
		</div>
		<div class="form-group">
			<h4 class="text">Image</h4> 
			<input name="image" type="file" class="form-control">
			<?php echo $err_img; ?>
		</div>
		<div class="form-group text-center">
			
			<input name="add_product" type="submit" class="btn btn-success" value="Add Product" class="form-control">
		</div>
	</form>
</div>
<?php include 'admin_footer.php';?>
