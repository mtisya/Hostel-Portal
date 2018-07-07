<?php
$con = mysqli_connect("localhost","root","");
// Make sure we connected succesfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
$uname = $_GET['username'];
$passwd = $_GET['passwd'];
$encpasswd = md5($passwd);
$sql = "INSERT INTO users VALUES (NULL,'$uname','$encpasswd')";
mysqli_select_db($con,$sql);

?>
