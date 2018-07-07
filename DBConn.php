<?php
$myServer = "localhost";
$myUser = "root";
$myPass = "";
$myDB = "tumhostell";

//connection to the database
$dbhandle = mysqli_connect($myServer, $myUser, $myPass)
  or die("Couldn't connect to SQL Server on $myServer");

//select a database to work with
$selected = mysqli_select_db($dbhandle,$myDB)
  or die("Couldn't open database $myDB");

?> 