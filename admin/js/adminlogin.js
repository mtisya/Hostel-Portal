// JavaScript Document
$(document).ready(function(e) {
    $('#btnlogin').bind('click',function(e){
		e.preventDefault()
		var uname = $('#txtuname').val();
		var password = $('#txtpasswd').val()
		if (uname.length<=0||password.length<=0){
			alert ("Please fill in all the fields");
			}
			else {
		var url = "loginscript.php?username="+uname+"&password="+password
		$.get(url,function(data,status){
			alert("Login Successful")
			if (data==1){
				window.location = "password_check.php"
				}
			else if (data==-1){
				alert("User Does Not Exist")
				}
				else if (data==0){
					alert("Wrong Password")
					}
			})
			}
		})
		$('#btnchange').bind('click',function(e){
			e.preventDefault();
			var passwd = $('#txtpasswd').val()
			var conf = $('#txtconf').val()
			if (passwd.length<8){
				alert("Password must at least be 8 characters long")
				}
			else if (passwd != conf){
				alert("Passwords do not match")
				}
				else {
				
				var url = "change_password.php?passwd="+passwd
				$.get(url,function(data,status){
					window.location="home.php";
					})
					}
			})
});