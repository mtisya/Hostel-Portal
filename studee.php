<?php
include 'includes/Database.php';
$username = $_POST['username'];
$passwd = $_POST['passwd'];
$encpasswd = md5($passwd);
$sql = "INSERT INTO `tumhostel`.`user` VALUES (NULL,'$username','$encpasswd')" or die ("Couldn't insert to the specified table");
$db = new Database($sql);
$db->execute_non_query();
?>