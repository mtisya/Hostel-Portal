<?php
require_once("db_connection.php");
$cquery="SELECT coursecode FROM course";
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
	
	//Insert Into Database
$sql="INSERT INTO student (studentid,fname,lname,course,gender,mobile,email)
VALUES('$studentid','$firstname','$lastname','$course','$gender','$mobile','$email')" or die (mysql_error());
$insert = mysqli_query($sql);
	if ($insert)
	{
	header("location:reg.php");
	}
	else
        {
	echo "<br><br>" . mysql_error();
	}  

	}
	else{
		
		}

?>
<title>studentrec</title>
<script src="js/jquery.js"></script>
<script src="js/register.js"></script>
<script src="js/menu.js"></script>
<body>
<?php
  include_once("header.php");
?>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<h2 align="center">Student Registration Form</h2>
<fieldset id="regform" style="width:95%">  
<legend>Enter Student Details</legend>
<form method="post" action="reg.php">
<label for='Studentid' >Studentid: </label>
<input type='text' name='Studentid' id='Studentid' maxlength="50" /> 
<label for='Firstname' >Firstname: </label>
<input type='text' name='Firstname' id='Firstname' maxlength="50" />
<label for='Lastname' >Lastname: </label>
<input type='text' name='Lastname' id='Lastname' maxlength="50" />
<label for='gender'>Gender:</label>
<select name=gender id=gender>
<option value="male">Male</option>
<option value="female">Female</option>
</select>
<label for='mobile' >Mobile: </label>
<input type='text' name='mobile' id='mobile' maxlength="50" />

<label for='email' >email:</label>
<input type='email' name='email' id='email' maxlength="50" />

<label for='course' >Course: </label>
<select id="courseid" name="courseid" >
  <?php
include 'includes/Database.php';
$sql5 = "SELECT coursecode,coursename FROM course";
$db = new Database($sql5);
$resp = $db->execute_query();
while ($row = mysqli_fetch_row($resp)){
	echo "<option value=$row[0]>$row[1]</option>";
	}
?>
</select>
<input type='submit' name='submit' value='Submit' />
</fieldset>
<div align="center" style="width:100%;"><h1>Or</h1></div>
<legend>Bulk Import Student List</legend>
<fieldset id="regform" style="width:95%; padding:2%;">
<legend>Select Student CSV File</legend>
<div  style="background-color:#0FC;">  
<input type="file" name="txtfile" id="txtfile" />
<input type="button" id=btnimport value="Import" />
</div>
</fieldset>
</form>
 <?php
   include_once("footer.php");
  ?>
</body>

