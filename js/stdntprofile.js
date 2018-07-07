// JavaScript Document
$(document).ready(function(e){
	$('#btnpfle').bind('click',function(e){
		e.preventDefault()
		var regno = $('#RegNo').val()
		var firstname = $('#firstname').val()
		var lastname = $('#lastname').val()
		var username = $('#username').val()
		var mobileno = $('#mobileno').val()
		var county  = $('#county').val()
		var mail = $('#mail').val()
		
		if (regno.length<=0||firstname.length<=0||lastname.length<=0||username.length<=0||mobileno.length<=0||county.length<=0||mail.length<=0){
		alert("Please fill in all the fields")
		}
		else{
			var url = "stdntprofile.php?RegNo="+regno+"&firstname="+firstname+"&lastname="+lastname+"$username="+username+"$mobileno="+mobileno+"
			$county="+county+"$mail="+mail
			$.get(url,function(data,status){
				if(data=1){
				e.preventDefault()
				alert('You have successfully submited your details')
				window.location = "studentprofile1.php"
				}
				else{
					alert('Problem Occured during submission, Please try again later')
					}
				})
			}
		 })					
							
	});