<?php
include 'includes/Database.php';
$id = $_GET['id'];
$sql="SELECT student.studentid,student.fname,student.lname,student.mobile,payments.verified FROM student LEFT JOIN payments ON student.studentid=payments.studentid WHERE student.studentid='$id'";
$db = new Database($sql);
$resp = $db->execute_query();
$num = $db->getNumRows();
if ($num<=0){
	echo "0";
	}
else {
while ($row = mysqli_fetch_array($resp)){
	echo "$row[0]:$row[1]:$row[2]:$row[3]:$row[4]";
	}
}
?>