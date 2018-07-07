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
				alert("Student Not Found Please Contact Admin");

			}
			else {
			var datas = data.split(":")
			if (datas.length>0){
			$('#firstname').val(datas[1])
			$('#lastname').val(datas[2])
 			$('#mobileno').val(datas[3])
			$('#verified').val(datas[4])
			$('#btnsubmit').fadeIn('slow')
			}
			
			}
			})
		})
});