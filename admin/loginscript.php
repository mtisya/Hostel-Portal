<?php
session_start();
include 'includes/Database.php';
$uname = $_GET['username'];
$passwd = $_GET['password'];
$sql = "SELECT username,salt FROM user WHERE username = '$uname'";
$db = new Database($sql);
$resp = $db->execute_query();
$num = $db->getNumRows();
if ($num<=0){
	echo "-1";
	}
else {
while ($row = mysqli_fetch_row($resp)){
	$password = $row[1];
	$username = $row[0];
	if (md5($passwd)==$password){
		echo "1";
		$_SESSION['Admin'] = $uname;
		}
	else {
		echo "0";
		}
	
	}
}
?>