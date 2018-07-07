<?php
include 'includes/Database.php';
$id = $_GET['id'];
$acad = "";
$sem = "";
$sql2 = "SELECT academicyear,semester from session";
$db2 = new Database($sql2);
$resp2 = $db2->execute_query();
while ($rowy = mysqli_fetch_row($resp2)){
	$acad = $rowy[0];
	$sem = $rowy[1];
	}
$sql = "SELECT fname,lname,mobile from student where studentid = '$id'";
$sql2 = "SELECT count(*) from room_alloc where student = '$id' and year = '$acad' and semester = $sem";
$numbook = "";
$db3 = new Database($sql2);
$resp3 = $db3->execute_query();
while ($rowz = mysqli_fetch_row($resp3)){
	$numbook = $rowz[0];
	}

$db = new Database($sql);
$resp = $db->execute_query();
$num = $db->getNumRows();
if ($num<=0){
	echo "0";
	}
else {
while ($row = mysqli_fetch_row($resp)){
if ($numbook>0){
	echo "-1";
	}
	else {
	echo "$row[0]:$row[1]:$row[2]";
	}
	}
}
?>