<?php

// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username'])) {
header('Location: index.php');
}
//$id_GET['id'];
?>
<head>
<link rel="stylesheet" href="js/jquery.nyroModal/styles/nyroModal.css" />
<link rel="stylesheet" href="styles/formstyle.css" />
<title>userlogin</title>
<script src="js/jquery.js"></script>
<script src="js/jquery.nyroModal.custom.js"></script>
<script src="js/login.js"></script>
</head>
<body>
<?php
  include_once("header.php");
  ?>
<h3 align="center">Please Login Here!!</h3>
<form>
<fieldset id="regform"> <img src="images/login3.jpg" id="imagelgn">&nbsp;&nbsp; 
<legend>Enter username and password</legend>
<label for="username">Username</label>
<input type="text" name="username" id="username" />
<label for="Password">Password</label>
<input type="Password" name="Password" id="Password" />
<fieldset id=notify>test</fieldset>
 <div id=btndiv>
<tr><td><button id=btnlogin>Login</button><td/><td> <button id=btnsign>Signup</button></td></tr>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" title="Change Password" target="new">Forgot password</a>
 </div>
</fieldset>
</form>
</body>
<br/>
<br/>
<br/>
 <?php
  include_once("footer.php");
  ?>
  </html>
