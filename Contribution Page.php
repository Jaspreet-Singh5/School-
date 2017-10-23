<?php
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["file-upload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	$output1=null;
	$output2=null;
	$output3=null;
	$output4=null;
	$output5=null;
	
	// Check if image file is a actual image or fake image / actual document or fake document
	if(isset($_POST["submit"])) 
	{
		$check = getimagesize($_FILES["file-upload"]["tmp_name"]);
		
		if($check !== false) 
		{
			$output1="File is - " . $check["mime"] . ".";
			$uploadOk = 1;
			return $output1;
		} 
		
		else 
		{
			$output1="File is neither an image nor a document.";
			$uploadOk = 0;
			return $output1;
		}
	}

	// Check if file already exists
	if (file_exists($target_file)) 
	{
		$output2="Sorry, file already exists.";
		$uploadOk = 0;
		return $output2;
	}

	// Check file size
	if ($_FILES["file-upload"]["size"] > 500000) 
	{
		$output3="Sorry, your file is too large.";
		$uploadOk = 0;
		return $output3;
	}

	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	   && $imageFileType != "gif" && $imageFileType != "pdf" && $imageFileType != ".txt" 
	   && $imageFileType != "docx") 
	   {
			$output4="Sorry, only JPG, JPEG, PNG, GIF, PDF, TXT & DOCX files are allowed.";
			$uploadOk = 0;
			return $output4;
	   }

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) 
	{
		$output5="Sorry, your file was not uploaded.";
		return $output5;
	}	 
	
	// if everything is ok, try to upload file
	else 
	{
		if (move_uploaded_file($_FILES["file-upload"]["tmp_name"], $target_file)) 
		{
			$output5="The file ". basename( $_FILES["file-upload"]["name"]). " has been uploaded.";
			return $output5;
		} 
		
		else 
		{
			$output5="Sorry, there was an error uploading your file.";
			return $output5;
		}
	}
?>
 
 <!DOCTYPE html>
  <html>
<head>
   
    <title>Welcome!</title>
   
    <meta charset="UTF-8">
    
    <meta name="viewport" 
          content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" 
          href="https://www.w3schools.com/w3css/4/w3.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    
    <link href="1.css"
          rel="stylesheet"
          type="text/css">
	
	<link rel="stylesheet" 
		  href="https://fonts.googleapis.com/css?family=Lato">

	<script>
		// Used to toggle the menu on small screens when clicking on the menu button
		function myFunction() 
		{
			var x = document.getElementById("navDemo");
			if (x.className.indexOf("w3-show") == -1) 
			{
				x.className += " w3-show";
			}	 
		
			else 
			{ 
				x.className = x.className.replace(" w3-show", "");
			}
		}
	</script>

</head>
	
<body>

	<!-- Navbar -->
		<div style="position:fixed;
				    top:0;
					width:100%;
					z-index:99;">
			<ul>
				
				<li><a href="#home"">Home</a></li>
				
				<li><a href="#news"
				       class="active">Contribute</a></li>
				
				<li class="dropdown"><a href="javascript:void(0)" 
									    class="dropbtn">Dropdown</a>
				
					<div class="dropdown-content">
					
						<a href="#">Link 1</a>
						<a href="#">Link 2</a>
						<a href="#">Link 3</a>
					</div>
				</li>
				
				<li style="float:right;"><input type="search" 
										        name="search"
											    id="search"
												placeholder="Search.."></li>
		   </ul>
		</div>		
				
		<!-- Navbar on small screens -->
		<div id="navDemo" 
			 class="w3-bar-block 
				    w3-black 
					w3-hide 
					w3-hide-large 
					w3-hide-medium 
					w3-top" 
			 style="margin-top:46px">
			
			<a href="#band" 
			   class="w3-bar-item 
			          w3-button 
					  w3-padding-large"></a>
  
			<a href="#tour"
			   class="w3-bar-item 
				      w3-button 
					  w3-padding-large"></a>
  
			<a href="#contact" 
			   class="w3-bar-item 
				      w3-button 
					  w3-padding-large">CONTACT</a>
  
			<a href="#" 
			   class="w3-bar-item 
					  w3-button 
					  w3-padding-large"></a>
		</div>


	<!-- Page content -->
	<div class="w3-content" 
	     style="max-width:2000px;">
		
		<!-- Intro -->
		<section class="w3-container 
					    w3-center"
				 style="max-width:auto;
						background: linear-gradient(to bottom, #33ccff 0%, #ccffff 100%);
						color:black;
						padding-top:7%;">
			<img src="file.png"
				 alt="Documents only"
				 align="center"
				 width="9%"
				 height="10%">
				 
			<div style="border-radius:5px;background-color:#f2f2f2;padding:40px;
						margin-top:5%;
						margin-bottom:5%;">
		
				<form  action="to-do.php" 
					   method="post" 
					   enctype="multipart/form-data"
					   name="frm"
					   class="test">
			
					<div class="file-upload"
						 style="font-family: 'helvetica neue', 'arial', sans-serif;
								font-size: 24px;
								font-weight: bold;
								-webkit-font-smoothing: antialiased;
								text-align: center;
								width:100%;
								z-index:1;">
    
						<label for="upload" 
							   class="file-upload__label">Choose your files</label>
    
						<input id="upload" 
							   class="file-upload__input" 
							   type="file" 
							   name="file-upload">
					</div>
				
					<input type="submit"
					       value="Upload &raquo;"
						   name="submit"
						   id="upload"
						   class="button">
				   
					<input type="submit"
						   value="Change &raquo;"
						   name="change"
						   id="change"
						   class="button">
				</form>
				
				
			</div>
		</section>
	</div>
	
		<!-- Footer -->
	<footer class="w3-container 
				   w3-padding-64 
				   w3-center 
				   w3-opacity 
				   w3-light-grey 
				   w3-xlarge">
  
		<i class="fa fa-facebook-official w3-hover-opacity"></i>
		<i class="fa fa-instagram w3-hover-opacity"></i>
		<i class="fa fa-snapchat w3-hover-opacity"></i>
		<i class="fa fa-pinterest-p w3-hover-opacity"></i>
		<i class="fa fa-twitter w3-hover-opacity"></i>
		<i class="fa fa-linkedin w3-hover-opacity"></i>
		
		<p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" 
									       target="_blank">w3css</a></p>
	</footer>
	
</body>
  </html>

			
