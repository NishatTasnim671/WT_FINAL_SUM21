<?php 
	
	include 'controllers/UserController.php';
	

?> 

<html>
	<head></head>
	<h5><?php echo $err_db;?></h5>
	<body>
		<form  method="post" action="">
		<fieldset>
			<table>
			<td>  <center> <b> Sign Up </td>
				<tr>
					<td>Name</td>
					<td>: <input type="text" name="name" value="<?php echo $name; ?>" > </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
				
				<tr>
					<td>UserName</td>
					<td>: <input type="text" name="uname" value="<?php echo $uname; ?>">  </td>
					<td><span> <?php echo $err_uname;?> </span></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>: <input type="text" name="email" value="<?php echo $email; ?>" ></td>
					 
					<td><span> <?php echo $err_email;?> </span></td>
				</tr>
				
				<tr>
					<td>Password</td>
					<td>: <input type="password" name="pass" value="<?php echo $pass; ?>" >  </td>
					<td><span> <?php echo $err_pass;?> </span></td>
					
					
				</tr>
				
				
				<tr>
					<td colspan="2" align="right"> <input type="submit" name="sign_up" value="Sign Up"> </td>
					
				</tr>
				
				
				</table>
			
			
			
		</fieldset>
		</form>