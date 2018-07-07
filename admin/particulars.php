<?php
$id = $_GET['id'];
include 'includes/Database.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="styles/particulars.css" />
<script src="js/utils.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>particulars</title>
</head>
<body>
<form><br />
<h1 align="center">T.U.M ONLINE PAYMENT RECEIPT</h1>
<hr width=50% />
<h2 align="center">Payment Details</h2>
<hr width=70% /><br />
<div style="background-color:#40FF40; width:inherit; float:right; text-align:right; margin-right:6%">
<span id=pid><b>Payment ID : <b><span class=det ><?php echo $id ; ?></span></span><br />
<span id=dte><b>Date : <b><span class=det><?php echo date('d-m-Y'); ?></span></span>
</div><br /><br />
<table id=tblpart border="=1" align="center" width="90%">
<tr><th colspan="5"><b>Particulars<b></th></tr>
<tr bgcolor="#40FF40"><th>Mpesa ID</th><th>Student Name</th><th>Amount Paid</th><th>Paid for</th><th>Total Amount</th></tr>
<?php
$sql = "select * from payments where mpesa_id = '$id'";
$db = new Database($sql);
$sum = 0;
$resp = $db->execute_query();
while ($row = mysqli_fetch_row($resp)){
	$sum += $row[4];
echo "<tr><td>$row[2]</td><td>$row[1]</td><td>$row[4]</td><td>Accomadation fee</td><td>$row[4]</td></tr>";
	} 
?>
<tr bgcolor="#FFFF71"><th colspan=4>Total Paid : </th><th colspan="2"><?php echo $sum; ?></th></tr>
</table><br />
<hr width=90% /><br />
<div align="center" width=30%>
<button a id=btnprint onclick="printer()">Print</button>
<button id=btnpdf>Save As PDF</button>
<button id=btnword>Save As Word</button>
</div>
</form><br /><br /><br />
</body>
</html>
