<?php
include "includes/Database.php";
$uname=$_GET['username'];
//check if username exists
$sql = "SELECT COUNT(*) FROM tumhostel.register where username = '$uname'";
$db = new database($sql);
$resp = $db->execute_query();
while ($row = mysqli_fetch_row($resp)){
	echo $row[0];
	}
?>