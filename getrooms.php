<?php
include 'includes/Database.php';
$hostel = $_GET['hname'];
$year  = "";
$sem = "";
$sql2 = "SELECT * FROM session";
$db2 = new Database($sql2);
$resp2 = $db2->execute_query();
while ($row = mysqli_fetch_row($resp2)){
	$year = $row[1];
	$sem = $row[2];
	}
$sql = "SELECT room.roomno,room.capacity,room.hostelname FROM room WHERE room.hostelname =  '$hostel' 
AND room.capacity > ( SELECT COUNT(*) FROM room_alloc WHERE room_alloc.room = room.roomno and room_alloc.hname = room.hostelname and year='$year' and semester = $sem)" or die(mysql_error());
$db = new Database($sql);
$resp = $db->execute_query();
$roomno = "";
$capacity = "";
$hostelname = "";
while($row = mysqli_fetch_array($resp)){
$roomno = $row[0]; 
$capacity = $row[1];
$hostelname = $row[2];
echo "<option value=$roomno>$roomno</option>" or die(mysql_error());
/*$sql3 = "SELECT COUNT(*) FROM room_alloc WHERE room_alloc.room = $roomno and room_alloc.hname = $hostelname and year = '$year' and semester = $sem" or die(mysql_error());
$db4 = new Database($sql3);
$resps = $db4->execute_query();
while ($rows = mysqli_fetch_row($resps)){
	$num = $db4->getNumRows();
	if ($capacity>$num){
			echo "<option value=$roomno>$roomno</option>"  or die(mysql_error());

		}
	}*/
}
?>