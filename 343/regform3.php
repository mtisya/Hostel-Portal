<?php

	if(isset($_POST['submit']))
	{
	$connection= mysqli_connect("localhost","root","");
		if($connection){
	echo "<br><br><br><br>Connection Established";
	
	//else
	//{
	//echo "coonection fail";
	//}
	//Select Database
	
	
	//Insert Into Database

	$registration=$_POST['registration'];
	$studentid=$_POST['studentid'];
	$course=$_POST['courseid'];
	$room= $_POST['roomid'];
	$gender=$_POST['gender'];

	
$sql="INSERT INTO registration (regcode, studentid, courseid, roomid, gender) 
VALUES ('$registration','$studentid','$course','$room','$gender')";
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
	}

$sql_rec = "SELECT studentid FROM student";
$result = mysql_query($sql_rec);
if (!$result) {
    echo "Could not successfully run query  from DB: " . mysql_error();
    exit;
}

if (mysql_num_rows($result) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}
while ($row = mysql_num_rows($result)) {
$id = $row['id'];
echo $id;
}
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

<h1 align="center">Technical University of mombasa Online Hostel </h1>
<h2 align="center">Student Registration Form</h2>

<form action="regform3.php" method="post" >
<div align="center" style="background-color:#0FC" width="" heigth="300">  
<legend align="center" class="div"> Enter you details here<br/>
</legend>
<table border="0">
  <tr><td><label for='registration' >Registration num<input type='text' name='registration' id='registration' maxlength="" />ber: </label></td>
<td> </td>
</tr> 
<tr><td><label for='studentid' >Studentid: </label></td>
<td><select><option></option><option><?php echo $id ?></option>
<option>10540</option></select><td></tr><br>
<tr><td><label for='course' >Course: </label></td>
<td><select><option></option><option>B.I.T</option>
<option>BBA</option></select><td></tr>
<tr><td><label for='room'>Room:</label></td>
<td><select><option></option><option>001</option>
<option>002</option></select><td></tr>
<tr><td><label for='gender' >gender:</label></td>
<td><select><option>Male</option>
<option>Female</option></select><td></tr>
<tr><td></td><td><div align="center">
<input type='submit' name='submit' value='Submit' />
</div></td></tr></table>
</div>
</form>