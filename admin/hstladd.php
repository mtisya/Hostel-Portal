<?php
include ("db_connection.php");
  if(isset($_POST['submit']))
  {
	$hid=$_POST['hostelid'];
	$hname=$_POST['hostelname'];
	$cpcty=$_POST['capacity'];
	$lctn= $_POST['location'];
	$gender= $_POST['gender'];
//Insert Into Database
$sql="INSERT INTO hostell 
VALUES('$hid','$hname','$cpcty','$lctn','$gender')" or die ("Error inserting to specified table: ".mysql_error());
$insert= mysqli_query($link,$sql);
	if ($insert)
     {
	echo "<br> Successful <br>";
	}
	else  {
		die (mysql_error());
	}
  }
?>