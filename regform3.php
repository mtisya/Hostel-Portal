<?php
require_once("db_connection.php");
	if(isset($_POST['submit']))
	{
		$connection= mysqli_connect("localhost","root","");
		if($connection){
	echo "<br><br>Connection Established";
		}
	else
	{
	echo "coonection fail";
	}
	//Select Database
	mysqli_select_db($connection,"hostel")or die(mysql_errno());
	//Insert Into Database
	$registration=$_POST['registration'];
	$studentid=$_POST['studentid'];
	$courseid=$_POST['courseid'];
	$room= $_POST['roomid'];
	$gender=$_POST['genderid'];
$sql="INSERT INTO registration (regcode, studentid, coursecode, roomid, gender) 
VALUES ('$registration','$studentid','$courseid','$room','$gender')";
$insert=mysqli_query($connection,$sql);
	if ($insert)
	{
	echo "<br><br>";
	}
	else
     {
	echo "<br><br>" . mysqli_error($connection);
	 }
}


//code1_test sam
//Display the data using HTML along with a link
?>
<head>
<style>
body {
	background-color:#9FF;
	}
	.div {
	font-size: 16px;
}
</style>
</head>
<body>
<h1 align="center">Technical University of mombasa Online Hostel </h1>
<h2 align="center">Hostel Registration Form</h2>
<form action="regform3.php" method="post" >
<div align="center" style="background-color:#0FC" width="" heigth="300">  
<legend align="center" class="div"> Enter you details here<br/></legend>
<table border="0">
<tr><td><label for='registration' >Registration number:
<input type='text' name='registration' id='registration' maxlength="" /> </label>
</td></tr> 
<tr><td><label for='studentid'>Studentid: </label>
<select id="studentid" name="studentid"> <option></option>        
 <?php
$squery="SELECT studentid FROM student";
$sresult=mysql_query($squery) or die ("Query to get data from student failed: ".mysql_error());
while ($row=mysql_fetch_array($sresult)) {
$sid=$row["studentid"];
echo "<option>$sid </option>";
 }
 ?>
 </select></td></tr>
<tr><td><label for='courseid'>Course: </label>
<select id="courseid" name="courseid" > <option></option>        
<?php
$cquery="SELECT coursename FROM course";
 $cresult=mysql_query($cquery) or die ("Query to get data from course failed: ".mysql_error());
 while ($row=mysql_fetch_array($cresult)) {
$cid=$row["coursename"];
echo "<option>$cid </option>";
 }
?>
 </select></td></tr>
<tr><td><label for='roomid'>Room:</label>
<select id="roomid" name="roomid"> <option></option>        
 <?php
 $rquery="SELECT roomno FROM room";
$roomresult=mysql_query($rquery) or die ("Query to get data from room failed: ".mysql_error());
 while ($row=mysql_fetch_array($roomresult)) {
$rid=$row["roomno"];
echo "<option>$rid </option>";
 }
?>
</select><td></tr>
<tr><td><label for='genderid' >gender:</label>
<select id="genderid" name="genderid"><option></option><option>Male</option>
<option>Female</option></select></td></tr>
<tr><td><div align="center"><input type='submit' name='submit' value='Submit'/>
</div></td></tr>
</table>
</div>
</form>
