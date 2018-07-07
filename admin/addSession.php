<?php
include ('includes/Database.php');
$year = $_GET['year'];
$sem = $_GET['sem'];
$sql1 = "Delete From session";
$sql = "INSERT INTO session VALUES(null,'$year','$sem')";
$db = new Database($sql1);
$db->execute_non_query();
$db2 = new Database($sql);
$db2->execute_non_query();
echo "Session Set";
?>