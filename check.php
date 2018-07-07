<?php 
include 'includes/Database.php';
$username = $_POST['username'];
$sql = "SELECT username FROM user WHERE username='$username'" or die ('could not select username');
$query = mysql_query($sql);
$check_num_rows = mysql_num_rows($query);
echo "$check_num_rows";
?>
