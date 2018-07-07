// JavaScript Document
$(document).ready(function(e) {
	$('.error').hide()
	$('#notify').hide()
    $('#btnreg').bind('click',function(e){
		e.preventDefault()
		var username = $('#username').val()
		var users = username.split(" ");
		var passwd = $('#passwd').val()
		var cpasswd = $('#Cpassword').val()
		
		if (username.length<=0||users.length>1||passwd.length<4||passwd!=cpasswd){
			$('#notify').html("Please Correct All errors First")
			$('#notify').fadeIn('slow')
			}
			
		else  {
			$('#notify').fadeOut('slow')
			var url = "signup.php?username="+username+"&passwd="+passwd
			$.get(url,function(data,status){
		    if (data==1){
				e.preventDefault()
				$('#notify').html("Username already in Use, Try Another One")
				$('#notify').fadeIn('slow');
				end()
		      }
			  else{}
				alert("Student Registered Successfully, Please Login")
				window.location = "studentlogin.php";
				})
			}
		})
	$('#username').bind('blur',function(e){
		var username = $('#username').val()
		var users = username.split(" ");
		if (username.length<=0){
			e.preventDefault()
			$('#erruname').attr('title','Username Field Cannot be Empty')
			$('#erruname').fadeIn('slow')
		    }
		else if (users.length>1){
			e.preventDefault()
			$('#erruname').attr('title',"Username Cannot contain spaces")
			$('#erruname').fadeIn('slow')
			}
	  
		else {
			$('#erruname').fadeOut('slow')
		}
     })
	$('#passwd').bind('blur',function(e){
		var passwd = $('#passwd').val()
		if (passwd.length<4){
			$('#errpasswd').attr('title','Minimum length of password is 4 characters')
			$('#errpasswd').fadeIn('slow')
			}
		else {
			$('#errpasswd').fadeOut('slow')
			}
		})
	$('#Cpassword').bind('blur',function(e){
		var cpasswd = $('#Cpassword').val()
		var passwd = $('#passwd').val()
		if (passwd != cpasswd){
			$('#errconf').attr('title','Passwords Do Not Match')
			$('#errconf').fadeIn('slow')
			}
		else {
			$('#errconf').fadeOut('slow')
			}
		})

});