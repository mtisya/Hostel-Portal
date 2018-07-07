<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>hostel history</title>
<style>
table{
	border-collapse:collapse;
	}
th {
	width:80%;
	}
</style>
</head>
<body>
<?php 
$id = $_GET['id'];
include 'includes/Database.php';
$sql = "SELECT * FROM room_alloc WHERE student = '$id'";
$db = new Database($sql);
$resp = $db->execute_query();
echo "<table border=1>";
echo "<tr><th colspan=6>Students Hostel Allocation History</th></tr>";
echo "<tr><th>Student ID</th><th>Hostel</th><th>Room</th><th>Semester</th><th>Year</th></tr>";

while ($row = mysqli_fetch_row($resp)){
	echo "<tr><td>$row[1]</td><td>$row[2]</td><td>$row[5]</td><td>$row[3]</td><td>$row[4]</td></tr>";
	}
	echo "</table>";
?>
</body>
</html>