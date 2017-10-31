<?php
	include 'loginscript.php';
	if(isset($_SESSION['login_user']))
	{		
		header("location : profile.php");
	}
?>

  <!DOCTYPE html>
  <html>
<head>
   
    <title>Get started</title>
   
    <meta charset="UTF-8">
    
    <meta name="viewport" 
          content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" 
          href="https://www.w3schools.com/w3css/4/w3.css">
   
    <link rel="stylesheet" 
		  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    
    <link href='https://fonts.googleapis.com/css?family=Audiowide' 
		  rel='stylesheet'>
	<link href="1.css"
          rel="stylesheet"
          type="text/css">
	
	<link rel="stylesheet" 
	      href="https://fonts.googleapis.com/css?family=Lobster&effect=brick-sign">
	
	<link rel="stylesheet" 
		  href="https://fonts.googleapis.com/css?family=Lato">
	
	<link href="https://fonts.googleapis.com/css?family=Raleway" 
	      rel="stylesheet">

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
				
				<li><a href="getstarted.php"
				       class="active">Get Started</a></li>
				
				<li class="dropdown"><a href="javascript:void(0)" 
									    class="dropbtn">More</a>
				
					<div class="dropdown-content">
					
						<a href="#contact">Contact us</a>
						<a href="#">About us</a>
						<a href="#">Complaints</a>
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
	     style="max-width:2000px;
				margin-top:46px">
		
		<!-- teacher's community -->
		<section class="w3-container 
					    w3-center"
				 style="max-width: auto;
						background: linear-gradient(to bottom, #33ccff 0%, #ccffff 100%);
						color: black;
						padding-bottom: 40px;">
    
			<h2 class="w3-wide">Teacher's Community</h2>
   
			<p class="w3-opacity"><i>For Those Who Shape Us</i></p>
  
			<p class="w3-justify">
				We have created a fully free to join community particularly for teachers in order to 
                allow the exchange of ideas, suggestions, eduction-based material
                and improvement & devlopement of education system along with 
                the developement of teachers indvidually. 
                 
			    <br/>We will be always ready to help you and hope 
                     that you will find it useful.
						 
				<br>
					<div class="dashed">
						
						<div class="w3-lobster 
									font-effect-brick-sign">
							
							<p class="w3-xlarge">Material security</p>
						</div>
						
						<br>
							<p class="mrgnless">
								Prevent problems before they happen. Required status checks protect your 
					        	work and help you maintain a high standard for your work.
							</p>
					</div>
						
				<BR>
					<div class="dashed">
						
						<div class="w3-lobster 
									font-effect-brick-sign">
							
							<p class="w3-xlarge">Socially connected</p>
						</div>
					
						<BR>
							<p class="mrgnless">
								Encourage teachers to work together and engage in interactive discussions.
							</p>
					</div>
								
				<BR>
					<div class="dashed">
						
						<div class="w3-lobster 
									font-effect-brick-sign">
							
							<p class="w3-xlarge">Hosted where you need it</p>
						</div>
						
						<BR>
							<p class="mrgnless">
								Securely and reliably host your work on TeacDev.com on any platform.
							</p>
					</div>
					
				<BR>
					<div class="dashed">
						
						<div class="w3-lobster 
									font-effect-brick-sign">
							
							<p class="w3-xlarge">Downloaded where you need it</p>
						</div>
						
						<BR>
							<p class="mrgnless">
								Securely and reliably download your work on TeacDev.com on any platform.
							</p>
					</div>
						
				<BR>
					<div class="dashed">
						
						<div class="w3-lobster 
									font-effect-brick-sign">
							
							<p class="w3-xlarge">Achievements checked</p>
						</div>
						
						<BR>
							<p class="mrgnless">
								Track your achievements to become more efficient in your work.
							</p>
					</div>
		</section>
    
	<section class="start">
      
        <center>
			<button onclick="document.getElementById('id01').style.display='block'" 
					style="width:20%;
						   border-radius:2px;">Sign Up
			</button>
		</center>
       
<?php     
	// define variables and set to empty values
	$emailErr =  "";
	
	$name = $email = $gender = $comment = $website = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		if (empty($_POST["name"])) 
		{
			$nameErr = "Name is required";
		} 
		
		else 
		{
			$name = test_input($_POST["name"]);
			
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
			{
				$nameErr = "Only letters and white space allowed";
			}
		}
  
		if (empty($_POST["email"])) 
		{
			$emailErr = "Email is required";
		} 
		
		else 
		{
			$email = test_input($_POST["email"]);
    
			// check if e-mail address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
			{
				$emailErr = "Invalid email format";
			}
		}
    
		if (empty($_POST["website"])) 
		{
			$website = "";
		} 
		
		else 
		{
			$website = test_input($_POST["website"]);
    
			// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
			if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) 
			{
				$websiteErr = "Invalid URL";
			}	
		}

		if (empty($_POST["comment"])) 
		{
			$comment = "";
		}
		
		else 
		{
			$comment = test_input($_POST["comment"]);
		}

		if (empty($_POST["gender"])) 
		{
			$genderErr = "Gender is required";
		} 
		
		else 
		{
			$gender = test_input($_POST["gender"]);
		}
	}

	function test_input($data) 
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
			<div id="id01" 
                 class="modal">
                
                <span onclick="document.getElementById('id01').style.display='none'" 
                      class="close" 
                      title="Close Modal"
					  style="right : 12%;
							 top : 18%;">&times;
                </span>
  
				<form class = "modal-content animate" 
                      action = "register.php"
                      method = "post"
					  id = "regform"
                      name = "frm1"
					  enctype = "multipart/form-data">
                    
                    <div class = "container">
                        
                        <h1>Register:</h1>
							
						<!-- One "tab" for each step in the form: -->
						<div class="tab">Name:
    
							<p><input placeholder = "First name..."
									  type = "text"
							          oninput = "this.className = ''" 
									  name = "fname">
						    </p>
							
							<p>
								<input placeholder = "Last name..." 
								       oninput = "this.className = ''" 
									   name = "lname"
									   type ="text"
									   style = "margin-top: 15px;">
							</p>
						</div>
  
						<div class="tab">Contact Info:
						
							<p><input placeholder = "E-mail..."
									  type = "email"
									  id = "email"
							          oninput = "this.className = ''" 
									  name = "email">
							</p>
				
						</div>
						
						<div class="tab">Security Questions:
    
							<p>
								
								<label for = "Ques1">Ques1</label>
								<select id = "secques"
										name="Ques1">
									
									<option>Your first car
									<option>Your first pet
									<option>Your first friend
									<option>Your first trip
									<option>Your first movie
								</select>
							
								<input placeholder = "Ans1" 
									   oninput = "this.className = ''" 
									   name = "Ans1"
									   type ="text">
							</p>
						    
							<p>
								
								<label for = "Ques2"
									   style = "margin-top: 15px;">Ques2</label>
								<select id = "secques"
									    name="Ques2">
									
									<option>Where do you born?
									<option>Where do you work?
									<option>Where do you live?
									<option>Where do you study?
									<option>Where do you go at vacations?
								</select>
							
								<input placeholder = "Ans2" 
									   oninput = "this.className = ''" 
									   name = "Ans2"
									   type ="text">
							</p>
							
							<p>
								
								<label for = "Ques3"
									   style = "margin-top: 15px;">Ques3</label>
								<input placeholder = "Ques3" 
									   oninput = "this.className = ''" 
									   type ="text"
									   style = "margin-top: 15px;"
									   name="Ques3">
							
								<input placeholder = "Ans3" 
									   oninput = "this.className = ''" 
									   name = "Ans3"
									   type ="text">
							</p>
						</div>
  
						<div class="tab">Login Info:
							
							<p>
								<input placeholder = "Username..." 
									   oninput = "this.className = ''" 
									   name = "uname"
									   type = "text">
							</p>
		
							<p><input placeholder = "Password..." 
							          oninput = "this.className = ''" 
									  name = "pword" 
									  type = "password"
									  style = "margin-top: 15px;">
							</p>
							
							<p>
								<div id = "holder">
	
									<div class = "button-holder"
										 style = "padding-top : 5px;">
									
										<input type = "radio" 
									     	   id = "professn" 
											   name = "professn" 
											   class = "regular-radio" 
											   value = "Teacher"
											   checked />
										
										<label for = "radio-1-1"
											   style = "float : left;"></label>
										
										<span style = "float : left;">Teacher &nbsp; &nbsp;</span>
									
										<input type = "radio" 
											   id = "professn" 
											   name = "professn"
											   value = "Devloper"
											   class = "regular-radio"/>
										
										<label for = "radio-1-2"
											   style = "float : left;"></label>
									
										<span style = "float : left;">Developer</span><br />
									</div>
								</div>
							</p>
						</div>
						
						<div style="overflow:auto;">
							
							<div style="float: right;" 
								 class="regbtn">
								
								<button type="button" 
								        id="prevBtn"
										onclick="nextPrev(-1)">Previous
								</button>
								
								<button type="button" 
								        id="nextBtn" 
										name="nextBtn"
										onclick="nextPrev(1)">Next
								</button>
							</div>
						</div>
 
						<!-- Circles which indicates the steps of the form: -->
						<div style="text-align:center;
								    margin-top:40px;">
							
							<span class="step"></span>
							<span class="step"></span>
							<span class="step"></span>
							<span class="step"></span>
						</div>
					</div>
				</form>
			</div>
			
			<script>	
		
				var currentTab = 0; 
					
				// Current tab is set to be the first tab (0)
				showTab(currentTab); 
					
				// Display the crurrent tab
				function showTab(n) 
				{
					// This function will display the specified tab of the form...
					var x = document.getElementsByClassName("tab");
  
					x[n].style.display = "block";
						
					//... and fix the Previous/Next buttons:
					if (n == 0) 
					{
						document.getElementById("prevBtn").style.display = "none";
					} 
						
					else
					{
						document.getElementById("prevBtn").style.display = "inline";
					}
 
					if (n == (x.length - 1)) 
					{
						document.getElementById("nextBtn").innerHTML = "Submit";
					}
						
					else 
					{
						document.getElementById("nextBtn").innerHTML = "Next";
					}
				
					//... and run a function that will display the correct step indicator:
					fixStepIndicator(n)
				}

				function nextPrev(n) 
				{
					// This function will figure out which tab to display
					var x = document.getElementsByClassName("tab");
  
					// Exit the function if any field in the current tab is invalid:
					if (n == 1 && !validateForm()) 
						return false;
						
					// Hide the current tab:
					x[currentTab].style.display = "none";
 
					// Increase or decrease the current tab by 1:
					currentTab = currentTab + n;
	
					// if you have reached the end of the form...
					if (currentTab >= x.length) 
					{
						// ... the form gets submitted:
						document.getElementById("regform").submit();
						return false;
					}
					
					// Otherwise, display the correct tab:
					showTab(currentTab);
				}

				function validateForm() 
				{
					// This function deals with validation of the form fields
					var x, y, i, valid = true;
						
					x = document.getElementsByClassName("tab");
						
					y = x[currentTab].getElementsByTagName("input");
							
					// A loop that checks every input field in the current tab:
					for (i = 0; i < y.length; i++)
					{
						// If a field is empty...
						if (y[i].value == "") 
						{
							// add an "invalid" class to the field:
							y[i].className += " invalid";
								
							// and set the current valid status to false
							valid = false;
						}
						
					}
  
					// If the valid status is true, mark the step as finished and valid:
					if (valid) 
					{
						document.getElementsByClassName("step")[currentTab].className += " finish";
					}
						
					return valid; // return the valid status
				}
					
					
				function fixStepIndicator(n) 
				{
					// This function removes the "active" class of all steps...
					var i, x = document.getElementsByClassName("step");
 
					for (i = 0; i < x.length; i++) 
					{
						x[i].className = x[i].className.replace(" active", "");
					}
 
					//... and adds the "active" class on the current step:
					x[n].className += " active";
				}
			</script>
				
			<center>
				<div style = "font-family: 'Audiowide';
							  font-size: 22px;">OR
				</div>
			</center>
            
            <center>
				<button onclick="document.getElementById('id02').style.display='block'" 
						style="width : 20%;
							   border-radius : 2px;">Login
				</button>
			</center>

                <div id = "id02" 
                     class = "modal">
  
                    <form class = "modal-content animate" 
                          action = "loginscript.php"
                          method = "post"
                          name = "frm2">
                        
                        <div class = "imgcontainer">
                            
                            <span onclick = "document.getElementById('id02').style.display='none'" 
                                  class = "close" 
                                  title = "Close Modal">&times;
                            </span>
							
							<center>
								<div class = "profile-pic" 
									 style = "background-image: url('img_avatar2.png')" >

									<input id = "upload" 
										   class = "file-upload__input" 
										   type = "file" 
										   name = "file-upload">
										
									<i style = "font-size : 14px" 
									   class = "fa">&#xf030;</i>
      
									<label for = "upload">
										<span style = "cursor : pointer;">Upload Image</span>
									</label>
									
								</div>
							</center>
						</div>

						<div class = "container">
                            
                            <label><b>Username</b></label>
                            <input type = "text" 
                                   placeholder = "Enter Username" 
                                   name = "username"
								   id = "name"
                                   required>

                            <label><b>Password</b></label>
                            <input type = "password" 
                                   placeholder = "Enter Password" 
                                   name = "password"
								   id = "password"
                                   required>
        
                            <button type = "submit"
								    name = "submit">Login
                            </button>
							
							<div id = "holder">
	
								<div>
		
									<div class = "button-holder"
										 style = "padding-top : 5px;">
									
										<input type = "radio" 
											   id = "radio-1-1" 
										       name = "radio-1-set" 
										       class = "regular-radio" 
										       value = "Teacher"
											   checked />
										
										<label for = "radio-1-1"
											   style = "float : left;"></label>
										
										<span style = "float : left;">Teacher &nbsp; &nbsp;</span>
									
										<input type = "radio" 
											   id = "radio-1-2" 
										       name = "radio-1-set"
											   value = "Devloper"
										       class = "regular-radio"/>
										
										<label for = "radio-1-2"
										       style = "float : left;"></label>
										
										<span style = "float : left;">Developer</span><br />
									</div>
								</div>
							</div>
						</div>
						
						<div class="container" 
                             style="background-color:#f1f1f1">
                            
                            <button type="button" 
                                    onclick="document.getElementById('id02').style.display='none'" 
                                    class="cancelbtn2">Cancel
                            </button>
                        
                            <span class="psw">Forgot <a href="forgot.php">password?</a>
                           </span>
						</div>
						
						<span style = "color : red;"><?php echo $error; ?></span>

                       
						<script>
                        
                          
						   // Get the modal
                           var modal1 = document.getElementById('id01');
						   var modal2 = document.getElementById('id02');
						   
						   // When the user clicks anywhere outside of the modal, close it
                           window.onclick = function(event) 
                           {
                               if (event.target == modal1)
                               {
                                   modal1.style.display = "none";
                               }
							   
							   if (event.target == modal2)
                               {
                                   modal2.style.display = "none";
                               }
                           }
						   
						
                    </script>
                </form>
            </div>
        </table>
    </section>
    
     <!-- developer's community -->
    <section class="w3-container w3-center"
             style="max-width:auto;
                    background: linear-gradient(to bottom, #33ccff 0%, #ccffff 100%);
					color: black;
					padding-bottom: 40px;">
    
        <h2 class="w3-wide">Developer's Community</h2>
   
        <p class="w3-opacity"><i>For Those Who Make Imagination-Reality</i></p>
  
        <p class="w3-justify">We have created a fully free to join community particularly for developers in order to 
                          allow the exchange of files, projects, codes
                          and allowance for team-work along with 
                          the lifetime & unlimited storage of files. 
                          
						  <br/>We will be always ready to help you and hope 
                          that you will find it useful.</p>
						  
						<br>
							<div class="dashed">
						
								<div class="w3-lobster 
										    font-effect-brick-sign">
							
									<p class="w3-xlarge">Code security</p>
								</div>
									
								<BR>
									<p class="mrgnless">Prevent problems before they happen. Required status checks protect 
														your work and help you maintain a high standard for your code.
									</p>
							</div>		
									
						<br>
							<div class="dashed">
						
								<div class="w3-lobster 
											font-effect-brick-sign">
							
									<p class="w3-xlarge">Access controlled</p>
								</div>
								
								<BR>
									<p class="mrgnless">Encourage teams to work together while limiting access to 
														those who need it with granular permissions.
									</p>
							</div>
							
						<br>
							<div class="dashed">
						
								<div class="w3-lobster 
											font-effect-brick-sign">
							
									<p class="w3-xlarge">Hosted where you need it</p>
								</div>
								
								<BR>
									<p class="mrgnless">Securely and reliably host your work on TeacDev.com on any platform.
									</p>
							</div>
							
						<br>
							<div class="dashed">
						
								<div class="w3-lobster 
											font-effect-brick-sign">
							
									<p class="w3-xlarge">Downloaded where you need it</p>
								</div>	
								
								<BR>
									<p class="mrgnless">Securely and reliably download your work on TeacDev.com on any platform.
									</p>
							</div>
					
	</section>
<!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>User! Drop a note</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Punjab, IND<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +91 9646507986<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: j.jaspreetmahu@gmail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">SDMS</a></p>
</footer>



</body>
</html>