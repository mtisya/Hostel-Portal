<?php
include 'includes/Database.php';
$id = $_GET['id'];
$mpesa = $_GET['mpesa'];
$sql = "SELECT * FROM payments where mpesa_id = '$id'";
$db = new Database($sql);
$resp = $db->execute_query();
while ($row = mysqli_fetch_row($resp)){
	$actmpesa = $row[2];
	if ($actmpesa == $mpesa){
		$receipt = uniqid();
		$sql2 = "UPDATE payments SET verified = 1,receipt_num = '$receipt' where mpesa_id = '$id'";
		$db2 = new Database($sql2);
		$db2->execute_non_query();
		$date = date('Y-m-d H:i:s');
		$sql3 = "INSERT INTO accounts VALUES (NULL,'cash in','$date',$row[4],'Payment For Accomodation')";
		$db3 = new Database($sql3);
		$db3->execute_non_query();
		echo "1";
		}
	else {
		echo "-1";
		}
	}
?>