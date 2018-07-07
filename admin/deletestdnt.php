<?php
$id = $_GET['id'];
$sql = "DELETE FROM student WHERE studentid = '$id'";
include 'includes/Database.php';
$db = new Database($sql);
$db->execute_non_query();
header("Location: reg.php");
?>