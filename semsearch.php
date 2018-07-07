<?php
include 'includes/Database.php';
$yr = $_GET['year'];
$sem = $_GET['sem'];
$sql = "";
$sql  = "SELECT room_alloc.student,(SELECT concat(fname,' ' ,lname) as fullname from student where studentid = room_alloc.student),room_alloc.room,room.roomno,room.hostelname from room_alloc inner join room on room.hostelname = room_alloc.hname WHERE semester = '$sem' and year = '$yr'";
$db2 = new Database($sql);
$resp2 = $db2->execute_query();
echo "<tr><th colspan=5>Room and Hostel Allocation for the year $yr and Semester $sem</th></tr>";
echo "<tr><th>Student ID</th><th>Student Name</th><th>Room Number</th><th>Hostel</th></tr>";
$num = 0;
while ($row = mysql_fetch_row($resp2)){
	if ($num%2==0){
			echo "<tr id=even><td>$row[0]</td><td>$row[1]</td><td>$row[3]</td><td>$row[4]</td></tr>";

		}
		else {
	echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[3]</td><td>$row[4]</td></tr>";
		}
		$num+=1;
	}

?>