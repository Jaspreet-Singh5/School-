<?php
	session_start(); // Starting Session
	$error = ''; // Variable To Store Error Message

	if (isset($_POST['submit'])) 
	{
		if (empty($_POST['username']) || empty($_POST['password'])) 
		{
			$error = "Username or Password is invalid";
		}

		else
		{
			// Define $username, $profession and $password
			$username = $_POST['username'];
			$password = $_POST['password'];
			$profession = $_POST['radio-1-set']
			
			// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			$connection = mysql_connect("localhost", "root", "");
			
			// To protect MySQL injection for Security purpose
			$username = stripslashes($username);	
			$password = stripslashes($password);
			$profession = stripslashes($profession);
			$username = mysql_real_escape_string($username);
			$password = mysql_real_escape_string($password);
			$profession = mysql_real_escape_string($profession);

			// Selecting Database	
			$db = mysql_select_db("TeacDev", $connection);
			
			// SQL query to fetch information of registerd users and finds user match.
			$query = mysql_query("select * from UserInfo where Password = '$password', Profession = '$profession' AND Username = '$username'", $connection);
			
			$rows = mysql_num_rows($query);
			
			if ($rows == 1) 
			{
				$_SESSION['login_user'] = $username; // Initializing Session
					if()
					{	
						header("location: profile.php"); // Redirecting To Other Page
					} 
			
					else 
					{
						$error = "Username or Password or Profession is invalid";
					}

					mysql_close($connection); // Closing Connection
			}
		}
	}
?>