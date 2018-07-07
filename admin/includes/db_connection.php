<?php
class Database {
	var $link = "";
	var $mysqlserver = "";
	var $mysqlusername = "";
	var $mysqlpassword = "";
	var $dbname = "";
	var $query = "";
	
	function __construct($sql){
	$mysqlserver="localhost";
	$mysqlusername="mutisya";
	$mysqlpassword="kivaki";
	$dbname = "tumhostel";
$connection = mysqli_connect($mysqlserver, $mysqlusername, $mysqlpassword ) or die ("Error connecting to mysql server: ".mysql_error());
// change this to the name of your database
 mysqli_select_db( $connection,$dbname) or die ("Error selecting specified database on mysql server: ".mysql_error());
$this->query = ($sql);
}
function execute_non_query(){
		mysqli_query($this->query,$connection) or die (mysql_error());
		}
	function execute_query(){
		$resp = mysql_query($this->query)or die(mysql_error());
		return $resp;
		}
	function getNumRows(){
		return mysql_num_rows($this->execute_query());
		}
}
?>
