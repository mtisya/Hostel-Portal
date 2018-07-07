<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles/formstyle.css" />
<link rel="stylesheet" href="styles/nyroModal.css" />
<title>About Us</title>
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
<div id="topnav" align="center">
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
	<li class="nav_label"><b><a href="admin/index.php" title="Add, Delete, Modify Hostels, Rooms, Student, School and More." target="self">Admin Module</a></b></li>
	</ul>
   <p align="center"><em>Apartments</em><a href="apartments.php"><img src="images/Kilwa_0084(1).jpg" alt="Insert Logo Here"
   name="Insert_logo" width="180px" height="150px" id="Insert_logo"  style="background-color: #FF6666; display:block;" /></a></p><br/>
 </div><br/><br/>
<form name="aboutus" action="aboutus.php"><br/>
<p align="center"><h2>About Technical University of Mombasa!</h2><hr></p>
<img src="images/tumlog.jpg" alt="Insert Logo Here" name="Insert_logo" width="200px" height="200px" id="Insert_logo" style="background-color: #FF6666; display:block;" border="1" align="right"/>
   <p align="left" style="color:#804040">Technical University of Mombasa (TUM) is a public Technical university Located in the coastal city of Mombasa, Kenya. It is one of the National Polytechnics recently elevated to a fully fledged University in Kenya. It encompasses the many benefits of a small University in the nation's Island city bordering the great Indian Ocean.<br/> Due to increasing number of students from remote parts of the country and outside the country the university senate saw that it was more convinient to accomodate students at the university compounds for easy access to the available resoucers.<br/> We have got five hostels in our university, which consist of two boy’s hostel and three girl’s hostel. All these hostel are located within the university compound, thus creating the best environment for reading at any time since classroom and libraries are easily accessible.<br/> Mesh services within the premises is also added advantage,it provides meals at reasonable price making affordable to all kind of students and staff. </p><br/><hr>
   <p align="right" style="color:#000033">Contact Us | Accomoddation Department<br> P.O Box 774563 90200 Mombasa Kenya<br>Fax 6575-783-4235 <br> Mobile: +254714795773 <br>E-mail: samtish2010@gmail.com</p>

</form>
</body>
<br/>
 <?php
  include_once("footer.php");
  ?>
</html>
