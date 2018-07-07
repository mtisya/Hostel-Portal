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
<title>Session</title>
<link rel="shortcut icon" HREF="images/LOG5.jpg" />
<link rel="stylesheet" href="styles/formstyle.css" />
<script src="js/jquery.js"></script>
<script src="js/sessions.js"></script>
</head>
<body>
  <?php
  include_once("header.php");
  ?>
<br/><br/><br/><br/><br/><br/><br/>
<fieldset id="sessiondiv">
<legend>Set Current Session</legend>
<form id="sessionform">
<label for="cboyear">Academic Year : </label>
<select id=cboyear name="cboyear">
</select>
<label for=cbosem>Semester : </label>
<select id="cbosem" name="cbosem"></select><br /><br />
<input type="button" id=btnset value="Set Session" align="middle" />
</form>
</fieldset>
<br/><br/><br/>
 <?php
   include_once("footer.php");
  ?>
</body>
</html>