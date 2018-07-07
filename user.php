<?php
	if(isset($_POST['submit']))
	{
	$connection= mysqli_connect("localhost","root","");
		if($connection){
	echo "<br><br><br><br>Connection Established";
	}
	else
	{
	echo "coonection fail";
	}
	//Select Database
	mysqli_select_db($connection,"hostel")or die(mysql_errno());
	
	//Insert Into Database
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="INSERT INTO user (username, Password)
	 VALUES ('$username','$Password')";
$insert=mysqli_query($connection,$sql);
	if ($insert)
	{
	echo "<br><br>";
	}
	else
        {
	echo "<br><br>" . mysqli_error($connection);
}  
?>
<form action="user.php" method="post">
<fieldset> 
<legend> Login </legend>

<label for='username' >username: </label>
<input type='text' name='username' id='username' maxlength="20" /><br/><br/>
<label for='Password' >Password:</label>
<input type='text' name='Password' id='Password' maxlength="20" /><br/><br/>
<input type='submit' name='submit' value='login' />
</fieldset>
</form>