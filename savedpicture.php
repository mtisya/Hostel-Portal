<?php
// Inialize session
session_start();
//connect to the database
mysql_connect("localhost","mutisya","kivaki") or die (mysql_error());
mysql_select_db("tumhostel")or die(mysql_error());
$username = $_SESSION['username'];
$image = mysql_query("SELECT image FROM profilepicture WHERE username = '$username'");
$image = mysql_fetch_assoc($image); 
$image = $image['image'];
header ("content-type: image/jpeg");
echo $image;

?>
 
