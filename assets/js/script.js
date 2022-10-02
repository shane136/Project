// display_img
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
//end


// var button = document.getElementById("button");
// var makepdf = document.getElementById("makepdf");

// button.addEventListener("click", function () {
// 	html2pdf().from(makepdf).save();
// });

/*--This JavaScript method for Print command--*/
function PrintDoc() {
	var toPrint = document.getElementById('printarea');
	var popupWin = window.open('', '_blank', 'width=350,height=150,location=no,left=200px');
	popupWin.document.open();
	popupWin.document.write('<html><title>::Preview::</title><link rel="stylesheet" href="../assets/css/print.css" type="text/css"></head><body onload="window.print()">')
	popupWin.document.write(toPrint.innerHTML);
	popupWin.document.write('</html>');
	popupWin.document.close();
}
