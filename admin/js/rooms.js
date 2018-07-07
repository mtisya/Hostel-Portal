// JavaScript Document
$(document).ready(function(e) {
    $('#hname').bind('change',function(e){
			var hostel = $('#hname').val()
			var url = "getrooms.php?hostel="+hostel
			$.get(url,function(data,status){
				$('#roomno').html(data)
				
				})
		})
	
});