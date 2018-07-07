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
<title>Student Report</title>
<link rel="shortcut icon" HREF="images/LOG5.jpg" />
<link rel="stylesheet" href="styles/form.css" />
<script src="js/jquery.js"></script>
<script src="js/utils.js"></script>
</head>
<body>
<?php
  include_once("header.php");
  ?>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<h3 align="center"> View Student Personal Record by  Clicking on the Student Name </h3>
<div id="tablediv"><table>
<?php
$links = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
$num = count($links);
echo "<div id=linkcont>";
for ($n=0;$n<$num;$n++){
	echo "<a href=#$links[$n] class=links>$links[$n]</a>";
	}
	echo "</div>";
include 'includes/Database.php';
$sql = "SELECT distinct upper(LEFT( fname, 1 )) FROM student ORDER BY LEFT(fname, 1)";
$db = new Database($sql);
$resp = $db->execute_query();
while ($row = mysqli_fetch_row($resp)){
	echo "<table>";
	echo "<tr><td><li><h1 id=$row[0]>$row[0]</h1></li></td></tr>";
	echo "</table>";
	
	$sql2 = "SELECT concat(fname,' ',lname),studentid from student where fname like '$row[0]%'";
	$db2 = new Database($sql2);
	$resp2 = $db2->execute_query();
			echo "<ul>";

	while ($row = mysqli_fetch_row($resp2)){
		echo "<li><a href=javascript:openWin('hostelhistory.php?id=$row[1]',800,480)>$row[0]</a></li>";
		}
		echo "</ul>";
	}

?>
</table></div>
 <?php
  include_once("footer.php");
  ?>
</body>
</html>
