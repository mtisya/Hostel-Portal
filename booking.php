<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['username'])) {
header('Location: studentlogin.php');
}
//$id_GET['id'];
require_once("db_connection.php");
$studentquery="SELECT student.studentid,student.fname,student.lname,student.mobile,payments.verified FROM student LEFT JOIN payments ON student.studentid=payments.studentid WHERE student.studentid='studentid'";
$studentresult = mysqli_query($link,$studentquery) or die ("Query to get data from student failed: ".mysql_error());
$tstudentid="";
$tfnameid="";
$tlnameid="";
$tmobileid="";
$tverifiedid="";

 while ($row = mysqli_fetch_array($studentresult)) 
 {
$tstudentid=$row["studentid"];
$tfnameid=$row["fname"];
$tlnameid=$row["lname"];
$tmobileid=$row["mobile"];
$tverifiedid=$row["verified"];

if(isset($_POST['submit']))
	{
//Select from the Database

$studentid=$_POST['studentid'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$mobileno=$_POST['mobileno'];
$verified=$_POST['verified'];
if($studentid==$tstudentid && $firstname==$tfnameid && $lastname=$tlnameid && $mobileno==$tmobileid && $verified== $tverifiedid){
header("location:alloc.php");
}
else
{
	echo "you are not a student in TUM";
}
	}
 }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles/formstyle.css" />
<title>booking</title>
<link rel="shortcut icon" HREF="images/LOG5.jpg" />
<script src="js/jquery.js"></script>
<script src="js/jquery.nyroModal.custom.js"></script>
<script src="js/buk.js"></script>
</head>
<body>
<?php
  include_once("header.php");
  ?>
<br/>
<div align="right" style="margin-right:6em" >Welcome: <?php echo $_SESSION['username']; ?> | <a href="logout.php" ><font color='orange'>Logout</font></a></div><br/>
<div id="topnav" align="center">
<hr><p style="margin:2px">
<a href="index.php"><button>Home</button></a> &nbsp; &nbsp;
<a href="studentprofile.php"><button>Profile</button></a> &nbsp; &nbsp;
<a href="payments.php"><button>Payments</button></a> &nbsp; &nbsp;
<a href="booking.php"><button>Book Room?</button></a> &nbsp; &nbsp;
<a href="qallery.php"><button>Gallery</button></a> &nbsp; &nbsp;
<a href="aboutus.php"><button>About Us</button></a> &nbsp; &nbsp;
<a href="contact.php"><button>Contact Us</button></a></p><hr>
</div>
   <div class="sidebar1">
<ul class="nav">
	<li><b><a href="index.php" id="homescript" title="Homepage">Home</a></b></li>
	<li><b><a href="aboutus.php" title="About Us">About Us</a></b></li>
	<li><b><a href="contact.php" title="Contact Us">Contact Us</a></b></li>
	<li><b><a href="studenthome.php" title="Login to Student Module." target="_parent">Student Module</a></b></li>	
	<li class="nav_label"><b><a href="admin/index.php" title="Login to Administration Module." target="new">Admin Module</a></b></li>
</ul>
<p align="center"><em>Apartments</em><a href="apartments.php"><img src="images/Kilwa_0084(1).jpg" alt="Insert Logo Here"
name="Insert_logo" width="180px" height="150px" id="Insert_logo" style="background-color: #FF6666; display:block;" /></a></p><br/></div> 
<form name="booking" method="GET"><br/><br/>
<p align="center">Enter your school registration number here! For example J17S/12539/2013...</p>
<table border="0" align="left"  width="500">
<tr><td align="right"><label for="studentid"> Reg. No:<input type="text" name="studentid" id="studentid" /></label></td></tr>
<tr><td align="right"><label for="firstname">Firstname:<input type="text" name="firstname" id="firstname" disabled /></label></td></tr>
<p>&nbsp;</p>
<tr><td align="right"><label for="lastname">Lastname:<input type="text" name="lastname" id="lastname" disabled /></label></td></tr>
<tr><td align="right"><label for="mobileno">Mobile:<input type="text" name="mobileno" id="mobileno" disabled /></label>
<tr><td align="right"><label for="verified">Status:<input type="text" name="verified" id="verified" disabled /></label></td></tr>
<p>&nbsp;</p>
<tr><td align="right"><button id=btnsubmit >Book Room</button></td></tr>
</table>
</form>
</body>
<br/>
 <?php
  include_once("footer.php");
  ?>
</html>