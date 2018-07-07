<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['username'])) {
header('Location: studentlogin.php');
}
//$id_GET['id'];?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="styles/formstyle.css" />
<title>payments</title>
<link rel="shortcut icon" HREF="images/LOG5.jpg" />
<script src="js/jquery.js"></script>
<script src="js/jquery.nyroModal.custom.js"></script>
<script src="js/payment.js"></script>
</head>
<body>
<?php
  include_once("header.php");
  ?>
<br/>
<div align="right" style="margin-right:6em"  >Welcome: <?php echo $_SESSION['username']; ?> | <a href="logout.php" ><font color='orange'>Logout</font></a>
</div><br/>
<div id="topnav">
<nav align="center">
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
	<li><b><a href="index.php" id="homescript" data-remote="true" title="Homepage">Home</a></b></li>
	<li><b><a href="aboutus.php" title="About Us">About Us</a></b></li>
	<li><b><a href="contact.php" title="Contact Us">Contact Us</a></b></li>
	<li><b><a href="studenthome.php" title="Login to View Profile, Hostel and Book Room." target="_parent">Student Module</a></b></li>	
	<li class="nav_label"><b><a href="admin/index.php" title="Login to; Add, Delete, and Modify-Hostels, Rooms, Student, School and  create Reports." target="_self">Admin Module</a></b></li>
	</ul>
   <p align="center"><em>Apartments</em><a href="apartments.php"><img src="images/Kilwa_0084(1).jpg" alt="Insert Logo Here"
   name="Insert_logo" width="180px" height="150px" id="Insert_logo" 
   style="background-color: #FF6666; display:block;" /></a></p><br/>
 </div><br/>
<form name="studentpayments" method="GET" action=""><br/><br/>
<p align="center">Enter your<b> M-pesa payment 'ID'</b> here! For example J17S12539fGHF13... and <b>Amount Paid.</b></p>
<table border="0" align="left" width="500">
<tr><td align="right"><label for="studentid" flo>Student ID:<input type="text" name="studentid" id="studentid" /></label></td></tr>
<tr><td align="right"><label for="mpesa">M-pesa ID:<input type="text" name="mpesa" id="mpesa" /></label></td></tr>
<tr><td align="right"><label for="amount">Amount Paid:<input type="text" name="amount" id="amount" /></label></td></tr>
<p>&nbsp;</p>
<fieldset id=notify>test</fieldset>
<tr><td align="right" style="size:20%"><button id=btnpay>Submit</button></td></tr>
</table>
<p>&nbsp;</p> 
</form>
</body>
<br/><br/><br/><br/>
 <?php
  include_once("footer.php");
  ?>