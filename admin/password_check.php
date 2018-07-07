<?php
include "includes/Database.php";
$sql = "SELECT password,salt from user";
$db = new Database($sql);
$resp = $db->execute_query();
$currpassd = "";
$salt = "";
while ($row=mysqli_fetch_row($resp)){
	$currpassd = $row[0];
	$salt = $row[1];
	}
	if ($currpassd == md5("admin",$salt)){
		header("location: passchange.php");
		}
		else {
			header("location: home.php");
			}

?>