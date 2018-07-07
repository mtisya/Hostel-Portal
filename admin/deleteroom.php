<?php
$id = $_GET['id'];
$sql = "DELETE FROM room WHERE roomno = '$id'";
include 'includes/Database.php';
$db = new Database($sql);
$db->execute_non_query();
header("Location: addroom.php");
?>