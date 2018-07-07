<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['Admin'])) {
header('Location: index.php');
}
require_once("db_connection.php");
?>
<?php
  if(isset($_POST['submit']))
	{
	//Insert Into Database
	$roomno=$_POST['roomno'];
	$capacity=$_POST['capacity'];
	$hostelname=$_POST['hostelname'];
$sql="INSERT INTO room (roomno,capacity,hostelname)
VALUES('$roomno','$capacity','$hostelname')" or die (mysql_error());
$insert= mysqli_query($link,$sql);
	if ($insert)
	{
echo "<h1>Room added Successfully!</h1>";
}
	else
     {
	echo "<br>Correct all Errors<br>" . mysql_error();
	} 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Add Room</title>
<link rel="shortcut icon" HREF="images/LOG5.jpg" />
<link rel="stylesheet" href="styles/formstyle.css"/>
<script>
function redirect(id){
	if (confirm("Are You sure you want to delete this record")){
		document.location = "deleteroom.php?id="+id
		}
	}
</script>
<script src="js/jquery.js"></script>
<script src="js/jquery.nyroModal.custom.js"></script>
<script src="js/login.js"></script>
</head>
<body>
  <?php
  include_once("header.php");
  ?>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<h3 align="center"> Add / Delete Rooms in The Databases </h3>  
<form action="addroom.php" method="post"  id="regform">
<legend>Add Room </legend>
<label for="roomno" >Room No:&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="text" name="roomno" id="roomno" required />
<label for='capacity'>&nbsp;Capacity:</label>
<select name=capacity id=capacity>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
<label for="hostelname">&nbsp;Hostelname:</label>
<select id="hostelname" name="hostelname" >
  <?php
include '../includes/Database.php';
$sql = "SELECT hostelid,hostelname FROM hostel";
$db = new Database($sql);
$resp = $db->execute_query();
while ($row = mysqli_fetch_row($resp)){
	echo "<option>$row[1]</option>";
	}
?>
</select><br /><br />
<input type="submit" name="submit" id="submit" value="Submit" align="middle" />
</form>
<fieldset style="background-color:#D8EBEB; width:40%; padding:10px; margin-right:10%;" >
<legend>Added Rooms</legend>
<table id=hostels border="0" align="center" width="100%">
<tr><th>Room No</th><th>Capacity</th><th>Hostelname</th></tr>
<?php
$sql = "SELECT * FROM room";
$db = new Database($sql);
$resp = $db->execute_query();
while ($row = mysqli_fetch_row($resp)){
echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td><a href=javascript:redirect('$row[0]')>Delete/Edit</a></td></tr>";
	}
?>
</table>
</fieldset><br /><br />
</body>
 <?php
   include_once("footer.php");
  ?>
</html>

