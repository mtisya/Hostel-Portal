<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_localhost = "localhost";
$database_localhost = "tumhostelnn";
$username_localhost = "root";
$password_localhost = "";
$localhost = mysqli_connect($hostname_localhost, $username_localhost, $password_localhost) or trigger_error(mysql_error(),E_USER_ERROR)
or die (mysql_error()); 
?>