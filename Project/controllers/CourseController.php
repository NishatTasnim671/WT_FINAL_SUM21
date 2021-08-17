<?php
    require_once 'models/db_config.php';
	$name="";
	$err_name="";
	$duration="";
	$err_duration="";
	$detail="";
	$err_detail="";
	$ca_id="";
	$err_ca_id="";
	$c_id="";
	$price="";
	$err_price="";
	
	$hasError=false;
	$err_db="";
	if(isset($_POST["add_course"])){
	
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Course Name Required";
		}
		else if(strlen($_POST["name"])<6){
        $hasError=true;
				 $err_pass="Name Must Be 6 Charachter Long";
		 }
		 
		
		else{
			$name =$_POST["name"];
	
		}
		
		if(empty($_POST["ca_id"])){
			$hasError = true;
			$err_ca_id="Course category Required";
		}
		
		else{
			$ca_id=$_POST["ca_id"];
	
		}
		if(empty($_POST["duration"])){
			$hasError = true;
			$err_duration="Duration Required";
		}
		
		else{
			$duration =$_POST["duration"];
	
		}
		
		if(empty($_POST["price"])){
			$hasError = true;
			$err_price="Course price Required";
		}
		
		else{
			$price=$_POST["price"];
	
		}
		
		
		if(!$hasError){
		
		$rs = insertCourse($name,$ca_id,$duration,$price);
		if ($rs === true){
			header("Location: allcourses.php");
		}
		$err_db = $rs;
	}
		}
		elseif(isset($_POST["edit_course"])){
	     //name
		
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Course Name Required";
		}
		
		else{
			$name =$_POST["name"];
	
		}
		if(empty($_POST["ca_id"])){
			$hasError = true;
			$err_ca_id="Course category Required";
		}
		
		else{
			$ca_id=$_POST["ca_id"];
	
		}
		if(empty($_POST["duration"])){
			$hasError = true;
			$err_duration="Duration Required";
		}
		
		else{
			$duration =$_POST["duration"];
	
		}
		if(empty($_POST["price"])){
			$hasError = true;
			$err_price="Course price Required";
		}
		
		else{
			$price=$_POST["price"];
	
		}
		
		
		if(!$hasError){
			
		$rs = editCourse($name,$ca_id,$duration,$price,$_POST["id"]);
		if($rs === true){
			header("Location: allcourses.php");
		}
		$err_db = $rs;
		}
		
	}
	
	elseif(isset($_POST["delete_course"])){
		
		$rs = deleteCourse($_POST["id"]);
		if($rs === true){
			header("Location: allcourses.php");
		}
		$err_db = $rs;
		}
		
	
	
	
   
	
	function insertCourse($name,$ca_id,$duration,$price){
		$query = "insert into courses values (NULL,'$name',$ca_id,$duration,$price)";
		return execute($query);
	}
	function getCourses(){
		$query ="select c.*,ca.name as 'ca_name' from courses c left join categories ca on c.ca_id = ca.id";
		$rs = get($query);
		return $rs;
	}
	function getCourse($id){
		$query = "select * from courses where id = $id";
		$rs = get($query);
		return $rs[0];
		
	}
	function editCourse($name,$ca_id,$duration,$price,$id){
		$query ="update courses set name='$name',ca_id=$ca_id,duration=$duration,price=$price where id = $id";
		return execute($query);
	}
	function deleteCourse($id){
		$query ="delete from courses where id = $id";
		return execute($query);
	}
	function searchCourse($key){
		$query = "select c.id,c.name from courses c left join categories ca on c.ca_id = ca.id where c.name like '%$key%' or ca.name like '%$key%'";
		
		$rs = get($query);
		return $rs;
	}
	
	
		
	

	
	
?>

	