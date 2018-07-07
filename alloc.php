<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['username'])) {
header('Location: studentlogin.php');
}
//connect Database
require_once("db_connection.php");
include ('includes/Database.php');
$studentquery="SELECT studentid FROM student";
$studentresult = mysqli_query($link,$studentquery) or die ("Query to get data from student failed: ".mysql_error());
$tstudentid="";
 while ($row = mysqli_fetch_array($studentresult)) 
 {
$tstudentid=$row["studentid"];
if(isset($_POST['submit']))
	{

//compare studentid
$studentid=$_POST['student'];

if($studentid==$tstudentid ){
	
header("location:booking.php");
}
else{
	echo "you are not a student in TUMSA";
  }
	}
 }

$hquery="SELECT hostelname FROM hostel";
$hresult = mysqli_query($link,$hquery) or die ("Query to get data from hostel failed: ")or die (mysql_error());
while ($row = mysqli_fetch_array($hresult)) {
$hid=$row["hostelname"];
}
$rquery="SELECT roomno FROM room";
$rresult = mysqli_query($link,$rquery) or die ("Query to get data from room failed: ")or die (mysql_error());
while ($row = mysqli_fetch_array($rresult)) {
$rid=$row["roomno"];
}
$dquery="SELECT departmentname FROM department";
$dresult = mysqli_query($link,$dquery) or die ("Query to get data from department failed: ")or die (mysql_error());
while ($row = mysqli_fetch_array($dresult)) {
$did=$row["departmentname"];
}
$squery="SELECT schoolname FROM school";
$sresult = mysqli_query($link,$squery) or die ("Query to get data from school failed: ")or die (mysql_error());
while ($row = mysqli_fetch_array($sresult)) {
$sid=$row["schoolname"];
}
?>
<html>
<head>
<link rel="stylesheet" href="styles/formstyle.css" />
<title>allocation</title>
<link rel="shortcut icon" HREF="images/LOG5.jpg" />
<script src="js/jquery.js"></script>
<script src="js/jquery.nyroModal.custom.js"></script>
<script src="js/book.js"></script>
</head>
<body>
<?php
  include_once("header.php");
  ?>
  <br/>
  <div align="right" >Welcome: <?php echo $_SESSION['username']; ?> | <a href="logout.php" ><font color='orange'>Logout</font></a></div><br/> 
<div id="topnav" align="center">
<hr><p style="margin:2px">
<a href="index.php"><button>Home</button></a> &nbsp; &nbsp;
<a href="studentprofile.php"><button>Profile</button></a> &nbsp; &nbsp;
<a href="payments.php"><button>Payments</button></a> &nbsp; &nbsp;
<a href="booking.php"><button>Book Room?</button></a> &nbsp; &nbsp;
<a href="qallery.php"><button>Gallery</button></a> &nbsp; &nbsp;
<a href="aboutus.php"><button>About Us</button></a> &nbsp; &nbsp;
<a href="contact.php"><button>Contact Us</button></a></p><hr>
</nav></div>
   <div class="sidebar1">
   <ul class="nav">
        <li><b><a href="index.php" id="homescript" title="Homepage">Home</a></b></li>
        <li><b><a href="#" title="About Us">About Us</a></b></li>
        <li><b><a href="#" title="Contact Us">Contact Us</a></b></li>
		<li><b><a href="home.php" title="Login to View Profile, Hostel and Book Room." target="_parent">Student Module</a></b></li>		
		<li class="nav_label"><b><a href="admin/index.php" title="Administration Module: Add, Delete, Modify Hostels, Rooms, Student, School and More." target="new">Admin Module</a></b></li><br/>
	</ul>
<p align="center"><em>Apartments</em><a href="apartments.php"><img src="images/Kilwa_0084(1).jpg" alt="Insert Logo"
name="Insert_logo" width="150px" height="150px" id="Insert_logo" style="background-color: #FF6666; display:block;" /></a></p></div><br/><br/>

<form action="alloc.php" method="POST">
<p align="center" style="color:#400040">PLEASE SELECT <b>HOSTEL NAME</b> AND <b>ROOM NUMBER</b> YOU WANT TO BOOK | THIS ROOM WIIL BE <b>ALLOCATED FOR ONLY ONE SEMESTER</b></p>
<fieldset id="allocform">
<legend>Hostel booking Details</legend>
<table align="center" width="700" border="0"> 
<tr><td align="center"><label for="student">Student No:
<input type="text" name="student" id="student" value=<?php $id = $_GET['id']; echo $id; ?> disabled /></label></td>
<td align="right"><label for="hname">Hostelname:
<select id="hname" name="hname" >
    <?php
	$sql7 = "SELECT hostelid,hostelname FROM hostel";
	$db7 = new Database($sql7);
	$resp = $db7->execute_query();
	while ($row = mysqli_fetch_row($resp)){
		echo "<option value=$row[1]>$row[1]</option>";
		}
	?>
</select></label>
</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td align="center"><label  for="roomno">Room No:&nbsp;&nbsp;
<select id="roomno" name="roomno" >
    <?php
	$sql8 = "SELECT roomno FROM room";
	$db8 = new Database($sql8);
	$resp = $db8->execute_query();
	while ($row = mysqli_fetch_row($resp)){
		echo "<option value=$row[0]>$row[0]</option>";
		}
	?>
</select></label></td>
<td align="right"><label for="yr_of_study">Acad Year:
    <?php 
	$sql = "SELECT year,sem FROM session";
	$db = new Database($sql);
	$resp = $db->execute_query();
	$sem = "";
	$year = "";
	while ($row = mysqli_fetch_row($resp)){
		$year = $row[0];
		$sem = $row[1];
		}
		echo "<input id=yr_of_study name=yr_of_study value=$year disabled />";
	?></label>
</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<br />
<tr><td align="center"><label for="semester">Semester:&nbsp;&nbsp;
    <?php 
	$sql = "SELECT year,sem FROM session";
	$db = new Database($sql);
	$resp = $db->execute_query();
	$sem = "";
	$year = "";
	while ($row = mysqli_fetch_row($resp)){
		$year = $row[0];
		$sem = $row[1];
		}
		echo "<input id=semester name=semester value=$sem disabled />";
	?></label></td>
<td align="right"><label for="course">Course:
   <select id="course" name="course" >
    <?php
	$sql7 = "SELECT coursecode,coursename FROM course";
	$db7 = new Database($sql7);
	$resp = $db7->execute_query();
	while ($row = mysqli_fetch_row($resp)){
		echo "<option value=$row[0]>$row[1]</option>";
		}
	?>
</select></label>
</td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<br />
<tr><td align="center"><label for="department">Department:
   <select id="department" name="department" >
    <?php
	$sql7 = "SELECT code,departmentname FROM department";
	$db7 = new Database($sql7);
	$resp = $db7->execute_query();
	while ($row = mysqli_fetch_row($resp)){
		echo "<option value=$row[0]>$row[1]</option>";
		}
	?>
</select></label></td>
<td align="right"><label for="school">School of:
   <select id="school" name="school" >
    <?php
	$sql7 = "SELECT id,schoolname FROM school";
	$db7 = new Database($sql7);
	$resp = $db7->execute_query();
	while ($row = mysqli_fetch_row($resp)){
		echo "<option value=$row[0]>$row[1]</option>";
		}
	?>
</select></label>
</td></tr>
</table></div>
<br/><br/>
<div align="center">
<input type="submit" name="submit" id="btnbook" value="Submit Details" align="middle"/>
</div>
</fieldset>
</form>
<br/><br/>
</body>
 <?php
  include_once("footer.php");
  ?>
</html>




