
<?php
   include 'controllers/ProductController.php';
   $key=$_GET["key"];
   $products=searchProduct($key);
   if(count($products)>0){
	   foreach ($products as $p){
		   echo "<p>".$p["name"]."</p>";
	   }
   }
?>   