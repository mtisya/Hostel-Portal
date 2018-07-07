<?php
include 'includes/Database.php';
$yr = "";
$sem = "";
$sql1 = "SELECT year,sem from  session";
$db2 = new Database($sql1);
$resp2 = $db2->execute_query();
while ($row = mysqli_fetch_row($resp2)){
	$yr = $row[0];
	$sem = $row[1];
	}
$str = $_GET['str'];
$sql = '';
if ($str==''){
$sql = "SELECT capacity,hostelname,roomno,capacity - (select count(*) from room_alloc where room = roomno and semester = '$sem' and year = '$yr') as remaining from room where capacity - (select count(*) from room_alloc where room = roomno)>0";
	}
else {
$sql = "SELECT room.capacity,room.hostelname,room.roomno,room.capacity - (select count(*) from room_alloc where room_alloc.room = room.roomno and semester = '$sem' and year = '$yr') as remaining from room where room.capacity - (select count(*) from room_alloc where room_alloc.room = room.roomno)>0 and (select hostelname from hostel where hostel.hostelname = room.hostelname) like '%$str%' or room.roomno like '%$str%'";
	}
$db = new Database($sql);
$resp = $db->execute_query();
$total = 0;
$utilised = 0;
$num = 0;
while ($row = mysqli_fetch_row($resp)){
	$total += $row[0];
	$utilised += $row[3];
	$num += 1;
	if ($num%2==0){
	echo "<li>Room $row[2] in hostel $row[1] has $row[3] Vacancies available</li>";
	}
	else{
	echo "<li id=even>Room $row[2] in hostel $row[1] has $row[3] Vacancies available</li>";
	}
}
?>