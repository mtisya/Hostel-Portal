// JavaScript Document
function verifyPayments(id){
	var mpesa = prompt("Enter MPesa ID received from client")
	var url = "verify.php?id="+id+"&mpesa="+mpesa
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET",url,true)
	xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readyState==4&&xmlhttp.status==200){
			var data = xmlhttp.responseText;
			if (data == 1){
				alert("Payment Verified")
				var url = "receipt_gen.php?id="+id
				var xmlhtp = new XMLHttpRequest();
				xmlhtp.open("GET",url,true);
				xmlhtp.onreadystatechange = function(){
					if (xmlhtp.readyState==4&&xmlhtp.status==200){
						alert("Receipt Sent to Customer Email Pending Delivery")
						}
					}
				xmlhtp.send(null)
			location.reload();
				}
			else if (data == -1){
				alert ("MPesa Codes do not match confirm with customer and try again");
				}
			}
		}
	xmlhttp.send(null)
	}
			  