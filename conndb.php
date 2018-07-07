<?php
	include('dbconnection.php');
	//declaring the variables
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$fax = $_POST['fax'];
	$address = $_POST['address'];
	//insert into the database
	if(isset($_POST['add-customer'])){
	$query="INSERT INTO customer_record 
	VALUES ('$idnumber','$username','$firstname','$lastname ','$email',$telephone,'$fax','$address')";
	$stmt = sqlsrv_query($conn,$query);
	if($stmt){
		echo "<td>Customer Added Successfully</td>";
	}
	else{
		 die( print_r( sqlsrv_errors(), true));
		}
		
	}
?>
?>