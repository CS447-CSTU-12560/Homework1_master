<?php
session_start();

  require "query/details.php";

  $product = new product();
	 header("Location: collection.php");
   $product->deleteProduct($_GET["name"]);
?>