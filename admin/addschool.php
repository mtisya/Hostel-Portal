<?php
  if(isset($_POST['submit']))
	{
	$connection= mysqli_connect("localhost","root","");
		if($connection){
	//echo "<br><br>Connection Established";
	}
	else
	{
	echo "coonection fail";
	}
	//Select Database
	mysqli_select_db($connection,"tumhostel")or die(mysql_errno());	
	//Insert Into Database

$schl = $_POST['school'];
$dpt = $_POST['department'];
$crse = $_POST['course'];

$sql="INSERT INTO course(coursename)
 VALUES ('$username','$md5password')";
 $insert= mysqli_query($connection,$sql);
	if ($insert)
	{
	echo "<br><br>";
	}
	else
     {
	echo "<br><br>" . mysqli_error($connection);
	} 
//do all the code stuff
//if there are any errors, I set $error_stat to 1 and put the errors in the $message:
   if (empty($_POST['username'])) {
      echo " Please enter your username."."<br/>";
   }
else
{ 
echo "<h2>Registration Successful!</h2>";
echo "<p>Congratulations <b>$username</b>, your registration was successful.
You may now login.</p>";
}
}
?> 



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Add school</title>

<script src="js/jquery.js"></script>
<script src="js/jquery.nyroModal.custom.js"></script>
<script src="js/login.js"></script>
</head>

<body>
<h1 align="center">Technical University of mombasa Hostel </h1>
<fieldset id=mainfield>
<legend>TUM Hostel Management System </legend>
<fieldset id="regform" style="width:95%">  
 <legend>Add School </legend>
 
<form action="addschool.php" method="get">
 <label for="School">School:</label>
<input type="text" name="School" id="School" />
  <label for="Department">Department:</label>
<input type="text" name="Department" id="Department" />
<label for="Course">Course: </label>
<input type="text" name="Course" id="Course" /> 

<input type="submit" name="Submit" id="Submit" value="Submit" />
</form>
</fieldset>
</fieldset>
</body>
</html>