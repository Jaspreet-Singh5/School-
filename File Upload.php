  <html>
<head>
	<title>FILES Upload</title>'
</head>

<body>
	<h1 align="center">Upload your proFILES picture</h1>
	
	<form name="frm"
		  method="post"
		  action="<?php echo $_SERVER['PHP_SELF']; ?>"
		  enctype="multipart/form-data">
		<table align="center"
			   border="2"
			   bordercolor="red">
			<tr>
				<th>Select the desired FILES
				<td><input type="file"
						   name="f1"
						   id="f1">
			<tr>
				<td align="center"><input type="submit"
						   value="Upload"
						   name="upload"
						   id="upload">
				<td align="center"><input type="reset"
						   value="Change"
						   id="change">
		</table>
	</form>
	
	<?php
		function upload1()
		{
			if((is_uploaded_file($_FILES['f1']['tmp_name']))
				&& ($_FILES['f1']['error']==0))
			{
				echo "The file ".$_FILES['f1']['name']." has been uploaded and saved successfully"."<br>";
				echo "The size of your FILES is:".$_FILES['f1']['size']."<br>";
				echo "The type of your FILES is:".$_FILES['f1']['type']."<br>";
			
				move_uploaded_file($_FILES['f1']['tmp_name'],"../..".$_FILES['f1']['name']);
			
				echo "Success";
				echo "<br>"."<table align=center border=2 bordercolor=green>"."<tr>"."<td>"."<img src=../.." .$_FILES['f1']['name']. " height=400 width=400 />"."</table>";
			}
		
			else
			{
				echo "Error!";	
			}
		}
		
		if(isset($_POST["upload"]))
		upload1();
	?>
</body>
  </html>
			