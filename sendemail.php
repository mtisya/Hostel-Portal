<?php
include "includes/database.php";

		$email = $_POST['email'];
		$user = $_POST['user'];
		$result1 = mysql_query("SELECT * FROM user where username='$user'") or die('username does not exist.');
while($row = mysql_fetch_array($result1))
  {
  $password=$row['password'];
  }
$to=$email_to;

$subject="Your password here";

$header="from: your name <samtish2010@gmail.com>";

$messages= "Your password for login to our website \r\n";
$messages.="Your password is $password \r\n";
$messages.="more message... \r\n";

$sentmail = mail($email,$subject,$messages,$header);

		
		header('Location: student home.php');
?>