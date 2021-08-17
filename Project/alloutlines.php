<?php
   
    require_once 'controllers/OutlineController.php';
	$outlines=getOutlines();
	
    
?>
<html>
	<head>
	<link rel="stylesheet" href="styles/mystyle.css">
	</head>
	<body>
<div class="header sticky">
<h1>All Outlines</h1>
</div>
<div class="topnav">
<a href="ins_dashboard.php">Go to dashboard</a>
<a href="logout.php">Log out</a>
</div>
	<div>
<fieldset>
<legend>All outlines</legend>
<input type="text"  placeholder="Search..." onkeyup="searchOutline(this)">
<div id="outline"></div>
	<table border="1">
	<thead>
	    <th>Sl#</th>
		<th>Course Name</th>
		<th>Description</th>
		<th> Goal</th>
		<th>Assessment Overview</th>
		<th></th>
		<th></th>
	</thead>
	<tbody>
	<?php 
	$i = 1;
	foreach($outlines as $o){
		echo "<tr>";
		  echo "<td>$i</td>";
		  echo "<td>".$o["c_name"]."</td>";
		  echo "<td>".$o["description"]."</td>";
		  echo "<td>".$o["goal"]."</td>";
		  echo "<td>".$o["assessment"]."</td>";
		  echo '<td><a href="edit_outline.php?id='.$o["id"].'">Edit</a></td>';
		  echo '<td><a href="delete_outline.php?id='.$o["id"].'">Delete</a></td>';
		  echo "</tr>";
		  $i++;
	}

	?>
	</tbody>
	
	</table>
		<script src="js/outline.js"></script>
	</body>
</html>