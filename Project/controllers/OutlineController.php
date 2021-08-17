<?php
    require_once 'models/db_config.php';
	$c_id="";
	$err_c_id="";
	$desc="";
	$err_desc="";
	$goal="";
	$err_goal="";
	$assess="";
	$err_assess="";
	$target="";
	$err_target="";
	$mat="";
	$err_mat="";
	
	$hasError=false;
	$err_db="";
	
	
	if(isset($_POST["add_outline"])){
		if(empty($_POST["c_id"])){
			$hasError = true;
			$err_c_id="Course Required";
		}
		
		else{
			$c_id =$_POST["c_id"];
	
		}
		
		if(empty($_POST["desc"])){
			$hasError = true;
			$err_desc="Description Required";
		}
		
		else{
			$desc =$_POST["desc"];
	
		}
		if(empty($_POST["goal"])){
			$hasError = true;
			$err_goal="Goal Required";
		}
		
		else{
			$goal =$_POST["goal"];
	
		}
		if(empty($_POST["assess"])){
			$hasError = true;
			$err_assess="Assessment Required";
		}
		
		else{
			$assess =$_POST["assess"];
	
		}
		
		
		
	
		if(!$hasError){
		
		
		$rs = insertOutline($c_id,$desc,$goal,$assess);
		if ($rs === true){
			header("Location: alloutlines.php");
		}
		$err_db = $rs;
	}
		}
		elseif(isset($_POST["edit_outline"])){
	     if(empty($_POST["c_id"])){
			$hasError = true;
			$err_c_id="Course Required";
		}
		
		else{
			$c_id =$_POST["c_id"];
	
		}
		if(empty($_POST["desc"])){
			$hasError = true;
			$err_desc="Description Required";
		}
		
		else{
			$desc =$_POST["desc"];
	
		}
		if(empty($_POST["goal"])){
			$hasError = true;
			$err_goal="Goal Required";
		}
		
		else{
			$goal =$_POST["goal"];
	
		}
		if(empty($_POST["assess"])){
			$hasError = true;
			$err_assess="Assessment Required";
		}
		
		else{
			$assess =$_POST["assess"];
	
		}
		
		
		
		
		if(!$hasError){
			
		$rs = editOutline($c_id,$desc,$goal,$assess,$_POST["id"]);
		if($rs === true){
			header("Location: alloutlines.php");
		}
		$err_db = $rs;
		}
		}
		elseif(isset($_POST["delete_outline"])){
	     
			
		$rs = deleteOutline($_POST["id"]);
		if($rs === true){
			header("Location: alloutlines.php");
		}
		$err_db = $rs;
		}
		
		elseif(isset($_POST["upload_mat"])){
			if(empty($_POST["c_id"])){
			$hasError = true;
			$err_c_id="Course Required";
		}
		
		else{
			$c_id =$_POST["c_id"];
	
		}
		if(!$hasError){
		
		$fileType = strtolower(pathinfo(basename($_FILES["mat"]["name"]),PATHINFO_EXTENSION));
		$target = "storage\course_material/".uniqid().".$fileType";
		move_uploaded_file($_FILES["mat"]["tmp_name"],$target);
		
		$rs = insertMat($c_id,$target);
		if ($rs === true){
			header("Location: ins_dashboard.php");
		}
		$err_db = $rs;
	}
		}
	    
		 
		
	
	
	
   
	
	function insertOutline($c_id,$desc,$goal,$assess){
		$query = "insert into outlines values (NULL,$c_id,'$desc','$goal','$assess')";
		return execute($query);
	}
	function getOutlines(){
		$query ="select o.*,c.name as 'c_name' from outlines o left join courses c on o.c_id = c.id";
		$rs = get($query);
		return $rs;
	}
	function getOutline($id){
		$query = "select * from outlines where id = $id";
		$rs = get($query);
		return $rs[0];
		
	}
	
	
	
	function editOutline($c_id,$desc,$goal,$assess,$id){
		$query ="update outlines set c_id=$c_id,description='$desc',goal='$goal',assessment='assess',description='$desc' where id = $id";
		return execute($query);
	}
	function deleteOutline($id){
		$query ="delete from outlines where id = $id";
		return execute($query);
	}
	function searchOutline($key){
		$query = "select o.id,c.name from outlines o left join courses c on o.c_id = c.id where c.name like '%$key%'";
		
		$rs = get($query);
		return $rs;
	}
	function insertMat($c_id,$mat){
		$query = "insert into materials values (NULL,$c_id,'$mat')";
		return execute($query);
	}
	function getMats(){
		$query ="select m.*,c.name as 'c_name' from materials m left join courses c on m.c_id = c.id";
		$rs = get($query);
		return $rs;
	}
		
	
	
?>	
	