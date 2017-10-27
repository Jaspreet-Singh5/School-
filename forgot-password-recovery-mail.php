<?php
	
	if(!class_exists('PHPMailer')) 
	{
		require('phpmailer/class.phpmailer.php');
		require('phpmailer/class.smtp.php');
	}

	require_once("mail_configuration.php");

	$mail = new PHPMailer();

	$emailBody = "<div>" . $user["Username"] . 
				 ",<br>
				   <br>
				   <p>Click this link to recover your password
						<br>
						
						<a href = '" . PROJECT_HOME . "php-forgot-password-recover-code/reset_password.php?name=" . 
							$user["Username"] . "'>" . PROJECT_HOME . "php-forgot-password-recover-code/reset_password.php?name=" . 
							$user["Username"] .
						"</a>
						
						<br>
						<br>
						
				   </p>Regards,
				   
						<br> 
							Admin.
				 </div>";

	
	$mail -> IsSMTP();
	
	
	$mail -> SMTPDebug = 0;
	
	$mail -> SMTPAuth = TRUE;
	
	$mail -> SMTPSecure = "tls";
	
	$mail -> Port = PORT;  
	
	$mail -> Username = MAIL_USERNAME;

	$mail -> Password = MAIL_PASSWORD;
   
    $mail -> Host = MAIL_HOST;
    
	$mail -> Mailer = MAILER;

	$mail -> SetFrom('j.jaspreetmahu@gmail.com', 'Jaspreet Singh');
	
	$mail -> AddReplyTo('j.jaspreetmahu@gmail.com', 'Jaspreet Singh');

	$mail -> ReturnPath = 'j.jaspreetmahu@gmail.com';	

	$mail -> AddAddress($user["Email"]);
	
	$mail -> Subject = "Forgot Password Recovery";		
	
	$mail -> MsgHTML($emailBody);
	
	$mail -> IsHTML(true);


	if(!$mail -> Send()) 
	{
		$error_message = 'Problem in Sending Password Recovery Email';
	} 
	
	else 
	{
		$success_message = 'Please check your email to reset password!';
	}
?>
