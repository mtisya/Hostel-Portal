// JavaScript Document
$(document).ready(function(e) {
	
	$('#notify').hide();
    $('#btnsign').bind('click',function(e){
		e.preventDefault()
		window.location = "regform.php";
		})
	$('#btnlogin').bind('click',function(e){
		
	e.preventDefault()
	var uname = $('#username').val()
	var passwd = $('#Password').val()
		if (uname.length<=0||passwd.length<=0){
			$('#notify').html("Missing Username and/or Password")
			$('#notify').fadeIn('slow')
			}
			else{
				$('#notify').fadeOut('slow')
		var url = "loginscript.php?uname="+uname+"&passwd="+passwd;
		$.get(url,function(data,status){
			if (data == -1){
				$('#notify').html('User does not Exist.Please Register')
				$('#notify').fadeIn('slow');
				}
			else if (data == 0){
				$('#notify').html('Wrong Password Entered')
				$('#notify').fadeIn('slow');
				}
			else if (data == 1){
				window.location = "booking.php";
				}
			})
			}
		})
});