  <html>
<head>

	<link href = "demo.css" 
		  rel = "stylesheet" 
	      type = "text/css">
	
	<script>
		
		function validate_password_reset() 
		{
			if((document.getElementById("member_password").value == "") && 
			   (document.getElementById("Confirm Password").value == "")) 
			{
				document.getElementById("validation-message").innerHTML = "Please enter new password!";
				return false;
			}
			
			return true
		}
	</script>
</head>

<body>

	<form name = "frmForgot" 
		  id = "frmForgot" 
		  method = "post" 
		  onSubmit = "return validate_password_reset();">

		<?php 
		
			if(!empty($success_message)) 
			{ 
		?>
			<div class = "success_message"><?php echo $success_message; ?></div>
		<?php 
			} 
		?>

			<div id = "validation-message">
		
				<?php 
			
					if(!empty($error_message)) 
					{ 
				?>
	
				<?php 
		
					echo $error_message; 
				?>
	
				<?php 
					} 
				?>
			</div>

			<div class = "field-group">
		
				<div>
			
					<label for = "member_password">Password</label>
				</div>
		
				<div>
			
					<input type = "password" 
						   name = "member_password" 
						   id = "member_password" 
				           class = "input-field"> 
			
					<br>
						<center>Or</center>
				</div>
			</div>
	
			<div class = "field-group">
		
				<div>
			
					<label for = "confirm_password">Confirm Password</label>
				</div>
		
				<div>
					
					<input type = "password" 
						   name = "confirm_password" 
						   id = "confirm_password" 
						   class = "input-field">
				</div>
			</div>
	
			<div class = "field-group">
		
				<div>
			
					<input type = "submit" 
						   name = "reset-password" 
						   id = "reset-password" 
						   value = "Submit" 
						   class = "form-submit-button">
				</div>
			</div>	
	</form>
</body>
  </html>
				