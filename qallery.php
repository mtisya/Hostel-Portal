<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Photo Gallery</title>
<link rel="shortcut icon" HREF="images/LOG5.jpg" />
<link rel="stylesheet" href="styles/formstyle.css" />
<style>
ul {
list-style-type: none;
width:auto;
height:500px;
}
li {
float: left;
padding: 10px;
margin: 10px;
font: bold 10px Verdana, sans-serif;
}
img {
display: block;
border: 1px solid thin;
margin-bottom: 5px;
}
</style>
</head>
<?php
  include_once("header.php");
  ?>
 <br />
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
<form id="galleryform" action="qallery.php">
<ul><?php
// define location of photo images
// this must be a location accessible by the script owner
$photosDir = '../hostel1/images/photos';
// define which file extensions are images
$photosExt = array('gif', 'jpg', 'jpeg', 'tif', 'tiff', 'bmp', 'png');
// initialize array to hold filenames of images found
$photosList = array();
// read directory contents
// build photo list
if (file_exists($photosDir)) {
$dp = opendir($photosDir) or die ('ERROR: Cannot open directory');
while ($file = readdir($dp)) {
if ($file != '.' && $file != '..') {
$fileData = pathinfo($file);
if (in_array($fileData['extension'], $photosExt)) {
$photosList[] = "$photosDir/$file";
}
}
}
closedir($dp);
} else {
die ('ERROR: Directory does not exist.');
}
// iterate over photo list
// display each image and filename
if (count($photosList) > 0) {
for ($x=0; $x<count($photosList); $x++) {
?>
<li>
<img height="100" width="100"
src="<?php echo $photosList[$x]; ?>" />
<?php echo basename($photosList[$x]); ?><br/>
<?php echo round(filesize($photosList[$x])/1024) . ' KB'; ?>
</li>
<?php
}
} else {
die('ERROR: No images found in directory');
}
?>
</ul>
</form>
</body>
<?php
  include_once("footer.php");
  ?>
</html>




