<?php
	
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$email  = $_POST["email"];
	$uname = $_POST["uname"];
	$pword = $_POST["pword"];
	$professn = $_POST["professn"];
	$ans1 = $_POST["Ans1"];
	$ans2 = $_POST["Ans2"];
	$ans3 = $_POST["Ans3"];
	$ques1 = $_POST["Ques1"];
	$ques2 = $_POST["Ques2"];
	$ques3 = $_POST["Ques3"];
	
	$servername = "localhost";
	$user = "root";
	$password = "";
	$dbname = "TeacDev";
	
	$conn = new mysqli($servername,$user,$password,$dbname);
	
	if($conn->connect_error)
		die("Server Not Found " . $conn->connect_error);
		
	$sql = ("INSERT INTO `TeacDev`.`UserInfo` (`First Name` , `Last Name` , `Email` , 
			 `Username` , `Password` , `Profession` , `Question no.1` , 
		     `Question no.2` , `Question no.3`, `Answer no.1`, `Answer no.2`, `Answer no.3`)
							   
		     VALUES ('$fname', '$lname', '$email', '$uname', '$pword', '$professn', '$ques1', '$ques2', '$ques3', '$ans1', '$ans2', '$ans3')");
			
	if($conn->query($sql) === TRUE)
	{
		echo "New record created successfully";
	}
			
	else
	{
		echo "You are already registered.";
	}
	
	$conn->close();
?>

  <html>
<head>
	
	<meta http-equiv="Refresh" 
	      content="5; url=login.php">
		  
	<link rel="stylesheet" 
		  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		.buttonload 
		{
			background-color: white;
			border: none; /* Remove borders */
			color: black; /* White text */
			font-size: 160px; /* Set a font-size */
		}
	
	</style>
</head>

<body>
	
	<p>You will be redirected to the login page in five seconds.</p>
	
	<p>If you see this message for more than 5 seconds, please click on this link: <a href="login.php">Log in</a>!</p>

	<center>
		<button class="buttonload">
			<i class="fa fa-spinner fa-spin"></i>
		</button>
	</center>
</body>
  </html>

            