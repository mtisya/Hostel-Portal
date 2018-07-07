<title>Add hostel</title>
<script>
function redirect(id){
	if (confirm("Are You sure you want to delete this record")){
		document.location = "deletehostel.php?id="+id
		}
	}
</script>

<script src="js/jquery.js"></script>
<script src="js/jquery.nyroModal.custom.js"></script>
<script src="js/login.js"></script>
</head>

<body>
 <?php
  include_once("header4.php");
  ?>
  <br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div id="body" >
  
 
</div>
<fieldset id=mainfield>
<legend>TUM Hostel Management System </legend>
<fieldset id="regform" style="width:95%">  
 <legend>Add Hostel </legend>
&nbsp;&nbsp; 
    <form action="addhostel.php" method="post">
    <label for="hostelid">Hostelid:</label>
    <input type="text" name="hostelid" id="hostelid" />
    <label for="hostelname">Hostelname:</label>
    <input type="text" name="hostelname" id="hostelname" />
    <label for="capacity">Capacity: </label>
    <input type="text" name="capacity" id="capacity" /> 
    <label for="location">Location: </label>
    <input type="text" name="location" id="location" />
    <label for="gender">Gender:</label>
    <select name="gender" id="gender">
    <option value="male">Male</option>
    <option value="female"> Female</option>
    </select>
    <input type="submit" name="submit" id="submit" value="submit" />
    </form>
    </fieldset>
    </fieldset>
    <fieldset>
    <legend>Hostels Added</legend>
<table id=hostels border="1" align="center">
<tr><th>Hostel ID</th><th>Hostel Name</th><th>Locations</th><th>Capacity</th><th>Gender Allowed</th></tr>
<?php
include '../includes/Database.php';
$sql = "SELECT * FROM hostel";
$db = new Database($sql);
$resp = $db->execute_query();
while ($row = mysql_fetch_row($resp)){
	echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td><a href=javascript:redirect('$row[0]')>Delete</a></td></tr>";
	}
?>
</table>
</fieldset>
</body>
 <?php

  include_once("footer.php");
  ?>