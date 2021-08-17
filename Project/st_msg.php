<?php
    require_once 'controllers/UserController.php';
	require_once 'controllers/MsgController.php';
	$students=getStudents();
	$instructors=getInstructors();
?>
<html>
	<head>
	</head>
	<h5><?php echo $err_db;?></h5>
	<body>
		<form  method="post" action="">
		<fieldset>
			<table>
			<td>  <b>Sent Message</b></td>
				
				<tr>
				    <td>From:</td>
					<td><select id="sender" name="sender" value="<?php echo $sender; ?>">
					<option selected disabled>From</option>
					<?php
					  foreach($students as $s){
						echo "<option value='".$s["id"]."'>".$s["username"]."</option>";
					}
					?>
					</select>
					</td>
					<td><span id="err_sender"> <?php echo $err_sender;?> </span></td>
				</tr>
				<tr>
				    <td>To:</td>
					<td><select id="receiver" name="receiver" value="<?php echo $receiver; ?>">
					<option selected disabled>To</option>
					<?php
					  foreach($instructors as $i){
						echo "<option value='".$i["id"]."'>".$i["username"]."</option>";
					}
					?>
					</select>
					</td>
					<td><span id="err_receiver"> <?php echo $err_receiver;?> </span></td>
				</tr>
				<tr>
					<td>Message:</td>
					<td>: <textarea name="msg" ><?php echo $msg; ?></textarea>
					<td><span> <?php echo $err_msg;?> </span></td>
					</td>
				</tr>
				
				<tr>
					<td colspan="2" align="right"> <input type="submit" name="send_msg" value="Send"> </td>
					
				</tr>
				
				</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>