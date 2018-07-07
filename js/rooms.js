// JavaScript Document
$(document).ready(function(e) {
    $('#hname').bind('change',function(e){
			var hostel = $('#hname').val()
			var url = "getrooms.php?hname="+hostel
			$.get(url,function(data,status){
				$('#roomno').html(data)
				})
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
});