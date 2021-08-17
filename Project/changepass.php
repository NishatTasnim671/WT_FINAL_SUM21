<?php
    $password="";
	$err_password="";
	$newpassword="";
	$err_newpassword="";
	
    $confirmpassword="";
	$err_confirmpassword="";
	if(isset($_POST["submit"])){
		if(empty($_POST["password"])){
			$hasError = true;
			$err_password="Password Required";
		}
		else{
				 $password=$_POST["password"];
			 }
		
		
		if(empty($_POST["password"])){
			$hasError = true;
			$err_password="Password Required";
		}
		
		
		else if(isset($_POST[""])){
		       echo htmlspecialchars($_POST["newpassword"]);
		    }
			 else if(strlen($_POST["newpassword"])<=8){
                 $hasError=true;
				 $err_newpassword="Password Must Be 8 Charachter Long";
		 }
			 else if(!strpos($_POST["newpassword"],"#")){
         $hasError=true;
			 $err_newpassword="Password should contain special character";
		    }
		 else if(!strpos($_POST["newpassword"],"5")){
         $hasError=true;
			    $err_newpassword="Password should contain Numeric values";
		   }
		  
		   else if(strpos($_POST["newpassword"]," ")){
          $hasError=true;
			    $err_newpassword="Password should not contain space";
		    }
			 else{
				 $newpassword=$_POST["newpassword"];
			 }
		
		
		//confirmpassword
		if(empty($_POST["confirmpassword"])){
			$hasError = true;
			$err_confirmpassword="Password Required";
		}
		else if($_POST["password"]!=$_POST["confirmpassword"])
{
  $hasError = true;
 $err_confirmpassword="Password doesn't match";
}
else {

	$confirmpassword=$_POST["confirmpassword"];
}
if(!$hasError){
			echo "<h1>Password change</h1>";
			echo $password."<br>";	
			echo $newpassword."<br>";
			echo $confirmpassword."<br>";

	}
	}
?>
<html>
	<head></head>
	<body>
		<form  method="post" action="">
		<fieldset>
			<table>
			<td>  <center> <b> Password changed  </td>
				<tr>
					<td>Old Password</td>
					<td>: <input type="password" name="password" value="<?php echo $password; ?>" > </td>
					<td><span> <?php echo $err_password;?> </span></td>
				</tr>
				
				<tr>
					<td>New Password</td>
					<td>: <input type="password" name="new password" value="<?php echo $newpassword; ?>" >  </td>
					<td><span> <?php echo $err_newpassword;?> </span></td>
				</tr>
				<tr>
					<td> Confirm Password</td>
					<td>: <input type="password" name="confirmpassword" value="<?php echo $confirmpassword; ?>" >  </td>
					<td><span> <?php echo $err_confirmpassword;?> </span></td>
				</tr>
				
				<tr>
					<td colspan="2" align="right"> <input type="submit" name="submit" value="Password Changed"> </td>
					
				</tr>
				</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>