<?php
require_once("db_connection.php");
//$_SESSION['SESS_ADMIN_ID']="";
//Function to sanitize values received from the form. Prevents SQL injection
	if (isset($_POST['submit'])){
		//Sanitize the POST values
		function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	$username=clean($_POST['username']);
	$mpassword=clean($_POST['Password']);
	//$m2password=md5($password);	
	//Create query
	
	$qry="SELECT username,password FROM register WHERE username='$username' AND password='$mpassword'"or die ("Error connecting to database table:".mysql_error());
	
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login Successful
			session_start();
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_CUSTOMER_ID'] = $member['username'];
			
			session_write_close();
			header("location: index.php");
			exit();
		}else {
			//Login failed
			header("location: login-failed.php");
			exit();
		}
	}else {
		die(mysql_error());
	}
	}
?>
