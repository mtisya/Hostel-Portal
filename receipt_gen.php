<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['username'])) {
header('Location: studentlogin.php');
}
require ('includes/fpdf/fpdf.php');
require ('includes/Database.php');
$id = $_SESSION['username'];
$pdf = new FPDF('p','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,"T.U.M Hostel Receipt",1,1,'C');
$pdf->SetFont('Arial','B',12);
 $sql1 = "SELECT mpesa_id FROM tumhostel.payments  WHERE username = $id";
 $db2 = new Database($sql1);
 $resp = $db2->execute_query();
 $rec = "";
 while ($row=mysql_fetch_row($resp)){
	 $rec = $row;
	 echo  $rec;
	 }
$sql3 = "SELECT fname,lname,email FROM student WHERE studentid = (SELECT distinct studentid FROM payments WHERE username = $id)";
$fullname = "";
$email = "";
$db3 = new Database($sql3);
$resp3 = $db3->execute_query();
while ($row=mysql_fetch_row($resp3)){
	$fullname = "$row[1] $row[2]";
	$email = $row[6];
	}
$pdf->Cell(190,10,"Sales Receipt",0,1,'C');
$pdf->Cell(190,10,"Receipt Number: ".$rec,0,1,'R');
$pdf->Cell(190,10,"Date: ".date('d-m-Y'),0,1,'R');
$pdf->SetFillColor(0,255,0);
$header = array('PAID BY','StudentID','Mpesa_ID','Total Amount');
	$pdf->Cell(195,7,"Particulars",1,1,'C',true);

foreach ($header as $col){
	$pdf->Cell(39,7,$col,1,0,'C',true);
	}
$sql = "select payments.username,payments.studentid,payments.mpesa_id,payments.amount,payments.paymentdate from payments where payments.username = $id";
$db = new Database($sql);
$sum = 0;
$resp = $db->execute_query();
while ($row = mysql_fetch_row($resp)){
	$pdf->Ln();
	$sum += $row[4];
	$pdf->Cell(39,7,$row[0],1,0,'C');
	$pdf->Cell(39,7,$row[1],1,0,'C');
	$pdf->Cell(39,7,$row[3],1,0,'C');
	$pdf->Cell(39,7,$row[2],1,0,'C');
	$pdf->Cell(39,7,$row[4],1,0,'C');
	}
	$pdf->Ln();
	$pdf->Cell(156,7,"Total",1,0,'C',true);
	$pdf->Cell(39,7,$sum,1,0,'C',true);
$pdf->Ln();
$pdf->Cell(195,7,"Receipt For : ".$fullname,1,0,'C');
$pdf->Ln();
$pdf->Cell(156,7,"Customer Signature",0,0,'C');
$pdf->Cell(39,7,"",1,0,'C');
$pdf->Ln();
$pdf->Cell(156,7,"Customer Signature",0,0,'C');
$pdf->Cell(39,7,"",1,0,'C');

$pdf->Output("test.pdf");
echo $email;
?>