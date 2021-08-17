<?php
    require_once 'models/db_config.php';
	$name="";
	$err_name="";
	$hasError=false;
	$err_db="";
		

		
		function getAllCategories(){
			$query="select * from categories";
			$rs=get($query);
			return $rs;
		}
		
		
		
	
	
?>