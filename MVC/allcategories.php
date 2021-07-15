<?php
    include 'header.php';
    include 'controllers/CategoryController.php';
	$categories=getAllCategories();
	
    
?>
<html>
	<head></head>
	<h3>All Categories</h3>
	<table>
	<thead>
	    <th>Sl#</th>
		<th>Name</th>
		<th>Product Count</th>
		<th></th>
		<th></th>
	</thead>
	<tbody>
	<?php 
	$i = 1;
	foreach($categories as $c){
		echo "<tr>";
		  echo "<td>$i</td>";
		  echo "<td>".$c["name"]."</td>";
		  echo '<td><a href="Edit_Category.php?id='.$c["id"].'">Edit</a></td>';
		  echo "<td>Delete</td>";
		  echo "</tr>";
		  $i++;
	}
	include 'footer.php';
	?>
	</tbody>
	</table>
	</body>
</html>