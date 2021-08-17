<?php include 'main_header.php';
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="styles/mystyle.css">
<body>
<div class="header sticky">
<h1>Welcome <?php echo $_SESSION['loggeduser'];?></h1>

 </div>

   <form>
   <div>
   <fieldset>
   
   <legend>Dashboard</legend>
   <a href="st_course.php">
   <input type="button" class="btn" name="all_courses" value="All Courses"> 
   <a href="alloutlines.php">
   <input type="button" class="btn" name="all_courses" value="All Outlines"> 
   
   <a href="st_feedback.php">
   <input type="button" class="btn" name="feedback" value="Feedback"> 
   </a>
    <a href="request.php">
   <input type="button" class="btn" name="request" value="Request for Course"> 
   </a>
   
    <a href="refund.php">
   <input type="button" class="btn" name="upload" value="Refund"> 
   </a>
  </div>
</fieldset>
  </form>
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
<h1>Learn Panda</h1>
 </div>
  </body>
 </head> 
</html>