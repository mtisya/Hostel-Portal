<?php
include 'includes/Database.php';
$yr = $_GET['year'];
$sem = $_GET['sem'];
$sql = "";
$sql  = "SELECT room_alloc.student,(SELECT concat(fname,' ' ,lname) as fullname from student where studentid = room_alloc.student),room_alloc.room,room_alloc.hname from room_alloc  WHERE semester = '$sem' and year = '$yr'";
$db2 = new Database($sql);
$resp2 = $db2->execute_query();
echo "<tr><th colspan=5><h4>Room and Hostel Allocation for the year $yr and Semester $sem</h4></th></tr>";
echo "<tr bgcolor=#40FF40><th>Student ID</th><th>Student Name</th><th>Room Number</th><th>Hostel</th></tr>";
$num = 0;
while ($row = mysqli_fetch_row($resp2)){
	if ($num%2==0){
			echo "<tr id=even><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";

		}
		else {
	echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
		}
		$num+=1;
	}

?>