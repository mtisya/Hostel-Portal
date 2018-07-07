<html>
<head>
<title>Allocation Report</title>
<link rel="shortcut icon" HREF="images/LOG5.jpg" />
<link rel=stylesheet href="styles/reports.css" />
<script src="js/jquery.js"></script>
<script src="js/reports.js"></script>
</head>
<body><br />
<fieldset id="rooms"><br />
<div id="topdiv"<ul>
<li><a href=home.php>Home</a>|</li>
<li><a href=javascript:window.print()>Print</a>|</li>
<li><a href=#>Export as Excel</a> | </li>
<li><a href=#>Export as PDF</a> | </li>
<li><a href=#>Export as Word</a></li>
</ul></div><br /><br />
<div id=controls>
<label for=cboacad><b>Select Academic Year :</b></label>
<select id=cboacad><option>select acad year</option></select>
<label for=cbosem><b>Select Semester :</b></label>
<select id=cbosem>
<option value=1>1</option>
<option value=2>2</option>
<option value=3>3</option>

</select>
<input type="button" id=btnfilter value="Filter"></input> 
<input type="search" placeholder="Enter Search Term" id=txtsearch />
</div>
<?php
include 'includes/Database.php';
$yr = "";
$sem = "";
$sql1 = "SELECT year,sem FROM session";
$db = new Database($sql1);
$resp = $db->execute_query();
while ($row = mysqli_fetch_row($resp)){
	$yr = $row[0];
	$sem = $row[1];
	}
$sql  = "SELECT room_alloc.student,(SELECT concat(fname,' ' ,lname) as fullname from student where studentid = room_alloc.student),room_alloc.room, room_alloc.hname from room_alloc  WHERE semester = '$sem' and year = '$yr'";
$db2 = new Database($sql);
$resp2 = $db2->execute_query();
echo "<table border=1 id=tblres >";
echo "<tr><th colspan=5><h4>Room and Hostel Allocation for the year $yr and Semester $sem</h4></th></tr>";
echo "<tr <tr bgcolor=#40FF40><th>Student ID</th><th>Student Name</th><th>Room Number</th><th>Hostel</th></tr>";
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
echo "</table>";
?>
</fieldset><br />
</body>
</html>