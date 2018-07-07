<?php
include 'includes/Database.php';
$mpesa= $_GET['mpesa'];
$amount = $_GET['amount'];
$str = $_GET['str'];
$sql = "";
if ($str == ""){
	$sql  = "SELECT * FROM payments";
	}
	else {
		$sql  = "SELECT * FROM payments WHERE  mpesa_id like '%$str%'" ;
		}
$db2 = new Database($sql);
$resp2 = $db2->execute_query();
echo "<tr><th colspan=5>Room and Hostel Allocation for the year  and Semester </th></tr>";
echo "<tr><th>Student ID</th><th>Student Name</th><th>Room Number</th><th>Hostel</th></tr>";
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
