<?php
include 'includes/Database.php';
$student = $_GET['student'];
$year = $_GET['year'];
$semester = $_GET['semester'];
$hostelname = $_GET['hname'];
$room = $_GET['roomno'];
$sql = "INSERT INTO room_alloc VALUES('$student','$hostelname','$semester','$year','$room')" or die (mysql_error());
$db = new Database($sql);
$db->execute_non_query();
echo "Room Booked";
?>