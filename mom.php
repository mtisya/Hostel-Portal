<?php
require_once("db_connection.php");
if(isset($_POST['submit']))
	{
$studentid=$_POST['Studentid'];
	$firstname=$_POST['Firstname'];
	$lastname=$_POST['Lastname'];
	$gender= $_POST['gender'];
	$course=$_POST['courseid'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$md5password = md5('$password');
	
	//Insert Into Database
	


	
$sql="INSERT INTO student (studentid,fname,lname,course,gender,mobile,email,username,pword)VALUES('$studentid','$firstname','$lastname','null','$gender','$mobile','$email','$username',
'$md5password')" or die (mysql_error());
$insert=mysql_query($sql);
	if ($insert)
	{
	echo "success>";
	}
	else
        {
	echo "<br><br>" . mysql_error();
	}  
$cquery="SELECT coursecode FROM course";
 $cresult=mysql_query($cquery) or die ("Query to get data from course failed: ".mysql_error());
 while ($row=mysql_fetch_array($cresult)) {
$cid=$row["coursecode"];
echo $cid;
 }

?><head>
<style>
body {
	background-color:#9FF;
	}
	.div {
	font-size: 16px;
}
</style>
</head>



<h1 align="center">Technical University of mombasa Online Hostel </h1>
<h2 align="center">Student Registration Form</h2>


<form action="reg.php" method="post" >
<div align="center" style="background-color:#0FC" width="" heigth="300">  
<legend align="center" class="div"> Enter you details here </legend> 
<br/><br/>
<table border="0">
<tr><td><label for='Studentid' >Studentid: </label></td>
<td><input type='text' name='Studentid' id='Studentid' maxlength="50" /> </td>
</tr> 
<tr><td><label for='Firstname' >Firstname: </label></td>
<td><input type='text' name='Firstname' id='Firstname' maxlength="50" /></td>
</tr>
<tr><td><label for='Lastname' >Lastname: </label></td>
<td><input type='text' name='Lastname' id='Lastname' maxlength="50" /></td>
</tr>
<tr><td><label for='gender'>Gender:</label></td>
<td><input type='text' name='gender' id='gender' maxlength="50" /></td>
</tr>
<tr><td><label for='course' >Course: </label></td>
<td><select id="courseid" name="courseid" >
  <option></option>
  <?php

echo "<option>$cid </option>";
 
?>
</select></td>
</tr>
<tr><td><label for='email' >email:</label></td>
<td><input type='email' name='email' id='email' maxlength="50" /></td>
</tr>
<tr><td><label for='mobile' >Mobile: </label></td>
<td><input type='text' name='mobile' id='mobile' maxlength="50" /></td>
</tr>
<tr><td><label for='username' >Username: </label></td>
<td><input type='text' name='username' id='username' maxlength="50" /></td>
</tr>
<tr><td><label for='password' >Password:</label></td>
<td><input type='password' name='password' id='password' maxlength="50" />
</td></tr>
<tr><td></td><td><div align="center">
<input type='submit' name='submit' value='Submit' />
</div></td></tr></table>
</div>
</form>