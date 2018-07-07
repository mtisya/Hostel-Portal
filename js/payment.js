// JavaScript Document
$(document).ready(function(e){
	$('#notify').hide()
	$('#btnpay').bind('click',function(e){
	e.preventDefault()
	var mpesa = $('#mpesa').val()
	var amount = $('#amount').val()
	var studentid = $('#studentid').val()
	if (mpesa.length<=0 || amount.length<=0 ||studentid.length<=0){
			$('#notify').html("Please Correct All errors First")
			$('#notify').fadeIn('slow')
	      }
	else {
		$('#notify').fadeOut('slow')
		var url = "addpayment.php?mpesa="+mpesa+"&amount="+amount+"&studentid="+studentid 
		$.get(url,function (data,status){
		if (data==1){
		e.preventDefault()
		$('#notify').html("Please Enter Valid Mpesa Identification Number")
		$('#notify').fadeIn('toggle')
        end()
		}
		else {
		$('#notify').fadeOut('slow')
		}
		alert("successfully submitted, You may print receipt for reference")
		window.location = "receipt_gen.php"
		})
	  }
	})
 });