<?php 
//Connect to the Database  
include "includes/Database.php";
//define Variables
$uname=$_GET['username'];
$passwd=$_GET['passwd'];
$md5password = md5($_GET['passwd']);
//check if username exists
$sql = "SELECT COUNT(*) FROM tumhostel.register where username = '$uname'";
$db = new database($sql);
$resp = $db->execute_query();
while ($row = mysqli_fetch_row($resp)){
	echo $row[0];
	}
//insert values into Database
$sql2="INSERT INTO tumhostel.register(username,password) VALUES ('$uname','$md5password')" or die ("Error inserting to the table: ".mysql_error());
$db = new database($sql2);
$db->execute_non_query();
?>
