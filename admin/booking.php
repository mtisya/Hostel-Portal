<?php
require_once("db_connection.php");

$studentquery="SELECT studentid,fname,lname,mobile FROM student";
 $studentresult=mysql_query($studentquery) or die ("Query to get data from student failed: ".mysql_error());
$tstudentid="";
$tfnameid="";
$tlnameid="";
$tmobileid="";


 while ($row=mysql_fetch_array($studentresult)) 
 {
$tstudentid=$row["studentid"];
$tfnameid=$row["fname"];
$tlnameid=$row["lname"];
$tmobileid=$row["mobile"];


 
 
if(isset($_POST['submit']))
	{
	
	
	//Select Database
	//Insert Into Database
$studentid=$_POST['studentid'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$mobileno=$_POST['mobileno'];
if($studentid==$tstudentid && $firstname==$tfnameid && $lastname=$tlnameid &&$mobileno==$tmobileid ){
	
header("location:alloc.php");
}
else
{
	echo "you are not a student in TUOMSA";
}

	}
 }
	
?>

<head>
<style>
body {
	background-color:#;
	}
	.div {
	font-size: 16px;
}
</style>
<link rel="stylesheet" href="styles/formstyle.css" />
<title>booking</title>
<script src="js/jquery.js"></script>
<script src="js/register.js"></script>
<script src="js/booking.js"></script>
</head>


<body>
<fieldset style="background-color:#0FF"><legend>booking</legend>
<h1 align="center">Technical University of mombasa Online Hostel </h1>
<h2 align="center">Enter your details here to book hostel</h2>
  <table border="0" align="center" style="background-color:#6CF" width="600">
<form id="form1" name="form1" method="post" action="booking.php">
    <tr>
      <td><p>studenid</p>
        
          <span id="sprytextfield1">
            <label for="studentid"></label>
            <input type="text" name="studentid" id="studentid" />
            <span class="textfieldRequiredMsg"></span></span>
        </td>
    </tr>
    <tr>
      <td><p>Firstname</p>
       
          <span id="sprytextfield2">
            <label for="firstname"></label>
            <input type="text" name="firstname" id="firstname" disabled />
            <span class="textfieldRequiredMsg"></span></span>
      </td>
    </tr>
    <tr>
      <td><p>Lastname</p>
      
          <span id="sprytextfield3">
            <label for="lastname"></label>
            <input type="text" name="lastname" id="lastname" disabled />
            <span class="textfieldRequiredMsg"></span></span>
        </td>
    </tr>
    <tr>
<td><p>Mobile number</p>
<span id="sprytextfield4">
<label for="mobileno"></label>
<input type="text" name="mobileno" id="mobileno" disabled />
<button id=btnsubmit>Book Room</button>
</form></td></tr>
  </table>
  <p>&nbsp;</p>
</fieldset>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
</script>
</body>
</html>