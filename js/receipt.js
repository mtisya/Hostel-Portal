// JavaScript Document
$(document).ready(function(e) {
e.preventDefault()
$('#txtsearch').bind('keyup',function(e){
	var str = $('#txtsearch').val();
	var mpesa = $('#cbompesa').val();
	var amount= $('#cboamount').val();
	var url = "receipt1.php?mpesa="+mpesa+"&amount="+amount+"&str="+str
	$.get(url,function(data,status){
		$('#tblres').html(data);
		})
	})