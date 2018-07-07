<?php
$myServer = "localhost";
$myUser = "root";
$myPass = "";
$myDB = "tumhostel";
//connection to the database
$dbhandle = mysqli_connect($myServer, $myUser, $myPass)
  or die("Couldn't connect to SQL Server on $myServer");

//select a database to work with
$selected = mysqli_select_db($dbhandle,$myDB)
  or die("Couldn't open database $myDB");
//insert values to database table
    $username = $_GET['username'];
	$passwd = $_GET['passwd'];
	$encpasswd = md5($passwd);
	$sql = "INSERT INTO user VALUES (NULL,'$username','$encpasswd')" or die ("Couldn't insert to the specified table");


?> 