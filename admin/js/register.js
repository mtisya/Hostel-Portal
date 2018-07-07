// JavaScript Document
$(document).ready(function(e) {
	$('.error').hide()
	$('#notify').hide()
    $('#btnreg').bind('click',function(e){
		e.preventDefault()
		var username = $('#username').val()
		var users = username.split(" ");
		var passwd = $('#Password').val()
		var cpasswd = $('#Cpassword').val()
		var passwd = $('#Password').val()
		if (username.length<=0||users.length>1||passwd.length<8||passwd!=cpasswd){
			$('#notify').html("Please Correct All errors First");
			$('#notify').fadeIn('slow')
			}
		else {
			$('#notify').fadeOut('slow')
			var url = "regstudent.php?uname="+username+"&passwd="+passwd
			$.get(url,function(data,status){
				alert(data)
				alert("Student Registered Successfully,Please Login")
				window.location = "userlogin.php"
				})
			}

		})
		$('#student').bind('blur',function(e){
			var stud = $('#student').val()
			
			if (stud.length<=0){
				$('#errstud').attr('title',"Student Field Cannot be Empty")
				$('#errstud').show('slow');
				}
				else {
					$.get('checkid.php?id='+stud,function(data,status){
						if (data<=0){
							$('#errstud').attr('title',"Student Not Registered please consult the admin")
				$('#errstud').show('slow');
							}
							else {
								$('#errstud').fadeOut('slow');
								}
						})
					}
			
			})
	$('#username').bind('blur',function(e){
		var username = $('#username').val()
		var users = username.split(" ");
		if (username.length<=0){
			$('#erruname').attr('title','Username Field Cannot be Empty')
						$('#erruname').fadeIn('slow')

			}
		else if (users.length>1){
			$('#erruname').attr('title','Spaces not allowed')
						$('#erruname').fadeIn('slow')

			}
		else {
			$('#erruname').fadeOut('slow')
			}
		})
	$('#Password').bind('blur',function(e){
		var passwd = $('#Password').val()
		if (passwd.length<8){
			$('#errpasswd').attr('title','Minimum length of password is 8 characters')
			$('#errpasswd').fadeIn('slow')
			}
		else {
			$('#errpasswd').fadeOut('slow')
			}
		})
	$('#Cpassword').bind('blur',function(e){
		var cpasswd = $('#Cpassword').val()
		var passwd = $('#Password').val()
		if (passwd != cpasswd){
			$('#errconf').attr('title','Passwords Do Not Match')
			$('#errconf').fadeIn('slow')
			}
		else {
			$('#errconf').fadeOut('slow')
			}
		})
		$('#hname').bind('change',function(e){
			var hid = $('#hname').val()
			var url = "getRooms.php?hostel="+hid
			$.get(url,function(data,status){
				$('#roomno').html(data)
				})
			})
});