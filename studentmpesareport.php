<html>
<head><title>Student Mpesa Report</title>
<link rel=stylesheet href="styles/reports.css" />
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
<div id=controls><label for=cboacad>TUM Hostel Management System Student Mpesa Payment Report</label>
<br/><br/>
<?php
include 'includes/Database.php';
$mpesa_id = "";
$verified = "";
$amount = "";
$paymentdate = "";
$sql1 = "SELECT * FROM payments";
$db = new Database($sql1);
$amount = 0;
$resp = $db->execute_query();
while ($row = mysqli_fetch_row($resp)){
$mpesa_id = $row[0];
$amount += $row[2];
	}
$sql  = "SELECT * FROM payments";
$db2 = new Database($sql);
$resp2 = $db2->execute_query();
echo "<table border=1 id=tblres >";
echo "<tr><th colspan=5>Student Receipt Report For Mpesa Transaction Details</th></tr>";
echo "<tr><th>Mpesa ID</th><th>Verification</th><th>Amount</th><th>Payment date</th></tr>";
while ($row = mysqli_fetch_row($resp2)){
{
echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
		}
	}
 echo "<tr><b>Total Amount : $amount;</b></tr>" ;
echo "</table>";
?>
<br/><br/></div>
</fieldset>
</body>
</html>