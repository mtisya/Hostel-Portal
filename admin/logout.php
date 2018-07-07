<?php
include("db_connection.php");
// Inialize session
session_start();
// Delete certain session
unset($_SESSION['Admin']);
// Delete all session variables
// session_destroy();
	$stat="UPDATE customer_record SET status='logout'";
		mysqli_query($stat);	
// Jump to login page
header('Location: index.php');
?>
</html>