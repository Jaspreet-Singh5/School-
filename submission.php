  <hmtl>
<head>
	<title>Submission</title>
</head>

<body>
	
	<h2>Enter the details of student</h2>
	
	<hr size="2"
		align="right"
		width="70%">
	
	<hr size="2"
		align="left"
		width="70%">
	
	<form name="frm"
		  method="post"
		  action="<?php echo $_SERVER['PHP_SELF'];?>">
		
		<table>
			<tr>
				<th>Enter Student's Name
				<td><input type="text"
						   name="txt1">
		
			<tr>	
				<th>Enter Student's Roll No.
				<td><input type="text"
						   name="txt2">
			   
			<tr>	
				<th>Enter Student's Mobile No.
				<td><input type="text"
						   name="txt3">
		
			<tr>
				<th>How's Student's Performance In  The Class
				<td><input type="text"
						   name="txt4">
			   
			<tr>
				<th>Status
				<td><input type="text"
						   name="txt5"
						   Readonly>
		
			<tr>
				<td colspan="2"
					align="center"><input type="submit"
									      value="Submit"
										  name="submit1">
		</table>
	</form>
	
	<?php
		function submitJ()
		{
			$n=$_POST["txt1"];
			$rn=$_POST["txt2"];
			$mn=$_POST["txt3"];
			$p=$_POST["txt4"];
			$s=$_POST["txt5"];
			
			$servername="localhost";
			$username="root";
			$password="";
			$dbname="j_school";
			
			$conn=new mysqli($servername,$username,$password,$dbname);
			
			if($conn->connect_error)
			{
				die("Sorry! connection failed:".$conn->connect_error);
			}
			
			$sql="INSERT INTO  `j_school`.`class 12` (`J_Name` ,`J_Roll No.` ,`J_Mobile No.` ,`J_Performance`)
				  VALUES ('$n',  '$rn',  '$mn',  '$p');";
			
			if($conn->query($sql) === TRUE)
			{
				echo "New record created successfully";
			}
			
			else
			{
				echo "Error".$sql."<br>".$conn->error;
			}
			
			$conn->close();
		}
		
		if(isset($_POST['submit1']))
		submitJ();
	?>
</body>
  </html>