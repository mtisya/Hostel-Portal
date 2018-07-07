<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username'])) {
header('Location: studenthome.php');
}
//$id_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles/formstyle.css" />
<title>Student Login</title>
<link rel="shortcut icon" HREF="images/LOG5.jpg" />
 <script src="js/jquery.js"></script>
 <script src="js/login.js"></script>
</head>
<body>
<?php
  include_once("header.php");
  ?>
<br/>
<div id="topnav" align="center">
<hr><p style="margin:2px">
<a href="index.php"><button>Home</button></a> &nbsp; &nbsp;
<a href="studentprofile.php"><button>Profile</button></a> &nbsp; &nbsp;
<a href="payments.php"><button>Payments</button></a> &nbsp; &nbsp;
<a href="booking.php"><button>Book Room?</button></a> &nbsp; &nbsp;
<a href="qallery.php"><button>Gallery</button></a> &nbsp; &nbsp;
<a href="aboutus.php"><button>About Us</button></a> &nbsp; &nbsp;
<a href="contact.php"><button>Contact Us</button></a></p><hr>
</div>
 <div class="sidebar1">
   <ul class="nav">
        <li><b><a href="index.php" id="homescript" data-remote="true" title="Homepage">Home</a></b></li>
        <li><b><a href="aboutus.php" title="About Us">About Us</a></b></li>
        <li><b><a href="contact.php" title="Contact Us">Contact Us</a></b></li>
		<li><b><a href="studenthome.php" title="Login to View Profile, Hostel and Book Room." target="_self">Student Module</a></b></li>		
		<li class="nav_label"><b><a href="admin/index.php" title="Add, Delete, Modify Hostels, Rooms, Student, School and More." target="self">Admin Module</a></b></li><br/>
	</ul>
   <p align="center"><em>Apartments</em><a href="apartments.php"><img src="images/Kilwa_0084(1).jpg" alt="Insert Logo Here"
   name="Insert_logo" width="180px" height="150px" id="Insert_logo"  style="background-color: #FF6666; display:block;" /></a></p><br/>
 </div>
<form  method="POST" action=""><br/>
<p align="center">Please Login With Your Username and Password You Registered With or <a href="regform.php" title="Register here" target="_self">SignUp?</a> to Register.</p><br/><br/>
<fieldset id="regform">
<img src="images/login3.jpg" id="imagelgn">&nbsp;&nbsp; 
<legend><marquee behavior="alternate" width="100%">Enter username and password</marquee></legend>
<label for="username">Username</label>
<input type="text" name="username" id="username" />
<label for="Password">Password</label>
<input type="Password" name="Password" id="Password" /><br />
<fieldset id="notify">test</fieldset>
<button id=btnlogin>Login</button>&nbsp;&nbsp;&nbsp;&nbsp;<button id=btnsign>Signup</button>
&nbsp;&nbsp;&nbsp;&nbsp;<a rel="facebox" href=recover.php>Forgot Password? </a></div>
</fieldset>
</form>
</body>
<br/><br/><br/>
 <?php
  include_once("footer.php");
  ?>
</html>


