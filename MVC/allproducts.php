<?php
    
    require_once 'controllers/ProductController.php';
	$products=getProducts();
	
    
?>
<html>
	<head></head>
	<h3>All Products</h3>
	<input type="text" placeholder="Search" onkeyup="searchProduct(this)">
	<div id="suggestion"></div>
	<table>
	<thead>
	    <th>Sl#</th>
		<th>image</th>
		<th>Name</th>
		<th>Category </th>
		<th> Price</th>
		<th> Quantity</th>
		<th></th>
		<th></th>
	</thead>
	<tbody>
	<?php 
	$i = 1;
	foreach($products as $p){
		echo "<tr>";
		  echo "<td>$i</td>";
		  echo "<td><img width='80px' height='100px' src='".$p["img"]."'></td>";
		  echo "<td>".$p["name"]."</td>";
		  echo "<td>".$p["c_name"]."</td>";
		  echo "<td>".$p["price"]."</td>";
		  echo "<td>".$p["qty"]."</td>";
		  echo '<td><a href="Edit_Product.php?id='.$p["id"].'" >Edit</a></td>';
		  echo "<td>Delete</td>";
		  echo "</tr>";
		  $i++;
	}
	
	?>
	</tbody>
	</table>
	<script src="products.js"></script>
	</body>
</html>