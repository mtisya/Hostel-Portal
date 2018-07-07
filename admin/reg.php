<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['Admin'])) {
header('Location: index.php');
}
require_once("db_connection.php");
$cquery = "SELECT coursecode FROM course";
$cresult = mysqli_query($link,$cquery) or die ("Query to get data from course failed: ".mysql_error());
while ($row = mysqli_fetch_array($cresult)) {
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
	$status=$_POST['status'];
	//Insert Into Database
$sql="INSERT INTO student (studentid,fname,lname,course,gender,mobile,email,status)
VALUES('$studentid','$firstname','$lastname','$course','$gender','$mobile','$email','$status')" or die (mysql_error($sql));
$insert = mysqli_query($link,$sql);
	if ($insert)
	{
	header("location:reg.php");
	}
	else
        {
	echo "<br>Registration Failed<br>" . mysql_error();
	}  
	}
	else{
	}
?>
<!DOCTYPE html>
<head>
<title>student reg</title>
<link rel="shortcut icon" HREF="images/LOG5.jpg" />
<link rel="stylesheet" href="styles/formstyle.css"/>
<script src="js/jquery.js"></script>
<script src="js/register.js"></script>
</head>
<body>
  <?php
  include_once("header.php");
  ?>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<h3 align="center">Register New Admitted Student or Import Bulk File i.e. CVS, PDF file.</h3> 
<form method="post" action="reg.php" id="regform">
<legend>Enter Student Details</legend>
<label for='Studentid' >Student No: </label>
<input type='text' name='Studentid' id='Studentid' maxlength="50" required/> 
<label for='Firstname'>Firstname: </label>
<input type='text' name='Firstname' id='Firstname' maxlength="50" required/>
<label for='Lastname' >&nbsp;&nbsp;Lastname: </label>
<input type='text' name='Lastname' id='Lastname' maxlength="50" required />
<label for='gender'>&nbsp;Gender:&nbsp;&nbsp;&nbsp;&nbsp;</label>
<select name=gender id=gender>
<option value="male">Male</option>
<option value="female">Female</option>
</select>
<label for='mobile' >&nbsp;&nbsp;&nbsp;Mobile: &nbsp;&nbsp;</label>
<input type='number' name='mobile' id='mobile' maxlength="50" required />
<label for='email' >&nbsp;&nbsp;&nbsp;&nbsp;Email:&nbsp;&nbsp;&nbsp;</label>
<input type='email' name='email' id='email' maxlength="50" required />
<label for='course' >&nbsp;&nbsp;&nbsp;Course:&nbsp;&nbsp;&nbsp; </label>
<select id="courseid" name="courseid" >
  <?php
include 'includes/Database.php';
$sql5 = "SELECT coursecode,coursename FROM course";
$db = new Database($sql5);
$resp = $db->execute_query();
while ($row = mysqli_fetch_row($resp)){
	echo "<option >$row[0], $row[1]</option>";
	}
?>
</select>
<label for='status'>&nbsp;&nbsp;Status:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<select name="status" id="status" >
<option>--select status--</option>
<option value="off">Off</option>
<option value="on">On</option>
</select><br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='submit' name='submit' value='Submit' align='middle' />
</form>
<fieldset style="width:40%; float:right; background-color:#D8EBEB; margin-right:5%;">
<legend>Select Student CSV File</legend><br/>
<form>
<input type="file" name="txtfile" id="txtfile" />
<input type="button" id=btnimport value="Import" />
</form>
</fieldset>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br />
 <?php
   include_once("footer.php");
  ?>
</body>
</html>

