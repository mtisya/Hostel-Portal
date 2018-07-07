// JavaScript Document
$(document).ready(function(e) {
  var date = new Date();
 var curryear = date.getFullYear();
 var prevdate = curryear-5
 for (var i=prevdate;i<=curryear;i++){
 var nextdate = i + 1;
 var str = "<option value="+i+"/"+nextdate+">"+i+"/"+nextdate+"</option>";
 $('#cboacad').append(str);
    
 }
$('#txtsearch').bind('keyup',function(e){
	var str = $('#txtsearch').val();
	var year = $('#cboacad').val();
	var sem = $('#cbosem').val();
	var url = "reportsearch.php?year="+year+"&sem="+sem+"&str="+str
	$.get(url,function(data,status){
		$('#tblres').html(data);
		})
	})
$('#btnfilter').bind('click',function(e){
	var year = $('#cboacad').val();
	var sem = $('#cbosem').val();
	var url = "semsearch.php?year="+year+"&sem="+sem
	$.get(url,function(data,status){
		$('#tblres').html(data);
		})
	})
	$('#vacancysearch').bind('keyup',function(e){
		var str = $('#vacancysearch').val();
		var url = "vacancysearch.php?str="+str
		$.get(url,function(data,status){
			$('#unallocated').html(data)
			})
		})

});

	



