<?php
   require_once '../models/database.php';
   $err_name = "";
   $err_price = "";
   $err_qty = "";
   $err_desc = "";
   $err_img = "";
   $err_cid = "";
   $has_error = false;
   if (isset($_POST["add_product"])) {
   	  if (empty($_POST["name"])) {
        $err_name = "required*";
        $has_error = true;
      }
      if (empty($_POST["price"])) {
        $err_price = "required*";
        $has_error = true;
      }
      if (empty($_POST["qty"])) {
        $err_qty = "required*";
        $has_error = true;
      }
      if (empty($_POST["desc"])) {
        $err_desc = "required*";
        $has_error = true;
      }
      if (empty($_POST["cat"])) {
        $err_cid = "required*";
        $has_error = true;
      }
      if ($has_error == false) {
         $cid = getResult("select id from category where name = '".$_POST["cat"]."'");
         $cid = $cid[0]["id"];
   	  	 $filetype = strtolower(pathinfo(basename($_FILES["image"]["name"]), PATHINFO_EXTENSION));
          $file = "../storage/product_images/" . uniqid() . ".$filetype";
          move_uploaded_file($_FILES["image"]["tmp_name"], $file);
          add_product($_POST["name"],$_POST["price"],$_POST["qty"],$_POST["desc"],$file, $cid);
   	  }
   }
   if (isset($_POST["edit_product"])) {
      if (empty($_POST["name"])) {
        $err_name = "required*";
        $has_error = true;
      }
      if (empty($_POST["price"])) {
        $err_price = "required*";
        $has_error = true;
      }
      if (empty($_POST["qty"])) {
        $err_qty = "required*";
        $has_error = true;
      }
      if (empty($_POST["desc"])) {
        $err_desc = "required*";
        $has_error = true;
      }
      if (empty($_POST["cat"])) {
        $err_cid = "required*";
        $has_error = true;
      }
      if ($has_error == false) {
         $cid = getResult("select id from category where name = '".$_POST["cat"]."'");
         $cid = $cid[0]["id"];
         $filetype = strtolower(pathinfo(basename($_FILES["image"]["name"]), PATHINFO_EXTENSION));
          $file = "../storage/product_images/" . uniqid() . ".$filetype";
          move_uploaded_file($_FILES["image"]["tmp_name"], $file);
          edit_product($_POST["name"],$_POST["price"],$_POST["qty"],$_POST["desc"],$file, $cid);
      }
   }
   function add_product ($name, $price, $quantity, $description, $image, $cid) {
   	 //Unwanted error message
    //Warning: mysqli_num_rows() expects parameter 1 to be mysqli_result, bool given in C:\xampp\htdocs\PHP\Temp Project\models\database.php
     $q = "insert into products values (NULL, '$name', $price, $quantity, '$description', '$image', $cid)";
   	 getResult($q);
   }
   function get_all_products () {
      return getResult("select * from products");
   }
   function edit_product($name, $price, $quantity, $description, $image, $cid) {
      //UPDATE `products` SET `id`=[value-1],`name`=[value-2],`price`=[value-3],`quantity`=[value-4],`description`=[value-5],`image`=[value-6],`category_id`=[value-7] WHERE 1
     $q = "update products set name='$name',price=$price,quantity=$quantity,description='$description',image='$image',category_id=$cid where id=". $_GET["id"];
     runQuery($q);
   }
?>