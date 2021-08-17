<?php
   require_once 'controllers/UserController.php';
   $key=$_GET["key"];
   $students=searchStudent($key);
   if(count($students)>0){
	   foreach ($students as $s){
		   echo "<a href='msg.php?id=".$s["id"]."'>".$s["name"]."</a><br>";
		}
		   
   }
   
		   
   
   
?>   