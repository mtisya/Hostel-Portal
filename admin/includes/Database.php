<?php
class Database {
	var $connection = "";
	var $host = "";
	var $username = "";
	var $database = "";
	var $password = "";
	var $query = "";

	function __construct($sql){
	$this->username = "mutisya";
	$this->password = "kivaki";
	$this->host="localhost";
	$this->database = "tumhostel";
	$this->connection = mysqli_connect($this->host,$this->username,$this->password);
	mysqli_select_db($this->connection,$this->database);
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