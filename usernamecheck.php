<?php
include 'includes/Database.php';
$username = $_POST['username'];
$passwd = $_POST['passwd'];
$encpasswd = md5($passwd);
//check if user exists
$usernamecheck=mysql_query("select username from user where username = '$username'");
$count=mysql_num_rows($usernamecheck);
if(mysql_num_rows($count)== 1){
echo "The username '.$username.' already exists.";
}
else{
 echo "Ok";
}
$sql = "INSERT INTO `tumhostel`.`user` (`username`, `password`) VALUES ('$username', '$encpasswd')" or die ("Couldn't insert to the specified table");
$db = new Database($sql);
$db->execute_non_query();
?>

