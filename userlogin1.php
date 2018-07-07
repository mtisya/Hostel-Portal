<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username'])) {
header('Location: student_home.php');
}
//$id_GET['id'];
?>
<title>userlogin1</title>
<link rel="stylesheet" href="styles/nyroModal.css" />
<link rel="stylesheet" href="styles/formstyle.css" />
<body>
<?php
  include_once("header.php");
  ?>
 <div class="sidebar1">
   <ul class="nav"><br/>
        <li><b><a href="index.php" id="homescript" data-remote="true" title="Homepage">Home</a></b></li><br/>
        <li><b><a href="#" title="About Us">About Us</a></b></li><br/>
        <li><b><a href="#" title="Contact Us">Contact Us</a></b></li><br/>
		<li><b><a href="home.php" title="Login to View Profile, Hostel and Book Room." target="_parent">Student Module</a></b></li><br/>		
		<li class="nav_label"><b><a href="admin/index.php" title="Administration Module: Add, Delete, Modify Hostels, Rooms, Student, School and More." target="new">Admin Module</a></b></li><br/>
	</ul>
   <p align="center"><em>Apartments</em><a href="apartments.php"><img src="images/Kilwa_0084(1).jpg" alt="Insert Logo Here"
   name="Insert_logo" width="180px" height="150px" id="Insert_logo" 
   style="background-color: #FF6666; display:block;" /></a></p><br/>
 </div>
<form action="userlogin1.php" method="post" required="required.html"><br/>
<h3 align="center">Please Login With Your Username and Password</h3>
<fieldset id="regform">
<img src="images/login3.jpg" id="imagelgn">&nbsp;&nbsp; 
<legend><marquee behavior="alternate" width="100%">Enter username and password</marquee></legend>
<label for="username">Username</label>
<input type="text" name="username" id="username" />
<label for="Password">Password</label>
<input type="Password" name="Password" id="Password" />
<fieldset id=notify>test</fieldset>
<div id=btndiv><tr><td><button id=btnlogin>Login</button><td/><td> <button id=btnsign>Signup</button></td></tr>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" title="Change Password" target="new">Forgot password</a></div>
</fieldset>
</form>
<script src="js/jquery.js"></script>
<script src="js/jquery.nyroModal.custom.js"></script>
<script src="js/login.js"></script>
</body>
<br/><br/><br/><br/><br/><br/>
 <?php
  include_once("footer.php");
  ?>

