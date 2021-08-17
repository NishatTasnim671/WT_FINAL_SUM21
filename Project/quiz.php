<?php
$q1="";
	$err_q1="";
	$q2=[];
	$err_q2="";
	$q3="";
	$err_q3="";
	$hasError=false;
	
	function questionExist($question){
		global $q2;
		foreach($q2 as $h){
			if($h == $question) return true;
		}
		return false;
	}
	
	if(empty($_POST["q1"])){
			$hasError = true;
			$err_q1="question 1 answer needed Required";
		}
		else{
			$q1 = $_POST["q1"];
		}
		if(empty($_POST["q2"])){
			$hasError = true;
			$err_q2="question 2 answer needed Required";
		}
		else{
			$q2 = $_POST["q2"];
		}
		if(empty($_POST["q3"])){
			$hasError = true;
			$err_q3="question 3 answer needed Required";
		}
		else{
			$q3 = $_POST["q3"];
		}
		
		if(!$hasError){
		echo "<h1>Form submitted</h1>";	
		echo $q1."<br>";
		$arr=$_POST["q2"];
		
		foreach($arr as $e){
				echo "$e<br>";
			}
			echo $q3."<br>";
		
		echo "Answers 1. body 2. td tr 3. none";
		}

?>


<html>
	<head></head>
	<body>
		<form action="" method="post">
		<fieldset>
			<table>
			<b>HTML QUIZ 1:</b>
			
			<td> 1.The visible part of the html document is kept inside____element? </td>
			<td>: <input type="text" name="q1" value="<?php echo $q1; ?>" placeholder="Your answer ...." ></td>
			<td><span> <?php echo $err_q1;?> </span></td>
			<tr>
					<td>2.Which of the following tag is/are elements of a table</td>
					<td>: <input type="checkbox" name="q2[]"<?php if(questionExist("tl")) echo "checked";?> value=" tr"> tr <br>
					<input type="checkbox" name="q2[]"<?php if(questionExist("td")) echo "checked";?> value=" td">td<br>
					
					<input type="checkbox" name="q2[]"<?php if(questionExist("dt")) echo "checked";?> value="dt" > dt
					</td>
					<td><span> <?php echo $err_q2;?> </span></td>
				</tr>
				
				<tr>
					<td>3.Head element does not contain_______</td>
					<td>: <input type="radio" value="title" <?php if($q3=="title") echo "checked"; ?> name="q3"> title
					<input name="q3" <?php if($q3==" style") echo "checked"; ?> value=" style" type="radio">  style 
					<input type="radio" value="none " <?php if($q3=="none ") echo "checked"; ?> name="q3"> none </td>
					<td><span> <?php echo $err_q3;?> </span></td>
				</td>
					
					
				</tr>
				<td>
				<input type="submit" value="Submit">
			</td>
			</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>