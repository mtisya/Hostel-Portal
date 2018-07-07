<head>
<style>
body {
	background-color:#9FF;
	}
	.div {
	font-size: 16px;
}
</style>
</head>

<h1 align="center">Technical University of mombasa Online Hostel </h1>
<h2 align="center">Student Registration Form</h2>

<form action="reg.php" method="post" >
<div align="center" style="background-color:#0FC" width="" heigth="300">  
<legend align="center" class="div"> Enter you details here<br/>
</legend>
<table border="0">
  <tr><td><label for='Studentid' >Registration number: </label></td>
<td><input type='text' name='Studentid' id='Studentid' maxlength="50" /> </td>
</tr> 
<tr><td><label for='Firstname' >Firstname: </label></td>
<td><input type='text' name='Firstname' id='Firstname' maxlength="50" /></td>
</tr>
<tr><td><label for='Lastname' >Lastname: </label></td>
<td><input type='text' name='Lastname' id='Lastname' maxlength="50" /></td>
</tr>
<tr><td><label for='gender'>Gender:</label></td>
<td><input type='text' name='gender' id='gender' maxlength="50" /></td>
</tr>
<tr><td><label for='School' >School:</label></td>
<td><input type='text' name='School' id='School' maxlength="50" /></td></tr>

<tr><td><label for='Course' >Course: </label></td>
<td><input type='text' name='Course' id='Course' maxlength="50" /></td>
</tr>
<tr><td><label for='Name of sponsor' >Name of sponsor:</label></td>
<td><input type='text' name='Sponsor' id='Sponsor' maxlength="50" /></td>
</tr>
<tr><td><label for='Sponsor Address' >Sponsor Address: </label></td>
<td><input type='text' name='Address' id='Address' maxlength="50" /></td>
</tr>
<tr><td><label for='Next_of_kin' >Next of kin: </label></td>
<td><input type='text' name='Next_of_kin' id='Next_of_kin' maxlength="50" /></td>
</tr>
<tr><td><label for='Kin_address' >Kin address:</label></td>
<td><input type='text' name='Kin_address' id='Kin_address' maxlength="50" />
</td></tr>
<tr><td><label for='Hostelname' >Hostelname: </label></td>
<td><input type='text' name='Hostelname' id='Hostelname' maxlength="50" /></td></tr>
<tr><td></td><td><div align="center">
<input type='submit' name='submit' value='Submit' />
</div></td></tr></table>
</div>
</form>