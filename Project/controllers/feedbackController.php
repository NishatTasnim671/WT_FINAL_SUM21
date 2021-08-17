<?php
    require_once 'models/db_config.php';
	$u_id="";
	$err_u_id="";
	$per="";
	$err_per="";
	$effort="";
	$err_effort="";
	$tell="";
	$err_tell="";
	$c_id="";
	$err_c_id="";
	$ins="";
$err_ins="";
$curr="";
$err_curr="";
$comment="";
$err_comment="";
	
	$hasError=false;
	$err_db="";
	
	
	if(isset($_POST["submit"])){
		if(empty($_POST["u_id"])){
			$hasError = true;
			$err_u_id="Student Name Required";
		}
		
		else{
			$u_id =$_POST["u_id"];
	
		}
		if(!isset($_POST["per"])){
			$hasError = true;
			$err_per="Performance Required";
		}
		else{
			$per = $_POST["per"];
		}
		if(!isset($_POST["effort"])){
			$hasError = true;
			$err_effort="Effort Required";
		}
		else{
			$effort = $_POST["effort"];
		}
		if(empty($_POST["tell"])){
			$hasError = true;
			$err_tell = "Tell Required";
		}
		else{
			$tell = $_POST["tell"];
		}
		
	
		if(!$hasError){
		
		
		$rs = insertFeedback($u_id,$per,$effort,$tell);
		if ($rs === true){
			header("Location: ins_dashboard.php");
		}
		$err_db = $rs;
	}
		}
		if(isset($_POST["review"])){
		if(empty($_POST["c_id"])){
			$hasError = true;
			$err_c_id="Course Name Required";
		}
		
		else{
			$c_id =$_POST["c_id"];
	
		}
		if(!isset($_POST["ins"])){
			$hasError = true;
			$err_ins="Instructor Performance Required";
		}
		else{
			$ins = $_POST["ins"];
		}
		if(!isset($_POST["curr"])){
			$hasError = true;
			$err_curr="Curriculum Required";
		}
		else{
			$curr = $_POST["curr"];
		}
		if(empty($_POST["comment"])){
			$hasError = true;
			$err_comment = "Comment Required";
		}
		else{
			$comment = $_POST["comment"];
		}
		
	
		if(!$hasError){
		
		
		$rs = insertReview($c_id,$ins,$curr,$comment);
		if ($rs === true){
			header("Location: st_dashboard.php");
		}
		$err_db = $rs;
	}
		}
		
		 
		
	
	
	
   
	
	function insertFeedback($u_id,$per,$effort,$tell){
		$query = "insert into feedbacks values (NULL,$u_id,'$per','$effort','$tell')";
		return execute($query);
	}
	function getFeedbacks(){
		$query ="select f.*,u.username as 'student_name' from feedbacks f left join users u on f.u_id = u.id";
		$rs = get($query);
		return $rs;
	}
	function insertReview($c_id,$ins,$curr,$comment){
		$query = "insert into reviews values (NULL,$c_id,'$ins','$curr','$comment')";
		return execute($query);
	}
	function getReviews(){
		$query ="select r.*,c.name as 'course_name' from reviews r left join courses c on r.c_id = c.id";
		$rs = get($query);
		return $rs;
	
	}
	
		
	
	
?>	
	