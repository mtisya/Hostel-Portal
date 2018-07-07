<?php
/*
require_once("db_connection.php");

$cquery="SELECT coursecode FROM course";
$cresult=mysql_query($cquery) or die ("Query to get data from course failed: ".mysql_error());
while ($row=mysql_fetch_array($cresult)) {
$cid=$row["coursecode"];

 }
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
$sql="INSERT INTO student (studentid,fname,lname,course,gender,mobile,email,username,pword)
VALUES('$studentid','$firstname','$lastname','$course','$gender','$mobile','$email','$username',
'$md5password')" or die (mysql_error());
$insert=mysql_query($sql);
	if ($insert)
	{
	header("location:userlogin.php");
	}
	else
        {
	echo "<br><br>" . mysql_error();
	}  

	}
	else{
		
		}
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Details</title>
<link href="styles2/main.css" rel="stylesheet" type="text/css" />

</head>

<body>



<h1 align="center">Student Registration Form</h1>
<div align="center">
    <legend><h3>Enter Student Details</h3></legend>
</div>
<div class="main">
  <form action="#" name="student_reg_form" method="post" >


<table border="0">
<tr>
<td> Studentid  </td>
<td>   <input type='text' name='Studentid' id='Studentid' maxlength="50" />
  </td>


</tr>
 
 
 <tr>
<td> Firstname:  </td>
<td>     <input type='text' name='Firstname' id='Firstname' maxlength="50" />

  </td>


</tr>
 <tr>
<td> Lastname::  </td>
<td>      <input type='text' name='Lastname' id='Lastname' maxlength="50" />

  </td>


</tr>

 <tr>
<td> Gender:  </td>
<td>     <input type='text' name='gender' id='gender' maxlength="50" />

  </td>


</tr>
 <tr>
<td> Mobile:  </td>
<td>     <input type='text' name='mobile' id='mobile' maxlength="50" />

  </td>


</tr>
 
 <tr>
<td> email:  </td>
<td>       <input type='email' name='email' id='email' maxlength="50" />

  </td>


</tr>
<tr>
<td> course:  </td>
<td>       <select id="courseid" name="courseid" ><?php

echo " <option></option><option value=$cid>$cid </option>";
 
?>
  </select>

  </td>


</tr>
 <tr>
<td> department:  </td>
<td>       <input type='text' name='department' id='department' maxlength="50" />

  </td>


</tr>
 <tr>
<td> School:  </td>
<td>         <input type='text' name='school' id='school' maxlength="50" />


  </td>


</tr>
  <td>   </td>
<td>           <input type='submit' name='submit' value='Submit' />


  </td>


</tr>
  
  </table>
 
</form>
</div>
</body>
</html>
