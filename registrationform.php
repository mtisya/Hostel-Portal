<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
<title>regform</title>
<link rel="stylesheet" href="styles/formstyle.css" />
<script src="js/jquery.js"></script>
<script src="js/register.js"></script>
</head>
<body>
<?php
  include_once("header.php");
  ?>
  <br/>
<div id="topnav">
<nav align="center">
<hr><p style="margin:2px">
<a href="index.php"><button>Home</button></a> &nbsp; &nbsp;
<a href="profile.php"><button>Profile</button></a> &nbsp; &nbsp;
<a href="payments.php"><button>Payments</button></a> &nbsp; &nbsp;
<a href="booking.php"><button>Book Room?</button></a> &nbsp; &nbsp;
<a href="aboutus.php"><button>About Us</button></a> &nbsp; &nbsp;
<a href="contactus.php"><button>Contact Us</button></a></p><hr>
</nav></div>
   <div class="sidebar1">
   <ul class="nav"><br/>
        <li><b><a href="index.php" id="homescript" data-remote="true" title="Homepage">Home</a></b></li><br/>
        <li><b><a href="aboutus.php" title="About Us">About Us</a></b></li><br/>
        <li><b><a href="contactus.php" title="Contact Us">Contact Us</a></b></li><br/>
		<li><b><a href="student home.php" title="Login to View Profile, Hostel and Book Room." target="_parent">Student Module</a></b></li><br/>		
		<li class="nav_label"><b><a href="admin/index.php" title="Add, Delete, Modify Hostels, Rooms, Student, School and More." target="new">Admin Module</a></b></li><br/>
	</ul>
   <p align="center"><em>Apartments</em><a href="apartments.php"><img src="images/Kilwa_0084(1).jpg" alt="Insert Logo Here"
   name="Insert_logo" width="180px" height="150px" id="Insert_logo" 
   style="background-color: #FF6666; display:block;" /></a></p><br/>
 </div><br/><br/><br/>
<form name="regform" method="POST" action="">
<p align="center"> Remember your <b>username</b> and <b>password</b> will be required during <b>login</b> </p>
<fieldset id="regform" > <img src="images/rgg.jpg" id="imagergstr" width="150px" height="130px"  align="right">&nbsp;&nbsp;   
<legend>Required Your Username and Password</legend>
<label for="username">Username</label>
<input type="text" name="username" id="username" placeholder=" Enter username" /><span id="erruname" class="error"><img src="images/warning.png" /></span>
<label for="password">Password</label>
<input type="password" name="passwd" id="passwd" placeholder=" Enter password"/><span id="errpasswd" class="error"><img src="images/warning.png" /></span>
<label for="confirm password">Confirm Password</label>
<input type="password" name="Cpassword" id="Cpassword" placeholder=" Confirm password" /><span id="errconf" class="error"><img src="images/warning.png" /></span>
<fieldset id="notify">test</fieldset>
<button id=btnreg>Register</button>&nbsp;&nbsp;&nbsp;&nbsp;<a href="student home.php" title="Go back to Login Page" target="_parent">Back to Login</a>
</div>
</fieldset>
</form>
</body>
</html>
<br/>
 <?php
  include_once("footer.php");
  ?>

