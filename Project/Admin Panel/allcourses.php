<?php
   include 'admin_header.php';
    require_once 'controllers/CourseController.php';
	$courses=getCourses();
	
    
?>
<html>
<head>
	    <link rel="stylesheet" href="styles/mystyle.css">
</head>
<body>

<h1>All Courses</h1>


<fieldset>

	
	<table border="1">
	<thead>
	    <th>Sl#</th>
		<th>Name</th>
		<th>Category</th>
		<th>Duration </th>
		<th>Price</th>
		
		<th></th>
		<th></th>
	</thead>
	<tbody>
	<?php 
	$i = 1;
	foreach($courses as $c){
		echo "<tr>";
		  echo "<td>$i</td>";
		  echo "<td>".$c["name"]."</td>";
		  echo "<td>".$c["ca_name"]."</td>";
		   echo "<td>".$c["duration"]."</td>";
		    echo "<td>".$c["price"]."</td>";
			  
	    
		  
		  echo '<td><a href="edit_course.php?id='.$c["id"].'">Edit</a></td>';
		  echo '<td><a href="delete_course.php?id='.$c["id"].'">Delete</a></td>';
		 
		  echo "</tr>";
		  $i++;
	}

	
	?>
	</tbody>
	</fieldset>
	</table>
	</div>
	</body>
	
</html>