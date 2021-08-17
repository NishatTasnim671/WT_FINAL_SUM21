<?php
   
    require_once 'controllers/UserController.php';
	$users=getUsers();
	
    
?>
<html>
<head></head>
<body>
	<h3>Search Student</h3>
	<input type="text"  placeholder="Search..." onkeyup="searchStudent(this)">
	<div id="student"></div>
	
	<table>
	<thead>
	    <th>SL</th>
		<th>Name</th>
		
		
		<th></th>
		<th></th>
	</thead>
	<tbody>
	<?php 
	$i = 1;
	foreach($users as $u){
		echo "<tr>";
		  echo "<td>$i</td>";
		  echo "<td>".$u["name"]."</td>";
		  
		  
			  
	    
		  
		  
		  echo '<td><a href="msg.php?id='.$u["id"].'">Message</a></td>';
         
		  echo "</tr>";
		  $i++;
	}
	
	?>
	</tbody>
	</table>
	<script src="js/student.js"></script>
	</body>
	
</html>