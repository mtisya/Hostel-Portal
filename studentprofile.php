<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['username'])) {
header('Location: studentlogin.php');
}
?>
<html>
<head>
<title>student profile</title>
<link rel="shortcut icon" HREF="images/LOG5.jpg" />
<link rel="stylesheet" type="text/css" href="/hostel1/styles/formstyle.css" />
<script src="/hostel1/js/jquery.js"></script>
<script src="/hostel1/js/jquery.nyroModal.custom.js"></script>
<script src="/hostel1/js/stdntprofile.js"></script>
</head>
<body>
<?php
  include_once("header.php");
  ?>
<br/>
<div align="right" style="margin-right:6em" >Welcome: <?php echo $_SESSION['username']; ?> | <a href="logout.php" ><font color='orange'>Logout</font></a></div><br/>
<div id="topnav">
<nav align="center">
<hr><p style="margin:4px">
<a href="index.php"><button>Home</button></a> &nbsp; &nbsp;
<a href="studentprofile.php"><button>Profile</button></a> &nbsp; &nbsp;
<a href="payments.php"><button>Payments</button></a> &nbsp; &nbsp;
<a href="booking.php"><button>Book Room?</button></a> &nbsp; &nbsp;
<a href="qallery.php"><button>Gallery</button></a> &nbsp; &nbsp;
<a href="aboutus.php"><button>About Us</button></a> &nbsp; &nbsp;
<a href="contact.php"><button>Contact Us</button></a></p><hr>
</nav></div><br /><br />
<div class="sidebar1">
<ul class="nav">
<li><b><a href="index.php" id="homescript" title="Homepage">Home</a></b></li>
<li><b><a href="aboutus.php" title="About Us">About Us</a></b></li>
<li><b><a href="contact.php" title="Contact Us">Contact Us</a></b></li>
<li><b><a href="studenthome.php" title="Login to View Profile, Hostel and Book Room." target="_parent">Student Module</a></b></li>	
<li class="nav_label"><b><a href="admin/index.php" title="Administer Hostels, Rooms and More."target="new">Admin Module</a></b></li>
</ul> <p align="center"><em>Apartments</em><a href="apartments.php"><img src="images/Kilwa_0084(1).jpg" alt="Insert Logo Here"
 name="Insert_logo" width="180px" height="150px" id="Insert_logo"  style="background-color: #FF6666; display:block;" /></a>
</p></div><br /><br /><br />
<form method="post" id="form1" action="">
<?php
 //connect to the database
mysql_connect("localhost","mutisya","kivaki") or die (mysql_error());
mysql_select_db("tumhostel")or die(mysql_error());
$username = $_SESSION['username'];
if (isset($username))
{
$check = mysql_query("SELECT * FROM profilepicture WHERE username = '$username'");
$row = mysql_num_rows($check);
if($row==0)
header('Location: studentprofile1.php');
else {
$user = "SELECT image FROM profilepicture WHERE username = '$username'";
echo "<div style=margin-left:4%; border=1>.<p>Your Saved image:</p ><img src=savedpicture.php?username=$user width=20% height=15%></div>";
}
}
else {
echo "contact adminstration";
}
?>
<br><br>
<table id="profile1">
<tr><td align="right">Registration No:<input type="text" name="RegNo" id="RegNo" ></td>
 <td align="right">FirstName:<input type="text" name="firstname" id="firstname" ></td></tr>
 <tr><td align="right">LastName:<input type="text" name="lastname" id="lastname"></td>
 <td align="right">Username:<input type="text" name="username" id="username"></td></tr>
 <tr><td align="right">Mobile No:<input type="text" name="mobileno" id="mobileno"></td>
 <td align="right">Home County:<input type="text" name="county" id="county"></td></tr>
  <tr><td align="right">Email:<input type="text" name="mail" id="mail"></td>
 <td align="right"><input type="submit" id=btnpfle value="Submit Details"></input></td></tr>
</table><br /><br />
</form>
</body><br />
<?php
include_once("footer.php");
  ?>
</html>