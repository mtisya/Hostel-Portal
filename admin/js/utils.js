// JavaScript Document
function matchDate(subject){
	if (subject.match(/[0-9]{4}-[0-9]{2}-[0-9]{2}/)) {
	return true;
} else {
return false;
}

	}
	function Redirect(url){
		window.location = url
		}
	function openWin(url,width,height){
		var left = (screen.width/2)-(width/2)
		var top = (screen.left/2)-(height/2)
		var win = window.open(url,"win","scrollbars=yes,location=no,directories=no,toolbar=no,menubar=no,resizable=no,width="+width+",height="+height+",top="+top+",left="+left)
		win.focus()
		}
	function printer(){
		window.print() 
		}