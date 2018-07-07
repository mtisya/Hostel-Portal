<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['Admin'])) {
header('Location: index.php');
}
include_once ("db_connection.php");
  if(isset($_POST['submit']))
  {
	$hid=$_POST['hostelid'];
	$hname=$_POST['hostelname'];
	$cpcty=$_POST['capacity'];
	$lctn= $_POST['location'];
	$gender= $_POST['gender'];
//Insert Into Database
$sql="INSERT INTO hostel VALUES('$hid','$hname','$cpcty','$lctn','$gender')" ;
$insert= mysqli_query($link,$sql);
	if ($insert)
     {
	echo "<br>Successfully Inserted:<br>";
	}
	else  {
		 echo "<br>Error Inserting to Specified Table:<br>".mysql_error();
	}
  }
?>
<title>Add hostel</title>
<link rel="shortcut icon" HREF="images/LOG5.jpg" />
<link rel="stylesheet" href="styles/formstyle.css"/>
<script>
function redirect(id){
	if (confirm("Are You sure you want to delete this record")){
		document.location = "deletehostel.php?id="+id
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
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<h3 align="center"> Add / Delete Hostel in The Database </h3>
<table id="profile1">
<form action="addhostel.php" method="post">
<legend>Add Hostel </legend>
<tr><td align="right"><label for="hostelid">Hostelid:
<input type="text" name="hostelid" id="hostelid" required="required"/></label></td>
<td align="left"><label for="hostelname">Hostelname:
<input type="text" name="hostelname" id="hostelname" required="required" /></label></td></tr>
<tr><td align="right"><label for="capacity">Capacity: 
<input type="text" name="capacity" id="capacity" required="required" /></label> </td>
<td align="left"><label for="location">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Location:
<input type="text" name="location" id="location" align="right" /></label></td></tr>
<tr><td align="right"><label for='gender'>Gender:
<select name=gender id=gender>
<option value="male">Male</option>
<option value="female">Female</option>
</select></label></td>
<td align="center"><input type="submit" name="submit" id="submit" value="submit" /></td></tr>
</form>
</table>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<fieldset style="background-color:#D8EBEB">
<legend>Added Hostels</legend>
<table id=hostels border="0" align="center" width="80%">
<tr><th>HostelID</th><th>HostelName</th><th>Capacity</th><th>Location</th><th>Gender</th></tr>
<?php
include '../includes/Database.php';
$sql = "SELECT * FROM hostel";
$db = new Database($sql);
$resp = $db->execute_query();
while ($row = mysqli_fetch_row($resp)){
	echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>
	<a href=javascript:redirect('$row[0]')>Delete/Edit</a></td></tr>";
	}
?>
</table>
</fieldset><br/><br/><br/>
</body>
<?php
  include_once("footer.php");
?>
</html>