<?php
   
    require_once 'controllers/CourseController.php';
	$courses=getCourses();
	
    
?>
<html>
<head>
	    <link rel="stylesheet" href="styles/mystyle.css">
</head>
<body>
<div class="header sticky">
<h1>All Courses</h1>
</div>
<div class="topnav">
<a href="add_outline.php">Add Outline</a>
<a href="ins_dashboard.php">Dashboard</a>
<a href="logout.php">logout</a>
</div>
<div>
<fieldset>
<legend>All courses</legend>
	<input type="text"  placeholder="Search..." onkeyup="searchCourse(this)">
	<div id="course"></div>
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
		  
		 
		  echo "</tr>";
		  $i++;
	}

	
	?>
	</tbody>
	</fieldset>
	</table>
	</div>
	<script src="js/course.js"></script>
	</body>
	<div class="footer">
<h1>Credit goes to Nishat</h1>
 </div>
	
</html>