<?php
include 'includes/Database.php';
$id = $_GET['id'];
$sql = "SELECT COUNT(*) FROM student WHERE studentid = '$id'";
$db = new Database($sql);
$resp = $db->execute_query();
while ($row = mysql_fetch_row($resp)){
	echo $row[0];
	}

?>