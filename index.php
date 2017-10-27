<?php
	
	if(isset($_POST["forgot-password"]))
	{
		$conn = mysqli_connect("localhost", "root", "", "TeacDev");
		
		$condition = "";
		
		if(isset($_POST["frgusername"]))
		{	
			$condition = " Username = '" . $_POST["frgusername"] . "'";
		}
		
		if(isset($_POST["frgemail"])) 
		{
			if(!empty($condition)) 
			{
				$condition = " and ";
			}
			
			$condition = " Email = '" . $_POST["frgemail"] . "'";
		}
		
		if(!empty($condition)) 
		{
			$condition = " where " . $condition;
		}

		$sql = "Select * from UserInfo " . $condition;
		
		$result = mysqli_query($conn,$sql);
		
		$user = mysqli_fetch_array($result);
		
		if(!empty($user)) 
		{
			require_once("forgot-password-recovery-mail.php");
		} 
		
		else 
		{
			$error_message = 'No User Found';
		}
	}
?>

  <html>
<head>
	
	<link href="demo-style.css" 
		  rel="stylesheet" 
		  type="text/css">

	<script>
		function validate_forgot() 
		{
			if((document.getElementById("frgusername").value == "") && 
			   (document.getElementById("frgemail").value == "")) 
			{
				document.getElementById("validation-message").innerHTML = "Username or Email is required!";
				return false;
			}
			
			return true;
		}
	</script>

</head>

<body>

	<div style="border-radius : 5px;
	            background-color : #f2f2f2;
				padding : 40px;
				width : 30%;
				height : 50%;
				margin-left : 35%;">

	<form name = "frmForgot" 
		  id = "frmForgot" 
		  method = "post" 
		  onSubmit = "return validate_forgot();"
		  class = "test">

		<h1>Forgot Password?</h1>
	
	<?php 
	
		if(!empty($success_message)) 
		{ 
	?>
	
		<div class="success_message">
		
			<?php echo $success_message; ?>
		</div>

	<?php 

		} 	
	?>

		<div id="validation-message">
		
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
						   name="forgot-password" 
						   id="forgot-password" 
						   value="Submit" 
						   class="button">
				</center>
			</div>
		</div>	
	</form>
	</div>
</body>
  </html>	