<?php 
	
	require_once 'controllers/UserController.php';
?> 

<html>
	
	<head>
<link rel="stylesheet" href="styles/design.css">
	    
		
		<script src="js/user.js"></script>
	
	</head>
	<h5><?php echo $err_db;?></h5>
	<body>
		<form  action="" onsubmit="return Regvalidate()" method="post">
		<div class="header sticky">
<h1>Registration</h1>
 </div>
		<fieldset>
		<legend>Registration</legend>
			<table>
		
				<tr>
					<td>Enter Name:</td>
					<td><input type="text" id="name" name="name" value="<?php echo $name; ?>" placeholder="Your name ...."> </td>
					<td><span id="err_name"> <?php echo $err_name;?> </span></td>
				</tr>
				<tr>
					<td>Enter UserName:</td>
					<td> <input type="text" id="uname" name="uname" value="<?php echo $uname; ?>" placeholder="Your name ...."> </td>
					<td><span id="err_uname"> <?php echo $err_uname;?> </span></td>
				</tr>
				
				<tr>
					<td>Enter Password:</td>
					<td><input type="password" id="pass" name="pass" value="<?php echo $pass; ?>" placeholder="Password">  </td>
					<td><span id="err_pass"> <?php echo $err_pass;?> </span></td>
				</tr>
				<tr>
					<td> Confirm Password:</td>
					<td><input type="password" id="confirmpass" name="confirmpass" value="<?php echo $confirmpass; ?>" placeholder=" Confirm Password">  </td>
					<td><span id="err_confirmpass"> <?php echo $err_confirmpass;?> </span></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td> <input type="text" id="email" name="email" value="<?php echo $email; ?>"placeholder="Insert Your Email">  </td>
					<td><span id="err_email"> <?php echo $err_email;?> </span></td>
				</tr>
				<tr>
				<tr>
					<td>Profession:</td>
					<td><select id="prof" name="prof">
						<option disabled selected>---Select---</option>
						<?php
							foreach($pro as $p){
								if($p == $prof) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
						?>
						</select>
					</td>
					<td><span id="err_prof"> <?php echo $err_prof;?> </span></td>
				<tr>
				<tr>
					<td>Address:</td>
					<td><input type="text" id="street" name="street" value="<?php echo $street; ?>" placeholder="Street Address"> <input type="text" id="city"  name="city" value="<?php echo $city; ?>" placeholder="City">-  <input type="text" id="postal" name="postal" value="<?php echo $postal; ?>" placeholder="Postal/Zip Code">  </td>
					<td><span id="err_street"> <?php echo $err_street;?> </span></td>
					<td><span id="err_city"> <?php echo $err_city;?> </span></td>
					<td><span id="err_postal"> <?php echo $err_postal;?> </span></td>
					
				</tr>
				
				
				
				<tr>
					<td colspan="2" align="right"> <input type="submit" name="sign_up" value="Sign Up"></td>
					
				</tr>
				
				
				</table>
			
			
			
		</fieldset>
		<div class="footer">
<h1>Credit goes to Nishat</h1>
 </div>
		</form>
	</body>
</html>