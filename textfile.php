  <html>
<head>
    <title>Text file</title>
</head>

<body>
    <h1 align="center">Enroll Yourself</h1>
    
    <form name="frm"
          action="<?php echo $_SERVER['PHP_SELF']; ?>"
          method="Post">
        <table>
            <tr>
                <td>Enter your name
                <td><input type="text"
                           name="txt1">
            <tr>
                <td>Enter your age
                <td><input type="text"
                           name="txt2">
            <tr>
                <td>Enter your mobile number
                <td><input type="text"
                           name="txt3">
            <tr>
                <td>Select your state
                <td><select name="state"
                            multiple>
                        <option>Punjab
                        <option>Haryana
                        <option>Himachal Pradesh
            <tr>
                <td><input type="reset"
                           name="reset"
                           value="Reset">
                <td><input type="submit"
                           name="submit"
                           value="Submit">
        </table>
    </form>
    
    <?php
        function enroll()
        {
        	if(isset($_POST["txt1"]))
            {
            	$file1=fopen("Record.txt","a+");
            	$Record=$_POST["txt1"]." ".
            	        $_POST["txt2"]." ".
            	        $_POST["txt3"]." ".
            	        $_POST["state"];
            	fwrite($file1,$Record."\r\n");
            	echo  $Record."successfully written";
                fclose($file1);
            }
        }
        
        if(isset($_POST["submit"]))
        enroll();
    ?>
</body>
  </html>