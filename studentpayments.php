<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['username'])) {
header('Location: studentlogin.php');
}
//$id_GET['id'];?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="styles/formstyle.css" />
<title>booking</title>
<link rel="shortcut icon" HREF="images/LOG5.jpg" />
<script src="js/jquery.js"></script>
<script src=""></script>
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
   <div class="sidebar1">
   <ul class="nav"><br/>
        <li><b><a href="index.php" id="homescript" data-remote="true" title="Homepage">Home</a></b></li><br/>
        <li><b><a href="aboutus.php" title="About Us">About Us</a></b></li><br/>
        <li><b><a href="contact.php" title="Contact Us">Contact Us</a></b></li><br/>
		<li><b><a href="student home.php" title="Login to View Profile, Hostel and Book Room." target="_parent">Student Module</a></b></li><br/>		
		<li class="nav_label"><b><a href="admin/index.php" title="Login to; Add, Delete, and Modify-Hostels, Rooms, Student, School and  create Reports." target="new">Admin Module</a></b></li><br/>
	</ul>
   <p align="center"><em>Apartments</em><a href="apartments.php"><img src="images/Kilwa_0084(1).jpg" alt="Insert Logo Here"
   name="Insert_logo" width="180px" height="150px" id="Insert_logo" 
   style="background-color: #FF6666; display:block;" /></a></p><br/>
 </div> 
<form name="studentpayments" method="POST" action="addpayment.php"><br/><br/>
<div align="right" >Welcome: <?php echo $_SESSION['username']; ?> | <a href="logout.php" ><font color='orange'>Logout</font></a>
</div><br/>
<p align="center">Enter your<b> M-pesa payment 'ID'</b> here! For example J17S12539fGHF13... and <b>Amount Paid.</b></p>
<table border="0" align="center" style="background-color:FFF" width="400">
<tr><td><br/>
<label align="right" for="mpesa">M-pesa Payment ID:&nbsp;
<input type="text" name="mpesa" id="mpesa" /></label>
</td></tr>
<tr><td>
<label align="right" for="amount">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amount Paid:&nbsp;&nbsp;&nbsp;
<input type="text" name="amount" id="amount" /></label>
</td></tr>
<p>&nbsp;</p><p>&nbsp;</p>

<tr><td align="right"><button >Submit</button></td></tr>
</table>
<p>&nbsp;</p>
</form>
</body>
<br/><br/><br/><br/>
 <?php
  include_once("footer.php");
  ?>