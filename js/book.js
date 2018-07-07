// JavaScript Document
$(document).ready(function(e) {
		$('#hname').bind('change',function(e){
		var hostel = $('#hname').val()
		var url = "getrooms.php?hname="+hostel
		$.get(url,function(data,status){
			if (data >= 1){
		    $('#roomno').val(data)
			}
			else{
			 alert("No Vacancy On Selected Hostel")
			}
		  })
      })
    $('#btnbook').bind('click',function(e){
		e.preventDefault()
		var student = $('#student').val()
		var year = $('#yr_of_study').val()
		var semester = $('#semester').val()
		var hname = $('#hname').val()
		var room = $('#roomno').val()
		var url = "bookroom.php?student="+student+"&semester="+semester+"&year="+year+"&hname="+hname+"&roomno="+room
		$.get(url,function(data,status){
			alert("You Have Succesfully Booked a Room.")
			window.location = "studenthome.php"
			})
		})
		
});