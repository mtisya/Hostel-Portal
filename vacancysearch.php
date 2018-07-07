<?php
include 'includes/Database.php';
$yr = "";
$sem = "";
$sql1 = "SELECT academic_yr,semester from  session";
$db2 = new Database($sql1);
$resp2 = $db2->execute_query();
while ($row = mysql_fetch_row($resp2)){
	$yr = $row[0];
	$sem = $row[1];
	}
$str = $_GET['str'];
$sql = '';
if ($str==''){
$sql = "SELECT capacity,hostel,roomno,roomid,(select hostelname from hostel where hostelid = hostel),capacity - (select count(*) from room_alloc where room = roomid and semester = $sem and year = '$yr') as remaining from room where capacity - (select count(*) from room_alloc where room = roomid)>0";
	
	}
else {
$sql = "SELECT capacity,hostel,roomno,roomid,(select hostelname from hostel where hostelid = hostel),capacity - (select count(*) from room_alloc where room = roomid and semester = $sem and year = '$yr') as remaining from room where capacity - (select count(*) from room_alloc where room = roomid)>0 and (select hostelname from hostel where hostelid = hostel) like '%$str%' or roomno like '%$str%'  ";
	
	}

$db = new Database($sql);
$resp = $db->execute_query();
$total = 0;
$utilised = 0;
while ($row = mysql_fetch_row($resp)){
	$total += $row[0];
	$utilised += $row[5];
	echo "<li>Room $row[2] in hostel $row[4] has $row[5] Vacancies available</li>";
	}


?>