<?php include 'main_header.php';
    require_once 'controllers/PayController.php';
	
	$ba= array("Brac Bank","Islami Bank","Sonali Bank");
	
	
?>
<html>
	<head>
	<link rel="stylesheet" href="styles/mystyle.css">
	</head>
	<h5><?php echo $err_db;?></h5>
	<h1>Payment</h1>
	<body>
		<form action="" method="POST">
		<div class="header sticky">
<h1>Payment</h1>
		<fieldset>
			<table>
				<tr>
					<td>Name</td>
					<td>: <input type="text" name="name" value="<?php echo $name; ?>"> </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
				
				<tr>
					<td>Bank Name</td>
					<td>: <select name="bank" value="<?php echo $bank; ?>">
					    <option disabled selected>---Select---</option>
						<?php
							foreach($ba as $b){
								if($b == $bank) 
									echo "<option selected>$b</option>";
								else
									echo "<option>$b</option>";
							}
						?>
						
					</td>
					<td><span> <?php echo $err_bank;?> </span></td>
				</tr>
				
				<tr>
					<td>Amount</td>
					<td>: <input type="text" name="amount" value="<?php echo $amount; ?>"> </td>
					<td><span> <?php echo $err_amount;?> </span></td>
				</tr>
				<tr>
					<td>Transition ID</td>
					<td>: <input type="text" name="tid" value="<?php echo $tid; ?>" > </td>
					<td><span> <?php echo $err_tid;?> </span></td>
				</tr>
				<tr>
					<td colspan="2" align="right"><input type="submit" name="payment" value="Confimed Payment"></td>
					
				</tr>
			</table>
			
			
			
		</fieldset>
		<div class="footer">
<h1>Credit goes to Learn Panda</h1>
 </div>
		</form>
	</body>
</html>