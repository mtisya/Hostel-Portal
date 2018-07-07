<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['Admin'])) {
header('Location: index.php');
}
//connection to db
require_once("db_connection.php");

  if(isset($_POST['submit']))
	{
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$id=$_POST['id'];
	$email= $_POST['email'];
	$username= $_POST['username'];
	$md5password = md5('$password');
	
//Insert Into Database
$sql="INSERT INTO admin (adminid,fname,lname,email,username,password )
VALUES('$id','$fname','$lname','$email','$username','$md5password')"or die (mysql_error());
 $insert= mysqli_query($link,$sql);
	if ($insert)
	{
header("location:index.php");	 
echo "<h2>Registration Successful!</h2>";
echo "<p>Congratulations <b>$username</b>, your registration was successful.
You may now login.</p>";
}
	else{
	echo "<br><br>" . mysqli_error($link);
	} 
}
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Add admin</title>
<link rel="shortcut icon" HREF="images/LOG5.jpg" />
<link rel="stylesheet" href="/hostel1/admin/styles/formstyle.css" />
<script src="js/jquery.js"></script>
<script src="js/jquery.nyroModal.custom.js"></script>
<script src="js/login.js"></script>
</head>
<body>
  <?php
  include_once("header.php");
  ?>
<fieldset style="width:50%; height:auto; background-color:#C6C6FF; margin-left:26%"> <br />
 <img src="/hostel1/admin/images/signup.PNG" id="imagergstr" width="250px" height="300px" align="right" style="margin-top:10%"><br />
<legend>Add New Admin </legend>
<form action="addadmin.php" method="post">
<label for="firstname">Firstname:</label> 
<input type="text" name="firstname" id="firstname" required />
<label for="lastname">Lastname:</label>
<input type="text" name="lastname" id="lastname" required />
<label for="lastname">ID:</label>
<input type="text" name="id" id="id" required />
<label for="email">Email: </label>
<input type="email" name="email" id="email" required /> 
<label for="username">Username: </label>
<input type="text" name="username" id="username" required />
<label for="password">Password:</label>
<input type="password" name="password" id="password" required /><br /><br />
<input type="submit" name="submit" id="submit" value="Submit" />
</form>
</fieldset><br /><br />
</body>
 <?php
   include_once("footer.php");
  ?>
</html>
