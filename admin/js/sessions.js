// JavaScript Document
$(document).ready(function(e) {
 var date = new Date();
 var curryear = date.getFullYear();
 var prevdate = curryear-1
 var nextdate = curryear + 1;
 var str = "<option value="+prevdate+"/"+curryear+">"+prevdate+"/"+curryear+"</option><option value="+curryear+"/"+nextdate+">"+curryear+"/"+nextdate+"</option>";
 $('#cboyear').html(str);
 for (var i=1;i<=5;i++){
	 $('#cbosem').append("<option value="+i+">"+i+"</option>")
	 }
$('#btnset').bind('click',function(e){
e.preventDefault()
	var year = $('#cboyear').val()
	var sem = $('#cbosem').val()
	var url = "addSession.php?year="+year+"&sem="+sem
	$.get(url,function(data,status){
		alert(data)
		}
	)
	})
});