<?php
// Inialize session
session_start();
date_default_timezone_set('Africa/Nairobi');
include 'includes/Database.php';
$username = $_SESSION['username'];
$studentid = $_GET['studentid'];
$mpesa = $_GET['mpesa'];
$amount = $_GET['amount'];
$id = 0;
$date = date('Y-m-d H:i:s');
$sql2 = "SELECT  COUNT(mpesa_id) FROM payments WHERE mpesa_id = '$mpesa' ORDER BY mpesa_id DESC LIMIT 1";
$db2 = new Database($sql2);
$resp = $db2->execute_query();
while ($row = mysqli_fetch_row($resp)){
	echo $row[0];
	}
$sql = "INSERT INTO payments(username,studentid,mpesa_id,verified,amount,paymentdate) VALUES('$username','$studentid','$mpesa','$id','$amount','$date')";
$db = new Database($sql);
$db->execute_non_query();

?>
