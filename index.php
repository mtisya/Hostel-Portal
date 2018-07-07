<!DOCTYPE html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="styles/formstyle.css" />
<link rel="stylesheet" href="styles/nyroModal.css" />
<title>Home</title>
<link rel="shortcut icon" HREF="images/LOG5.jpg" />
<script src="js/jquery.js"></script>
<script src="js/jquery.nyroModal.custom.js"></script>
<script src="js/login.js"></script>
</head>
<body>
<?php
  include_once("header.php");
?> 
<div id="homediv">
 <h3>Welcome to Technical University of Mombasa Hostel Portal</h3><hr><br>
<p><u><b><a href="studenthome.php" title="Student Home Page" target="_self">Student Module</a></b></u><br><br>
<em>With this module, student can register themselves after which they can login and make payments for the accomodation through mpesa and book a room in one of the school based hostels.</em></p><br>
<p><u><b><a href="admin/index.php" title="Administration Home Page" target="self">Administration Module</a></b></u><br><br>
<em>With this module, TUM Hostel Portal management Team Can Control and Manage System Data and the generation of Reports, Verify Mpesa Payments and send mail back to student.</em></p>
</div><br>
<div class="sidebar1">
<ul class="nav">
<li><b><a href="index.php" id="homescript" data-remote="true" title="Homepage">Home</a></b></li>
<li><b><a href="aboutus.php" title="About Us">About Us</a></b></li>
<li><b><a href="contact.php" title="Contact Us">Contact Us</a></b></li>
<li><b><a href="studenthome.php" title="Login to View Profile, Hostel and Book Room." target="_parent">Student Module</a></b></li>		
<li class="nav_label"><b><a href="admin/index.php" title="Add, Delete, Modify Hostels, Rooms, Student, School and More." target="self">Admin Module</a></b></li><br/></ul>
 <p align="center"><em>Apartments</em><a href="apartments.php"><img src="images/Kilwa_0084(1).jpg" alt="Insert Logo Here"
   name="Insert_logo" width="180px" height="150px" id="Insert_logo" 
   style="background-color: #FF6666; display:block;" /></a></p><br/>
 </div><br>
</body>
 <?php
  include_once("footer.php");
  ?>
  </html>
