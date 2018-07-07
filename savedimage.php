<?php
//connect to the database
mysql_connect("localhost","mutisya","kivaki") or die (mysql_error());
mysql_select_db("tumhostel")or die(mysql_error());
$id = addslashes($_REQUEST['id']);
$image = mysql_query("SELECT * FROM profilepicture WHERE id=$id");
$image = mysql_fetch_assoc($image); 
$image = $image['image'];
header ("content-type: image/jpeg");
echo $image;

?>
 