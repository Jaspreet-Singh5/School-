  <?php
	
	$error = ''; // Variable To Store Error Message

		if (isset($_POST['conpassword'])) 
		{
			if (empty($_POST['frgusername']) || empty($_POST['frgemail'])) 
			{
				$error = "Username or Email is required";
			}

			else
			{
				
				if($email == "")
				{
					// Define $username
					$username = $_POST['frgusername'];
				
					// Establishing Connection with Server by passing server_name, user_id and password as a parameter
					$connection = mysql_connect("localhost", "root", "");
			
					// To protect MySQL injection for Security purpose
					$username = stripslashes($username);	
					$username = mysql_real_escape_string($username);
			
					// Selecting Database	
					$db = mysql_select_db("TeacDev", $connection);
			
					// SQL query to fetch information of registerd users and finds user match.
					$query = mysql_query("select * from UserInfo where Username='$username'", $connection);
			
					$rows = mysql_num_rows($query);
			
					if ($rows == 1) 
					{
						$_SESSION['frg_password'] = $username; // Initializing Session
						header("location: confirm.php"); // Redirecting To Other Page
					} 
			
			else 
			{
				$error = "Username or Password is invalid";
			}

			mysql_close($connection); // Closing Connection
		}
	}
		}
?>

  <html>
<head>
	
	<link href="1.css" 
		  rel="stylesheet" 
		  type="text/css">
</head>

<body>

	<div style="border-radius : 5px;
	            background-color : #f2f2f2;
				padding : 40px;
				width : 30%;
				height : 70%;
				margin-left : 35%;
				margin-top : 10%;">

		<form name = "confrm" 
			  id = "confrm" 
			  method = "post" 
			  class = "test"
			  action="<?php echo $_SERVER['PHP_SELF']; ?>">

			<h1>Security Questions</h1>
	
			<div id="validation-message">
		
				<?php 
	
					if(!empty($error)) 
					{ 
						echo $error; 	
				
					} 
				?>
	
			</div>

			<p>
								
				<label for = "Ques1">Ques1</label>
				<input value = "" 
					   name = "Ques1"
				       type ="text"
					   Readonly>
							
				<input placeholder = "Ans1" 
					   oninput = "this.className = ''" 
					   name = "Ans1"
				       type ="text">
			</p>
						    
			<p>
			
				<label for = "Ques2">Ques2</label>
				<input value = "" 
					   name = "Ques2"
				       type ="text"
					   Readonly>
							
				<input placeholder = "Ans2" 
					   oninput = "this.className = ''" 
					   name = "Ans2"
					   type ="text">
			</p>
							
			<p>
								
				<label for = "Ques3"
					   style = "margin-top: 15px;">Ques3</label>
				<input value = ""
					   name = "Ques3"
					   type ="text"
					   style = "margin-top: 15px;"
					   Readonly>
							
				<input placeholder = "Ans3" 
					   oninput = "this.className = ''" 
					   name = "Ans3"
					   type ="text">
			</p>
			
			<div class="field-group">
		
				<div>
			
					<center>
						<input type="submit" 
						       name="conpassword" 
							   id="conpassword" 
						       value="Submit" 
						       class="button">
					</center>
				</div>
			</div>
		</form>
	</div>
</body>
  </html>	