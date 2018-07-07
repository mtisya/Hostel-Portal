<html>
<head><title>Student Mpesa Payment Report</title>
<link rel=stylesheet href="styles/reports.css" />
<script src="js/jquery.js"></script>
<script src="js/receipt.js"></script>
</head>
<body>
<fieldset id="rooms">
<ul>
<li><a href=admin/index.php>Home</a>|</li>
<li><a href=javascript:window.print()>Print</a>|</li>
<li><a href=#>Export as Excel</a> | </li>
<li><a href=#>Export as PDF</a> | </li>
<li><a href=#>Export as Word</a></li>
</ul>
<div id=controls>
<label for=cboacad>Select Payment Date : </label>
<select id=cboacad></select>
<label for=cbosem>Amount Paid : </label>
<select id=cbosem>
<option value=1>1</option>
<option value=2>2</option>
<option value=3>3</option>

</select> 
<button id=btnfilter>Filter</button>
  <input type="search" placeholder="Enter Search Term" id=txtsearch />
</div>
<?php
include 'includes/Database.php';
$mpesa = "";
$amount = "";
$sql1 = "SELECT * FROM payments";
$db = new Database($sql1);
$resp = $db->execute_query();
while ($row = mysqli_fetch_row($resp)){
	$mpesa = $row[0];
	$amount = $row[2];
	}
$sql  = "SELECT * FROM payments";
$db2 = new Database($sql);
$resp2 = $db2->execute_query();
echo "<table border=1 id=tblres >";
echo "<tr><th colspan=5>Student Mpesa Payment Report And Search Form </th></tr>";
echo "<tr><th>Mpesa ID</th><th>Verified</th><th>Amount</th><th>Payment Date</th></tr>";
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
</fieldset>
</body>
</html>