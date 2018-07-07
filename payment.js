// JavaScript Document
$(document).ready(function(e){
	$('#btnpay').bind('click' function(e){
	e.preventDefault()
	var mpesa = $('#mpesa').val()
	var amount = $('#amount').val()
	
	if (mpesa.length<=0 || amount.length<= 0){
		alert ("please enter the details first")
	}
	else{
		var url = "addpayment.php?mpesa="+mpesa+"&amount="+amount 
		$.get(url,function (data,status){
		alert("successfully submitted")
		window.location = "payments.php"
		})
	  }
   }
 });