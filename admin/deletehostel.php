<?php
$id = $_GET['id'];
$sql = "DELETE FROM hostel WHERE hostelid = '$id'";
include 'includes/Database.php';
$db = new Database($sql);
$db->execute_non_query();
header("Location: addhostel.php");
?>