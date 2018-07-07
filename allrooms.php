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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Room Vacancies</title>
<link rel="stylesheet" href="styles/reports.css" />
<link rel="stylesheet" href="styles/roomreport.css" />
<script src="js/jquery.js"></script>
<script src="js/reports.js"></script>
</head>
<body>
<fieldset id="rooms">
<ul>
<li><a href=javascript:window.print()>Print</a>|</li>
<li><a href=#>Export as Excel</a> | </li>
<li><a href=#>Export as PDF</a> | </li>
<li><a href=#>Export as Word</a></li>
</ul>
<legend>Rooms with vacancies</legend>
<ul id=unallocated> 
<?php
$sql = "SELECT capacity,hostel,roomno,id,(select hostelname from hostel where hostelid = hostel),capacity - (select count(*) from room_alloc where room = id and semester = $sem and year = '$yr') as remaining from room where capacity - (select count(*) from room_alloc where room = id)>0";
$db = new Database($sql);
$resp = $db->execute_query();
$total = 0;
$utilised = 0;
$num = 0;
while ($row = mysql_fetch_row($resp)){
	$total += $row[0];
	$utilised += $row[5];
	$num += 1;
	if ($num%2==0){
			echo "<li id=even>Room $row[2] in hostel $row[4] has $row[5] Vacancies available</li>";

		}
		else {
				echo "<li>Room $row[2] in hostel $row[4] has $row[5] Vacancies available</li>";

			}
	}

?>
</ul>
</fieldset>
<fieldset id="rooms">
<legend>Fully allocated Rooms</legend>
<ul id=allocated> 
<?php
$sql2 = "SELECT capacity,hostel,roomno,roomid,(select hostelname from hostel where hostelid = hostel),capacity - (select count(*) from room_alloc where room = roomid and semester = $sem and year = '$yr') as remaining from room where capacity - (select count(*) from room_alloc where room = roomid)<=0";
$db2 = new Database($sql2);
$resp2 = $db2->execute_query();
$num = 0;
while ($row = mysql_fetch_row($resp2)){
	$num += 1;
	if ($num % 2 == 0){
			echo "<li id=odd> Room $row[2] in hostel $row[4] has $row[5] Vacancies available</li>";
		}
		else {
	echo "<li>Room $row[2] in hostel $row[4] has $row[5] Vacancies available</li>";
		}
	}
$perce = ceil(($utilised/$total)*100);
?>
</ul>
</fieldset>
<div id=outerdiv><div id=innerdiv <?php echo "style=width:".$perce."%"; ?>>Total Room Availability <?php echo "$utilised/$total ($perce%)" ?>
</div>
</div>
</body>
</html>