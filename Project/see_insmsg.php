<?php
   
    require_once 'controllers/MsgController.php';
	$insmsgs=getInsmsgs();
	
    
?>
<html>
<head>
	    <link rel="stylesheet" href="styles/mystyle.css">
</head>
<body>
<div class="header sticky">
<h1>All Messages</h1>
</div>

<div>
<fieldset>
<legend>All messages</legend>
	
	
	<table border="1">
	<thead>
	    <th>Sl#</th>
		<th>Receiver</th>
		<th>Message</th>
		<th>Sender </th>
	
		
		
	</thead>
	<tbody>
	<?php 
	$i = 1;
	foreach($insmsgs as $m){
		echo "<tr>";
		  echo "<td>$i</td>";
		  echo "<td>".$m["receiver"]."</td>";
		  echo "<td>".$m["msg"]."</td>";
		   echo "<td>".$m["sender"]."</td>";
		   
			  
	    
		 
		 
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
