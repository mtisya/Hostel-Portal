<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username'])) {
header('Location:#');
}
//$id_GET['id'];
?>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="styles/formstyle.css" />
<link rel="stylesheet" href="styles/nyroModal.css" />
<title>Home</title>
<script src="js/jquery.js"></script>
<script src="js/jquery.nyroModal.custom.js"></script>
<script src="js/login.js"></script>
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
<a href="studentprofile.php">Profile</a> &nbsp; &nbsp;
<a href="payments.php">Payments</a> &nbsp; &nbsp;
<a href="booking.php">Book Room?</a> &nbsp; &nbsp;
<a href="aboutus.php">About Us</a> &nbsp; &nbsp;
<a href="contact.php">Contact Us</a></p><hr>
</nav></div>
<div align="right" >Welcome: <?php echo $_SESSION['username']; ?> | <a href="logout.php" ><font color='orange'>Logout</font></a>
</div>
 <div class="sidebar1">
   <ul class="nav">
        <li><b><a href="index.php" id="homescript" data-remote="true" title="Homepage">Home</a></b></li>
        <li><b><a href="#" title="About Us">About Us</a></b></li>
        <li><b><a href="#" title="Contact Us">Contact Us</a></b></li><br/>
		<li><b><a href="home.php" title="Login to View Profile, Hostel and Book Room." target="_parent">Student Module</a></b></li><br/>		
		<li class="nav_label"><b><a href="admin/index.php" title="Administration Module: Add, Delete, Modify Hostels, Rooms, Student, School and More." target="new">Admin Module</a></b></li><br/>
	</ul>
   <p align="center"><em>Apartments</em><a href="apartments.php"><img src="images/Kilwa_0084(1).jpg" alt="Insert Logo Here"
   name="Insert_logo" width="180px" height="150px" id="Insert_logo" 
   style="background-color: #FF6666; display:block;" /></a></p><br/>
 </div>
</body>
<br/><br/><br/>
 <?php
  include_once("footer.php");
  ?>
  </html>
