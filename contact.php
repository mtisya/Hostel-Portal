<!DOCTYPE html>
<head>
<script>
function verifyEmail(){    
var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
     if (document.alokm.email.value.search(emailRegEx) == -1) {
          alert("Please enter a valid email address.");
     }
     return false;
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles/formstyle.css" />
<!-- Here is where your page title must go -->
<title>Contact Us</title>
<link rel="shortcut icon" HREF="images/LOG5.jpg" />
<!-- Metadescription and MetaKeyWords are used for SEO -->
<meta content="Metadescription" name="Insert the description of this page here" />
<meta content="MetaKeyWords" name="Insert the keywords that descrive this page here" />	
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
<a href="studentprofile.php"><button>Profile</button></a> &nbsp; &nbsp;
<a href="payments.php"><button>Payments</button></a> &nbsp; &nbsp;
<a href="booking.php"><button>Book Room?</button></a> &nbsp; &nbsp;
<a href="qallery.php"><button>Gallery</button></a> &nbsp; &nbsp;
<a href="aboutus.php"><button>About Us</button></a> &nbsp; &nbsp;
<a href="contact.php"><button>Contact Us</button></a></p><hr>
</nav></div>
<!--start left grid-->
<div id="form">
<h2>Contact Portal Management and Block user</h2>
<p> Like what you see? Like to see more? </p>
<p align="left">All information submitted in this form is confidential and will be used only by hostel mangement. This information will not be shared or sold to any third party for any purposes whatsoever without specific permission from the submitter.</p>
<h2>Block user</h2>
<p align="left">Use your username as <u><strong>name</strong></u> and message as <u><strong>username of block person</strong></u> and<u><strong> why? </strong></u></p>
</div>
<form class="form1" action="contact.php"  method="POST" target="_blank" name="alokm">
<p>Name<br><input type="text" name="name" /></p>
<p>Email<br /><input type="text" name="email" onBlur="verifyEmail();"/></p>
<p>Message<br /><textarea name="message" rows="5" cols="4" id="message_input"></textarea></p><br />
<input class="button" type="submit" value="Send"  />
<input class="button" id="reset" type="reset" value="Clear"/>
</form>
<!-- end grid -->
<!--start right grid-->
<div class="sidebargrid">
<h3>Other Contact Information Details</h3><hr />
<ul class="green">
	<li>TUM Hostel Management, P.O Box 1773-90200 Kitui.</li>
	<li>Mobile: 0714795773 </li>
	<li>Email: samtish2010@gmail.com</li>
	<li>Website: www.softwareorgan.com</li>
	<li>Nairobi, Kenya </li>
</ul>
<h3>Location</h3>
<div align="center"><a href="url()http://www.googlemaps.com/" ><img src="images/map.jpg" alt="location map" width="450" height="180" /></a></div></div><br><br>
		  <!-- end grid -->
		</div>
	</div>
	<script type="text/javascript"> Cufon.now(); </script>
</body> 
 <?php
  include_once("footer.php");
  ?>
</html>

