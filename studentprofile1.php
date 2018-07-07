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
<title>student profile</title>
<link rel="stylesheet" href="styles/formstyle.css" />
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
</div><br />
<div align="right" >Welcome: <?php echo $_SESSION['username']; ?> | <a href="logout.php" ><font color='orange'>Logout</font></a></div>
<div class="sidebar1">
<ul class="nav">
<li><b><a href="index.php" id="homescript" title="Homepage">Home</a></b></li>
<li><b><a href="aboutus.php" title="About Us">About Us</a></b></li>
<li><b><a href="contact.php" title="Contact Us">Contact Us</a></b></li>
<li><b><a href="studenthome.php" title="Login to View Profile, Hostel and Book Room." target="_parent">Student Module</a></b></li>		
<li class="nav_label"><b><a href="admin/index.php" title="Administer Hostels, Rooms and More."target="new">Admin Module</a></b></li>
</ul> <p align="center"><em>Apartments</em><a href="apartments.php"><img src="images/Kilwa_0084(1).jpg" alt="Insert Logo Here"
 name="Insert_logo" width="180px" height="150px" id="Insert_logo"  style="background-color: #FF6666; display:block;" /></a>
</p></div><br/>
<form action="studentprofile1.php" method="post" id="form1" enctype="multipart/form-data">
<div id="profile">File:<input type="file" name="image"><input type="submit" value="Upload"></div> <br>
<?php
 //connect to the database
mysql_connect("localhost","mutisya","kivaki") or die (mysql_error());
mysql_select_db("tumhostel")or die(mysql_error());
 //file properties
@$file = $_FILES['image']['tmp_name'];
if (!isset($file))
echo "please select an image";
else {
 $username = $_SESSION['username'];
 @$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
 $image_name = addslashes($_FILES['image']['name']);
 @$image_size = getimagesize($_FILES['image']['tmp_name']);
 
 if ($image_size==FALSE)
 echo "That's Not an Image";
 else{
if(!$insert = mysql_query("INSERT INTO profilepicture VALUES ('','$image_name','$image','$username')"))
echo "Problem Upoading Image";
else {
$lastid = mysql_insert_id();
echo "<div style=margin-left:4%; border=1>Image Uploaded.<p>Your image:</p ><img src=savedimage.php?id=$lastid width=20% height=15%></div>";
}
 }
}
?><br><br>
<table id="profile1">
 <tr><td align="right">Registration No:<input type="text" name="Reg No." ></td>
 <td align="right">FirstName:<input type="text" name="firstname" ></td></tr>
 <tr><td align="right">LastName:<input type="text" name="lastname"></td>
 <td align="right">Username:<input type="text" name="username" ></td></tr>
 <tr><td align="right">Mobile No:<input type="text" name="mobileno"></td>
 <td align="right">Home County:<input type="text" name="county"></td></tr>
  <tr><td align="right">Email:<input type="mail" name="mail"></td>
 <td align="center"><input type="submit" name="submit"></td></tr><br/>
</table>
</form>
</div>
</body>
<?php
include_once("footer.php");
  ?>
</html>
