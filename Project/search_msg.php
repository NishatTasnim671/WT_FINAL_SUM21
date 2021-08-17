<?php
   require_once 'controllers/UserController.php';
   require_once 'controllers/MsgController.php';
   $key=$_GET["key"];
   $messages=searchMsg($key);
   if(count($messages)>0){
	   foreach ($messages as $m){
		   echo "<a href='see_insmsg.php?id=".$m["id"]."'>".$m["receiver"]."</a><br>";
		}
		   
   }
   
		   
   
   
?>   