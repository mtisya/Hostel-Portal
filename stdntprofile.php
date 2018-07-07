<?php
//connection to database
require_once("db_connection.php");
//insert to database
if (!isset($_POST['submit'])){
$Regno=$_POST['RegNo'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$mobileno=$_POST['mobileno'];
$county=$_POST['county'];
$mail=$_POST['mail'];
$sql="INSERT INTO stdprofile (NULL,RegNo,firstname,lastname,username,mobileno,county,mail) 
VALUES('$Regno','$firstname','$lastname','$username','$mobileno','$county','$mail')" or die (mysql_error());
$insert = mysqli_query($sql);
 if($insert){
 echo 1;
 }
 else{
 echo "try again later";
 }
}
?>