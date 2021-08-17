  
<?php 
    require_once 'controllers/UserController.php';
	if(isset($_SESSION["username"])){
      header("location: profile.php");

}
	
?> 

<html>
	<head>
	<link rel="stylesheet" type="text/css" href="styles/mystyle.css">
	</head>
	<h5><?php echo $err_db;?></h5>
	<body>
		<form action="" method="post">
		<div class="header sticky" >
		<h1 align="center">LogIn</h1>
		
		</div>
		<fieldset>
		<legend>Log in</legend>
			<table >
			
			<tr>
					<td>User Name:</td>
					<td> <input type="text" name="uname" value="<?php echo $uname; ?>"placeholder="Insert Your Username">  </td>
					<td><span> <?php echo $err_uname;?> </span></td>
				</tr>
				<tr>
					<td>Enter Password:</td>
					<td> <input type="password" name="pass" value="<?php echo $pass; ?>" placeholder="Password">  </td>
					<td><span> <?php echo $err_pass;?> </span></td>
				</tr>
			<tr>
					 <td  rowspan="2" > <input type="submit" name="btn_login" value="Login"> </a>   </td>
					
				</tr>
			</table>
			
			
			
		</fieldset>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
		<div class="footer">
		<h1>All crerdits goes to Nishat Tasnim</h1>
		</div>
		</form>
	</body>
</html>