<?php
  if(!isset($_POST['submit']))
	{
	$connection= mysqli_connect("localhost","root","mutisya");
	//Select Database
	mysqli_select_db($connection,"tumhostel");
	if($connection){
	 echo "<br><br>Connection Established";
	 }
	else
	 {
	 echo "Connection fail" .die (mysqli_error($connection));
	}	
	//Insert Into Database
	$username = $_POST['username'];
	$md5password = md5('$password');
	$sql="INSERT INTO user(username,password) VALUES ('$username','$md5password')";
	$insert= mysqli_query($connection,$sql);
	if ($insert)
	{
	echo "<br><br>";
	}
	else
     {
	echo "<br><br>" . mysqli_error($connection);
	} 
//if there are any errors, I set $error_stat to 1 and put the errors in the $message:
   if (empty($_POST['username'])) {
      echo " Please enter your username."."<br/>";
   }
else
{ 
echo "<h2>Registration Successful!</h2>";
echo "<p>Congratulations <b>$username</b>, your registration was successful.
You may now login.</p>";
}
}
?> 
