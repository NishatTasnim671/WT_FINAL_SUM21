<?php
  session_start();
?>
  
<html>
<head> 
    <link rel="stylesheet" type="text/css" href="styles/mystyle.css">
</head>
<body>
<div class="header sticky" >

   <h1 align="center">Welcome to Learn Panda</h1>
   </div>
  
<div class="topnav">
<a href="ins_dashboard.php">Dashboard</a>
<a href="logout.php">Log out</a>
<a href="req.php">Request for approval</a>
</div>
 <fieldset>
      <h1 align="center">Welcome <?php echo $_SESSION["loggeduser"];?></h1>
	 <?php
	 $name=$_SESSION['loggeduser'];
$value=$_SESSION['loggeduser'];

if(!isset($_COOKIE[$name]))
{
setcookie($name,$value,time()+(2000),"/");
}

if(!isset($_COOKIE[$name]))
{
echo "<p>New User : ".$_SESSION['loggeduser']."</p>";
}
else {
echo "<p>Old User : ".$_COOKIE[$name]."</p>";
}
?>
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


</div>

 
</body>   
</html> 
    