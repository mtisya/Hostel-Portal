// JavaScript Document
$(document).ready(function(e) {
	$('#btnsubmit').hide();
	$('#btnsubmit').bind('click',function(e){
		e.preventDefault()
		var id = $('#studentid').val()
		var url = "alloc.php?id="+id
		window.location = url
		})
    $('#studentid').bind('blur',function(e){
		var id = $('#studentid').val()
		var url = "checkBookings.php?id="+id
		$.get(url,function(data,status){
			if (data == 0){
				alert("Student Not Registered Please Contact Admin");
				window.location = "student home.php"
			}
			else {
			var datas = data.split(":")
			if (datas.length>0){
			$('#firstname').val(datas[0])
			$('#lastname').val(datas[1])
 			$('#mobileno').val(datas[2])
			$('#btnsubmit').fadeIn('slow')
			}
			
			}
			})
		})
});