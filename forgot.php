<?php
	session_start();
	
	$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';

	if(!empty($sessData['status']['msg']))
	{
		$statusMsg = $sessData['status']['msg'];
		$statusMsgType = $sessData['status']['type'];
		unset($_SESSION['sessData']['status']);
	}
?>

	
	<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>

	<div style="border-radius : 5px;
	            background-color : #f2f2f2;
				padding : 40px;
				width : 30%;
				height : 50%;
				margin-left : 35%;">

	<form name = "frmForgot" 
		  id = "frmForgot" 
		  method = "post" 
		  action="userAccount.php"
		  class = "test">

		<h1>Forgot Password?</h1>
	
	
		<div class = "field-group">
		
			<div>
			
				<label for = "frgusername">Username</label>
			</div>
			
			<div>
			
				<input type = "text" 
					   name = "frgusername" 
					   id = "frgusername"> 
			
				<br>
				
					<center>OR</center>
			</div>
		</div>
	
		<div class="field-group">
			
			<div>
			
				<label for="frgemail">Email</label>
			</div>
		
			<div>
			
				<input type="text" 
					   name="frgemail" 
					   id="frgemail">
			</div>
		</div>
	
		<div class="field-group">
		
			<div>
			
				<center>
					<input type="submit" 
						   name="forgotSubmit" 
						   id="forgotSubmit" 
						   value="Submit" 
						   class="button">
				</center>
			</div>
		</div>	
	</form>
	</div>
	

 
           