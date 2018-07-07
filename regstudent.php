<?php
include 'includes/Database.php';
$uname = $_GET['username'];
$passwd = $_GET['passwd'];
$encpasswd = md5($passwd);
$sql = "INSERT INTO user VALUES ('$uname','$encpasswd') " or die (mysql_error());
$insert= mysqli_query($sql);
	if ($insert)
	{
echo "<h2>Regitered Successfully!</h2>";
}
	else
     {
	echo "<br>Correct all Errors<br>" . mysql_error();
	} 
$db = new Database($sql);
$db->execute_non_query();
?>