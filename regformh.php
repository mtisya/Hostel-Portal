<head>
<style>
body {
	background-color:#9FF;
	}
	.div {
	font-size: 16px;
}
</style>

<title>regform</title>
</head>
<body>
<h1 align="center">Technical University of mombasa Online Hostel </h1>
<h2 align="center">Account Registration Form</h2>
  <h1 align="center">Sign up here</h1>
<form id="form1" name="form1" method="post" action="regform.php">
<div align="center" style="background-color:#0FC" width="" heigth="200">
<table border="0">
<tr><td> <label for="studentid">studentid</label></td> 
<td><input type="text" name="studentid" id="studentid" /></td></tr>
<tr><td> <label for="firstname">firstname</label></td> 
<td><input type="text" name="firstname" id="firstname" /></td></tr>
<tr> <td><label for="lastname">lastname</label></td> <td>
<input type="text" name="lastname" id="lastname" /></td>
</tr> <tr><td><label for="email">email</label></td>
<td> <input type="email" name="email" id="email" /></td>
</tr> <tr>
<td><label for="username">username</label></td>
<td><input type="text" name="username" id="username" /> </td></tr>
<tr><td><label for="password">password</label></td>
<td><input type="password" name="Password" id="Password"/></td> </tr>
<td> <label for="confirm password">confirm password</label></td>
<td><input type="password" name="Cpassword" id="Cpassword" /></td>
 </tr><tr>
<td> </td><td><div align="center">
<input type="submit" name="submit" value="Register" />
</div></td></tr></table>
  </div>
</form>
</body>
</html>

<?php
  if(isset($_POST['submit']))
	{
	$connection= mysqli_connect("localhost","root","");
		if($connection){
	echo "<br><br>Connection Established";
	}
	else
	{
	echo "coonection fail";
	}
	//Select Database
	mysqli_select_db($connection,"hostel")or die(mysql_errno());	
	//Insert Into Database
$studentid = $_POST['studentid'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$md5password = md5('$password');

$sql="INSERT INTO student(studentid, firstname, lastname, email, username, password)
 VALUES ('$studentid','$firstname', '$lastname', '$email', '$username','$md5password')";
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
   if (empty($_POST['studentid'])) {
      echo " Please enter studentid."."<br/>";
   }
   if (empty($_POST['firstname'])) {
      echo " Please enter your First name."."<br/>";
   }
   if (empty($_POST['lastname'])) {
      echo " Please enter your last name."."<br/>";
   }
   if (empty($_POST['email'])) {
      echo " Please enter your email."."<br/>";
   }
   if (empty($_POST['username'])) {
      echo " Please enter your username."."<br/>";
   }
else
{ 
echo "<h2>Registration Successful!</h2>";
echo "<p>Congratulations <b>$username</b>, your registration was successful.
Your account has now been created with the following details:</p>";
echo "<p><b>First Name:</b> $firstname</p>";
echo "<p><b>Last Name:</b> $lastname</p>";
echo "<p><b>Email:</b> $email</p>";
echo "<p><b>Username:</b> $username</p>";
echo "<p>You may now login.</p>";
}
}
?> 
