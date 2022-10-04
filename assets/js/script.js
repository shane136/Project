// display_img
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};


//Print
function PrintDoc() {
	var toPrint = document.getElementById('printarea');
	var popupWin = window.open('', '_blank', 'width=350,height=450,location=no,left=200px');
	popupWin.document.open();
	popupWin.document.write('<html><title>::Preview::</title><link rel="stylesheet" href="../assets/css/print.css" type="text/css"></head><body onload="window.print()">')
	popupWin.document.write(toPrint.innerHTML);
	popupWin.document.write('</html>');
	popupWin.document.close();
}

//fa fa-eye
function managePassword(){

	var password = document.getElementById("text");
	
	if(password.type === "password"){
		password.type = 'text';
		document.getElementById("iconPassword").className= "fa fa-eye";
	}else{
		password.type = 'password';
		document.getElementById("iconPassword").className= "fa fa-eye-slash";
	}
}