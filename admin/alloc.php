<?php
require_once("db_connection.php");
include ('includes/Database.php');
$studentquery ="SELECT studentid FROM student";
$studentresult = mysql_query($studentquery) or die ("Query to get data from student failed: ".mysql_error());
$tstudentid="";
 while ($row=mysql_fetch_array($studentresult)) 
 {
$tstudentid=$row["studentid"];
if(isset($_POST['submit']))
	{
//Select Databas
//Insert Into Database
$studentid=$_POST['student'];
if($studentid==$tstudentid ){
header("location:booking.php");
}
else
{
	echo "you are not a student in TUMSA";
}
	}
 }

$hquery="SELECT hostelname FROM hostel";
$hresult=mysql_query($hquery) or die ("Query to get data from hostel failed: ")or die (mysql_error());
while ($row=mysql_fetch_array($hresult)) {
$hid=$row["hostelname"];
}
$rquery="SELECT roomno FROM room";
$rresult=mysql_query($rquery) or die ("Query to get data from hostel failed: ")or die (mysql_error());
while ($row=mysql_fetch_array($rresult)) {
$rid=$row["roomno"];
}
$dquery="SELECT departmentname FROM department";
$dresult=mysql_query($dquery) or die ("Query to get data from department failed: ")or die (mysql_error());
while ($row=mysql_fetch_array($dresult)) {
$did=$row["departmentname"];
}
$squery="SELECT schoolname FROM school";
$sresult=mysql_query($squery) or die ("Query to get data from school failed: ")or die (mysql_error());
while ($row=mysql_fetch_array($sresult)) {
$sid=$row["schoolname"];

}

//require_once("db_connection.php");
if(isset($_POST['submit']))
{
    $student=$_POST['student'];
	$hname=$_POST['hname'];
	$semester= $_POST['semester'];
	$yr_of_study=$_POST['yr_of_study'];
	$roomno=$_POST['roomno'];
	$gender=$_POST['gender'];
	$school=$_POST['school'];
	$department=$_POST['department'];
	
	//Insert Into Database
$sql="INSERT INTO room_alloc(id,student,hostelname,semester,year,room,gender,school,department)
VALUES('null','$student','$hname','$semester','$yr_of_study','$roomno','$gender',  '$school','$department')" or die (mysql_error());
$insert=mysql_query($sql);
	if ($insert)
	{
	header("location:booking.php");
	}
	else
        {
	echo "<br><br>" . mysql_error();
	}  

	}
	
?><head>
<style>
body {
	background-color:#;
	}
	.div {
	font-size: 16px;
}
</style>
<link rel="stylesheet" href="styles/formstyle.css" />
<title>allocation</title>
<script src="js/jquery.js"></script>
<script src="js/register.js"></script>
<script src="js/rooms.js"></script>
<script src="js/book.js"></script>
</head>
<body>
<h1 align="center">Technical University of mombasa Online Hostel </h1>
<h2 align="center">Book Room Here!!</h2>
<form action="booking.php" method="post"> 
<fieldset style="background-color:#0FF"><legend>Hostel booking</legend>
<div align="center"><table width="600">
<tr><td width="200"><label for="student"> <div align="center">Student</div></label>
<div align="center"><input type="text" name="student" id="student" value=<?php $id = $_GET['id'];echo $id; ?> disabled />
<span id=errstud class="error"><img src="images/warning.png" /></span></div>
<td width="200"><label for="hname"><div align="center">Hostel name</div></label>
<div align="center">
  <select id="hname" name="hname" >
    <?php
	$sql7 = "SELECT hostelid,hostelname FROM hostel";
	$db7 = new Database($sql7);
	$resp = $db7->execute_query();
	while ($row = mysql_fetch_row($resp)){
		echo "<option value=$row[0]>$row[1]</option>";
		}
	?>
  </select>
</div></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr>
<td width="200"> <label for="roomno"><div align="center">Room number</div></label>
<div align="center"><select id="roomno" name="roomno" ></select></div></td>
<td width="200"><label for="yr_of_study"><div align="center">Year of study</div></label>
<div align="center">
   <?php 
	$sql = "SELECT academic_yr,semester FROM session";
	$db = new Database($sql);
	$resp = $db->execute_query();
	$sem = "";
	$year = "";
	while ($row=mysql_fetch_row($resp)){
		$year = $row[0];
		$sem = $row[1];
		}
		echo "<input id=yr_of_study name=yr_of_study value=$year disabled />";
	?>
</div></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<br />
<tr><td width="200"><label for="semester"><div align="center">semester</div></label>
</span>
  <div align="center">
    <?php 
	$sql = "SELECT academic_yr,semester FROM session";
	$db = new Database($sql);
	$resp = $db->execute_query();
	$sem = "";
	$year = "";
	while ($row=mysql_fetch_row($resp)){
		$year = $row[0];
		$sem = $row[1];
		}
		echo "<input id=semester name=semester value=$sem disabled />";
	?>
  </div></tr></td>
<tr><td><div align="center">
  <input type="submit" name="submit" id="btnbook" value="submit"/>
</div></td></tr>
</table>
</div>
</fieldset>
</form>
</body>





