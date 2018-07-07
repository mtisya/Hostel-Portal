<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (isset($_SESSION['Admin'])) {
header('Location: home.php');
}
//$id_GET['id'];
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Login</title>
<link rel="shortcut icon" HREF="images/LOG5.jpg" />
<link rel="stylesheet" href="styles/formstyle.css">
<script src="js/jquery.js"></script>
<script src="js/adminlogin.js"></script>
</head>
<body>
  <?php
  include_once("header1.php");
  ?>
  <br/><br/>
<center><h3><b>Enter Your Username and Password<b></h3></center>
<fieldset id="loginfield">
<legend class=legend>Admin Login</legend>
<table width="100%" align="center">
<tr><td><img src="images/cadenas.png" /></td>
<td>
<form onSubmit="function(){return false}">
<label for="txtuname">Username : </label>
<input type="text" id="txtuname" name="txtuname" />
<label for="txtpasswd">Password : </label>
<input type="password" id="txtpasswd" name="txtpasswd" size="60%"/>
<div id="btndiv">
<button id=btnlogin>Login</button><br />
<button id=btnforgot>Forgot Password</button>
</div>
</form>
</td></tr>
</table>
</fieldset>
<br/><br/><br/><br/><br/>
 <?php
   include_once("footer.php");
  ?>
</body>
</html>

