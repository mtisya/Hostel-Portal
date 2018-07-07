<?php
include 'includes/Database.php';
$yr = "";
$sem = "";
$sql1 = "SELECT year, sem from session";
$db2 = new Database($sql1);
$resp2 = $db2->execute_query();
while ($row = mysqli_fetch_row($resp2)){
	$yr = $row[0];
	$sem = $row[1];
	}
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Room Vacancies</title>
<link rel="shortcut icon" HREF="images/LOG5.jpg" />
<link rel="stylesheet" href="styles/allrooms.css" />
<script src="js/jquery.js"></script>
<script src="js/reports.js"></script>
</head>
<body><br />
<div id="topdiv"><ul>
<li><a href="home.php">Back Home</a> | </li>
<li><a href=javascript:window.print()>Print</a>|</li>
<li><a href=#>Export as Excel</a> | </li>
<li><a href=#>Export as PDF</a> | </li>
<li><a href=#>Export as Word</a></li>
</ul></div><br /><br /><br />
<fieldset>
<h1>Rooms with vacancies</h1>
<div align="right"><input type="search" placeholder="Enter Search String" style="width:45%;" id=vacancysearch /></div>
<ul id="unallocated"> 
<?php
$sql = "SELECT capacity,hostelname,roomno,capacity - (select count(*) from room_alloc where room = roomno and semester = $sem and year = '$yr') as remaining from room where capacity - (select count(*) from room_alloc where room = roomno)>0";
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
		else {
				echo "<li id=even>Room $row[2] in hostel $row[1] has $row[3] Vacancies available</li>";

			}
	}

?>
</ul>
</fieldset><br /><br /><br />
<fieldset>
<h1>Fully allocated Rooms</h1>
<ul id=allocated> 
<?php
$sql2 = "SELECT capacity,hostelname,roomno,capacity - (select count(*) from room_alloc where room = roomno and semester = $sem and year = '$yr') as remaining from room where capacity - (select count(*) from room_alloc where room = roomno)<=0";
$db2 = new Database($sql2);
$resp2 = $db2->execute_query();
$num = 0;
while ($row = mysqli_fetch_row($resp2)){
	$num += 1;
	if ($num % 2 == 0){
			echo "<li> Room $row[2] in hostel $row[1] has NO Vacancies available</li>";
		}
		else {
	echo "<li id=odd>Room $row[2] in hostel $row[1] has NO Vacancies available</li>";
		}
	}
$perce = ceil(($utilised/$total)*100);
?>
</ul>
</fieldset>
<div id=outerdiv><div id=innerdiv <?php echo "style=width:".$perce."%"; ?>>Total Room Availability <?php echo "$utilised/$total ($perce%)" ?>
</div></div>
<br /><br /><br />
</body>
</html>