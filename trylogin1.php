
<?php
require_once("db_connection.php");
$username = $_POST['username'];
$password = $_POST['password'];

if (!isset( $_POST['username']) && if (!isset ($_POST['password'])){
echo 'please enter username and password';
}
else{
$sql ="SELECT * FROM registered WHERE username = '$username' AND password ='".md5($_POST['password'])."'";
$sql1 =  mysqli_query($link,$sql);
}
else die ("that user doesn't exist");


?>