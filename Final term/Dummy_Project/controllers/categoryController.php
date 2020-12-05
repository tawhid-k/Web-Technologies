<?php 
    //Requiring database file causing error
    function get_categories() {
      $q = "select * from category";
      $data = getResult($q);
      return $data;
    }
?>