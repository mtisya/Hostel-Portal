<?php
class Database {
	var $myServer = "";
	var $myUser = "";
	var $myPass = "";
	var $myDB = "";
	var $query = "";
	function __construct($sql){
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

	$this->query = $sql;
	}
	function execute_non_query(){
		mysqli_query($this->connection,$this->query) or die (mysql_error());
		}
	function execute_query(){
		$resp = mysqli_query($this->connection,$this->query)or die(mysql_error());
		return $resp;
		}
	function getNumRows(){
		return mysqli_num_rows($this->execute_query());
		}
	}
?>
