<?php
include 'includes/Database.php';
$yr = $_GET['year'];
$sem = $_GET['sem'];
$str = $_GET['str'];
$sql = "";
if ($str == ""){
	$sql  = "SELECT room_alloc.student,(SELECT concat(fname,' ' ,lname) as fullname from student where studentid = room_alloc.student),room_alloc.room,room.roomno,room.hostelname from room_alloc inner join room on room.hostelname = room_alloc.hname ";
	}
	else {
		$sql  = "SELECT room_alloc.student,(SELECT concat(fname,' ' ,lname) as fullname from student where studentid = room_alloc.student) ,room_alloc.room,room.roomno,room.hostelname from room_alloc inner join room on room.hostelname = room_alloc.hname WHERE  room_alloc.student like '%$str%' or room.hostelname like '%$str%' or room.roomno like '%$str%' or (SELECT concat(fname,' ' ,lname) as fullname from student where studentid = room_alloc.student) like '%$str%' " ;
		}
$db2 = new Database($sql);
$resp2 = $db2->execute_query();
echo "<tr><th colspan=5>Room and Hostel Allocation for the year $yr and Semester $sem</th></tr>";
echo "<tr><th>Student ID</th><th>Student Name</th><th>Room Number</th><th>Hostel</th></tr>";
$num = 0;
while ($row = mysqli_fetch_row($resp2)){
	if ($num%2==0){
			echo "<tr id=even><td>$row[0]</td><td>$row[1]</td><td>$row[3]</td><td>$row[4]</td></tr>";

		}
		else {
	echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[3]</td><td>$row[4]</td></tr>";
		}
		$num+=1;
	}

?>