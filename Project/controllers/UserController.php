<?php 
	require_once 'models/db_config.php';
	session_start();
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$confirmpass="";
	$err_confirmpass="";
	$email="";
	$err_email="";
	$prof="";
	$err_prof="";
	$code="";
	$err_code="";
	$number="";
	$err_number="";
	$street="";
	$err_street="";
	$city="";
	$err_city="";
	$postal="";
	$err_postal="";
	$pro= array("Instructor","Student");
	$hasError=false;
	$err_db="";
	
	
	
if(isset($_POST["sign_up"])){
		//name
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		else if(strlen($_POST["name"]) <= 3){
			$hasError = true;
			$err_name="Name must contain >3 character";
		}
		else{
			$name = $_POST["name"];
		}
		//usename
		if(empty($_POST["uname"])){
			$hasError = true;
			$err_uname="User name Required";
		}
		
		else if(strpos($_POST["uname"]," ")){
			$hasError = true;
			$err_uname="Username does not contain space";
		}
	
		else{
			$uname =$_POST["uname"];
			
		}
		//password
		if(empty($_POST["pass"])){
			$hasError = true;
			$err_pass="Password Required";
		}
		
			 else if(strlen($_POST["pass"])<8){
        $hasError=true;
				 $err_pass="Password Must Be 8 Charachter Long";
		 }
		 else if(!strpos($_POST["pass"],"#")){
         $hasError=true;
			 $err_pass="Password should contain special character";
		    }

		  
		   else if(strpos($_POST["pass"]," ")){
          $hasError=true;
			    $err_pass="Password should not contain space";
		    }
			 else{
				 $pass=$_POST["pass"];
			 }
		
		
		//confirmpassword
		if(empty($_POST["confirmpass"])){
			$hasError = true;
			$err_confirmpass="Password Required";
		}
		else if($_POST["pass"]!=$_POST["confirmpass"])
{
  $hasError = true;
 $err_confirmpass="Password doesn't match";
}
else {

	$confirmpass=$_POST["confirmpass"];
}

//email
if(empty($_POST["email"])){
			$hasError = true;
			$err_email="Email Required";
		}
		
 else if(!strpos($_POST["email"],"@gmail.com")){
          $hasError=true;
			     $err_email="Email must contain @gmail.com ";
		     }

		
		
		else{
			$email = $_POST["email"];
		}
		
		//profession
		if(empty($_POST["prof"])){
			$hasError = true;
			$err_prof="Profession Required";
		}
		
		else{
			$prof = $_POST["prof"];
		}
		
		
		//address
		
		if(empty($_POST["street"])){
			$hasError = true;
			$err_street="street Required";
		}
		
		else{
			$street = $_POST["street"];
		}
		
		
		if(empty($_POST["city"])){
			$hasError = true;
			$err_city="City Required";
		}
		
		else{
			$city = $_POST["city"];
		}
		
		
		if(empty($_POST["postal"])){
			$hasError = true;
			$err_postal="Postal Required";
		}
		
		else{
			$postal = $_POST["postal"];
		}
		
		if(!$hasError){
			$rs=insertUser($name,$uname,$pass,$email,$prof,$street,$city,$postal);
			if($rs===true){
				
				header("Location: login.php");
			}
			$err_db=$rs;
		}
		
		}
		else if(isset($_POST["btn_login"])){
			
			if(empty($_POST["uname"])){
			$hasError = true;
			$err_uname="User name Required";
		}
		
		else if(strpos($_POST["uname"]," ")){
			$hasError = true;
			$err_uname="Username does not contain space";
		}
		else{
			$uname =$_POST["uname"];
			
		}
		
		//password
		if(empty($_POST["pass"])){
			$hasError = true;
			$err_pass="Password Required";
		}
		
			 else if(strlen($_POST["pass"])<8){
        $hasError=true;
				 $err_pass="Password Must Be 8 Charachter Long";
		 }
			 else if(!strpos($_POST["pass"],"#")){
         $hasError=true;
			 $err_pass="Password should contain special character";
		    }
		 
		   else if(strpos($_POST["pass"]," ")){
          $hasError=true;
			    $err_pass="Password should not contain space";
		    }
			 else{
				 $pass=$_POST["pass"];
			 }
		
		if(!$hasError){
			if(authenticateIns($uname,$pass)){
				if($rs=true){
					$_SESSION["loggeduser"] = $uname;
					
					header("Location: profile.php");
				}
		
		    $err_db="Username password invalid";
		}
		if(authenticateSt($uname,$pass)){
				if($rs=true){
					$_SESSION["loggeduser"] = $uname;
                   header("Location:st_dashboard.php");
				}
		
		    $err_db="Username password invalid";
		}
		}
		}
		
	function insertUser($name,$uname,$pass,$email,$prof,$street,$city,$postal){
		
		$query="insert into users values (NULL,'$name','$uname','$pass','$email','$prof','$street','$city','$postal')";
		
		return execute($query);
		
	}
	function getUsers(){
		$query ="select * from users";
		$rs = get($query);
		return $rs;
	}
	
	function authenticateIns($uname,$pass){
		$query="select * from users where username='$uname' and password='$pass' and profession='Instructor'";
		$rs=get($query);
		if(count($rs)>0){
			
			return true;
		}
		
		return false;
	}
	function authenticateSt($uname,$pass){
		$query="select * from users where username='$uname' and password='$pass' and profession='Student'";
		$rs=get($query);
		if(count($rs)>0){
	
			
			return true;
		}
		
		return false;
	}
	function searchStudent($key){
		$query = "select id,username from users where profession='Student' and name like '%$key%' ";
		
		$rs = get($query);
		return $rs;
	}
	function searchInstructor($key){
		$query = "select id,username from users where profession='Instructor' and name like '%$key%' ";
		
		$rs = get($query);
		return $rs;
	}
	function getStudents(){
		$query ="select id,username from users where profession='Student'";
		$rs = get($query);
		return $rs;
	}
	function getInstructors(){
		$query ="select id,username from users where profession='Instructor'";
		$rs = get($query);
		return $rs;
	}
	function getPro($id){
		$query = "select * from users where id=$id ";
		
		$rs = get($query);
		return $rs;
	}
	
	
		
?> 