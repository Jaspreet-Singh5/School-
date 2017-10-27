<?php
	
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$email  = $_POST["email"];		
	$phone = $_POST["phone"];
	$dd = $_POST["dd"];
	$uname = $_POST["uname"];
	$pword = $_POST["pword"];
	$professn = $_POST["professn"];
			
	$servername = "localhost";
	$user = "root";
	$password = "";
	$dbname = "TeacDev";
	
	$file_get = $_FILES['file-upload']['name'];
	$temp = $_FILES['file-upload']['tmp_name'];

	$conn = new mysqli($servername,$user,$password,$dbname);
	
	if($conn->connect_error)
		die("Server Not Found " . $conn->connect_error);
			
	$file_to_saved = "uploads/".$file_get;
	move_uploaded_file($temp, $file_to_saved);

	echo $file_to_saved;	

	$insert_img = mysql_query("INSERT INTO UserInfo (Profile Pic) values  ('".$file_to_saved."')");
	
	$sql = ("INSERT INTO `TeacDev`.`UserInfo` (`First Name` , `Last Name` , `Email` , `Phone` , 
				       `D.O.B.` , `Username` , `Password` , `Profession`)
							   
		     VALUES ('$fname', '$lname', '$email', '$phone', '$dd', 
				     '$uname', '$pword', '$professn')");
			
	if($conn->query($sql) === TRUE)
	{
		if ($insert_img) 
		{
			echo "New record created successfully";
		}
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

            