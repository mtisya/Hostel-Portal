<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Report</title>
<link rel="stylesheet" href="styles/formstyle.css" />
<style>
h1 {
	font-family:calibri;
	font-size:1.5em;
	margin-left:2em;
	}
.links {
	margin-left:1.4em;
	margin-top:4em;
	text-decoration:none;
	font-family:calibri;
	font-weight:bold;
	color:teal;
	font-size:1.5em;
	}
#linkcont{
	overflow:scroll;
	}
#table{
width:95%;
height:100%;
margin:2em;
border:# #A7A7A7;
background-color:#CECECE;
}
</style>
<script>
function openWin(id){
	window.open('hostelhistory.php?id='+id,'win','width=600,height=300' );
	}
</script>
</head>

<body>
<?php
  include_once("header.php");
  ?>
    <br/>
<div id="topnav">
<nav align="center">
<hr><p style="margin:2px">
<a href="index.php">Home</a> &nbsp; &nbsp;
<a href="profile.php">Profile</a> &nbsp; &nbsp;
<a href="payments.php">Payments</a> &nbsp; &nbsp;
<a href="booking.php">Book Room?</a> &nbsp; &nbsp;
<a href="aboutus.php">About Us</a> &nbsp; &nbsp;
<a href="contact.php">Contact Us</a></p><hr>
</nav></div>
<div id="table"><table>
<?php
$links = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
$num = count($links);
echo "<div id=linkcont>";
for ($n=0;$n<$num;$n++){
	echo "<a href=#$links[$n] class=links>$links[$n]</a>";
	}
	echo "</div>";
include 'includes/Database.php';
$sql = "SELECT distinct upper(LEFT( fname, 1 )) FROM student ORDER BY LEFT(fname, 1)";
$db = new Database($sql);
$resp = $db->execute_query();
while ($row = mysqli_fetch_row($resp)){
	echo "<h1 id=$row[0]>$row[0]</h1>";
	$sql2 = "SELECT concat(fname,' ',lname),studentid from student where fname like '$row[0]%'";
	$db2 = new Database($sql2);
	$resp2 = $db2->execute_query();
			echo "<ul>";

	while ($row = mysqli_fetch_row($resp2)){
		echo "<li><a href=javascript:openWin('$row[1]')>$row[0]</a></li>";
		}
		echo "</ul>";
	}

?>
<table/></div>
 <?php
  include_once("footer.php");
  ?>
</body>
</html>
