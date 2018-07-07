<?php
//connect to the database
mysql_connect("localhost","mutisya","kivaki") or die (mysql_error());
mysql_select_db("tumhostel")or die(mysql_error());
//file properties
$file = $_FILES['image']['tmp_name'];
if (!isset($file))
echo "please select an image";
else {
 $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
 $image_name = addslashes($_FILES['image']['name']);
 $image_size = getimagesize($_FILES['image']['tmp_name']);
 
 if ($image_size==FALSE)
 echo "That's Not an Image.";
 else{
if(!$insert = mysql_query("INSERT INTO profilepicture VALUES ('','$image_name','$image')"))
echo "Problem Upoading Image.";
else {
$lastid = mysql_insert_id();
echo "Image Uploaded .<p>Your image:</p ><img src=savedimage.php?id=$lastid>";
}
 }
}
?>