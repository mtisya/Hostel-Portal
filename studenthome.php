<?php 
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['username'])) {
header('Location: studentlogin.php');
}
//$id_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles/formstyle.css" />
<link rel="stylesheet" href="styles/nyroModal.css" />
<title>Student Home</title>
<link rel="shortcut icon" HREF="images/LOG5.jpg" />
<script src="js/jquery.js"></script>
<script src="js/jquery.nyroModal.custom.js"></script>
<script src="js/login.js"></script>
</head>
<body>
<?php
  include_once("header.php");
  ?>
<br/>
<div align="right" >Welcome: <?php echo $_SESSION['username']; ?> | <a href="logout.php" ><font color='orange'>Logout</font></a>
</div><br/>
<div id="topnav">
<nav align="center">
<hr><p style="margin:2px">
<a href="index.php"><button>Home</button></a> &nbsp; &nbsp;
<a href="studentprofile.php"><button>Profile</button></a> &nbsp; &nbsp;
<a href="payments.php"><button>Payments</button></a> &nbsp; &nbsp;
<a href="booking.php"><button>Book Room?</button></a> &nbsp; &nbsp;
<a href="qallery.php"><button>Qallery</button></a> &nbsp; &nbsp;
<a href="aboutus.php"><button>About Us</button></a> &nbsp; &nbsp;
<a href="contact.php"><button>Contact Us</button></a></p><hr>
</nav></div>
 <div class="sidebar1">
   <ul class="nav">
        <li><b><a href="index.php" id="homescript"  title="Homepage">Home</a></b></li>
        <li><b><a href="aboutus.php" title="About Us">About Us</a></b></li>
        <li><b><a href="contact.php" title="Contact Us">Contact Us</a></b></li>
		<li><b><a href="studenthome.php" title="Login to View Profile, Hostel and Book Room." target="_parent">Student Module</a></b></li>	
		<li class="nav_label"><b><a href="admin/index.php" title="Add, Delete, Modify Hostels, Rooms, Student, School and More." target="new">Admin Module</a></b></li><br/>
	</ul>
   <p align="center"><em>Apartments</em><a href="apartments.php"><img src="images/Kilwa_0084(1).jpg" alt="Insert Logo Here"
   name="Insert_logo" width="180px" height="150px" id="Insert_logo"  style="background-color: #FF6666; display:block;" /></a></p><br/>
 </div><br/><br/>
<form name="studentloginform" method="GET" action="">
<p align="center"><h2>This is students home page!</h2><hr></p>
<table border="0.5" width="100%" >
<tr><td><img src="images/hostel11.jpg" alt="Insert Logo Here" name="Insert_logo" width="200px" height="180px" id="Insert_logo"  style="background-color: #FF6666; display:block;" align="right" border="1" /><p align="left"> Thank you for choosing to stay with us were are concerned with your comfort while you are with us.<br/> These software module is designed to help student book rooms while their at home after paying all the required accomodation fees as agreed by the management. On internet access, students can pay the accomondation fee through m - pesa or any other payment method, register themselves and book hostel room, in which the system will print receipt for future prove. Also student can view their profile and progress as their continue to stay with us. this new system reduces the workload involved with manual current system and the administrator can easily manage and control the hostel activities.<br/> These system is very easy to use, speed and accuracy are also added advantages of these new system, there is no redundancy of data, the data is stored in computer secondary storage, that system will easily handle all the data and the entire work done by the current system, and it is always available and reliable at any time. </p></td></tr><br/>
</table>
</form>
</body><br/>
 <?php
  include_once("footer.php");
  ?>
</html>

