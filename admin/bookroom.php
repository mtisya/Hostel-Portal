<?php
include 'includes/Database.php';
$student = $_GET['student'];
$year = $_GET['year'];
$semester = $_GET['semester'];
$hname = $_GET['hname'];
$room = $_GET['room'];
$sql = "INSERT INTO room_alloc VALUES(null,'$student','$semester','$year','$room')";
$db = new Database($sql);
$db->execute_non_query();
echo "Room Booked";
?>