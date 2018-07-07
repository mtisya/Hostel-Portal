<?php
session_start();
include 'includes/database.php';
$uname = addslashes($_GET['username']);
$passwd =addslashes( $_GET['Password']);
$md5password = md5($_GET['Password']);
$sql = "SELECT * FROM register WHERE username = '$uname'" or die (mysql_error());
$db = new Database($sql);
$resp = $db->execute_query();
$num = $db->getNumRows();
if ($num<=0){
	echo "-1";
	}
else {
while ($row = mysqli_fetch_array($resp)){
	$dbpassword = $row['password'];
	$dbusername = $row['username'];
	if ($uname == $dbusername && $md5password == $dbpassword){
		echo "1";
		$_SESSION['username'] = $uname;
		}
	else {
		echo "0";
		}
	
	}
}
?>