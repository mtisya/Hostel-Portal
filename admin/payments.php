<?php 
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['Admin'])) {
header('Location: index.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>payments</title>
<link rel="shortcut icon" HREF="images/LOG5.jpg" />
<link rel="stylesheet" href="styles/formstyle.css" />
<script src="js/jquery.js"></script>
<script src="js/payment.js"></script>
<script src="js/utils.js"></script>
</head>
<body ><br />
<div id="topdiv"><ul>
<li><a href="home.php">Back Home</a> | </li>
<li><a href=javascript:window.print()>Print</a>|</li>
<li><a href=#>Export as Excel</a> | </li>
<li><a href=#>Export as PDF</a> | </li>
<li><a href=#>Export as Word</a></li>
</ul></div><br /><br /><br /><br />
<table border=1 id=tblunveri width="80%" align="center">
<tr><th colspan=5><h1>Unverified Payments</h1></th></tr>
<tr bgcolor="#40FF40"><th>Mpesa ID</th><th>Payment Date</th><th>Amount</th><th colspan=2 bgcolor="#40FF40">Verify Payments/View Particulars</th></tr>
<?php
include 'includes/Database.php';
$sql = "SELECT mpesa_id,paymentdate,amount FROM payments WHERE verified = '0'";
$db = new Database($sql);
$sum = 0;
$resp = $db->execute_query();
while ($row = mysqli_fetch_row($resp)){
	$sum += $row[2];
	echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td><a href=javascript:verifyPayments('$row[0]')>Verify Payments</a></td>
	<td><a href=javascript:openWin('particulars.php?id=$row[0]',800,480)>View Particulars</a></td></tr>";
	}
?>
<tr bgcolor="#FFFF71"><th colspan=2>Total Amount : </th><th><?php echo $sum ?></th></tr>
</table><br />
<hr width="80%"/><br />
<table border=1 id=tblveri width="80%" align="center">
<tr><th colspan=5><h1>Verified Payments</h1></th></tr>
<tr bgcolor="#40FF40"><th>Mpesa ID</th><th>Payment Date</th><th>Amount</th><th colspan=2 bgcolor="#40FF40">Particulars</th></tr>
<?php
$sql = "SELECT mpesa_id,paymentdate,amount FROM payments WHERE verified = '1'";
$db = new Database($sql);
$sum = 0;
$resp = $db->execute_query();
while ($row = mysqli_fetch_row($resp)){
	$sum += $row[2];
	echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td><a href=javascript:openWin('particulars.php?id=$row[0]',850,400)>View Particulars</a></td></tr>";
	}
?>
<tr bgcolor="#FFFF71"><th colspan=2>Total Amount : </th><th><?php echo $sum ?></th></tr>
</table><br /><br />
</body>
</html>
