<?php 
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['Admin'])) {
header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Home</title>
<link rel="shortcut icon" HREF="images/LOG5.jpg" />
<link rel="stylesheet" href="styles/formstyle.css">
</head>
<body>
  <?php
  include_once("header.php");
  ?>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div id="homediv">
<p><u><b><a href="home.php" title="Administration Home Page" target="_self">Administration Module</a></b></u><br><br>
<em>With this module, Technical University 0f Mombasa Hostel system management Team Can Control and Manage System Data/information and also the generation of different Reports, Verification of Mpesa Payments and sending information back to student as required.</em></p>
</div>
</body>
 <?php
   include_once("footer.php");
  ?>
</html>