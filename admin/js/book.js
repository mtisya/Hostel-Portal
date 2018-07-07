// JavaScript Document
$(document).ready(function(e) {
    $('#btnbook').bind('click',function(e){
		e.preventDefault()
		var student = $('#student').val()
		var year = $('#yr_of_study').val()
		var semester = $('#semester').val()
		var hname = $('#hname').val()
		var room = $('#roomno').val()
		var url = "bookroom.php?student="+student+"&semester="+semester+"&year="+year+"&hname="+hname+"&room="+room
		$.get(url,function(data,status){})
		})
});