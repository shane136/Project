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

//signature
var canvas = document.getElementById('signature');
var ctx = canvas.getContext("2d");
var drawing = false;
var prevX, prevY;
var currX, currY;
var signature = document.getElementsByName('signature')[0];

canvas.addEventListener("mousemove", draw);
canvas.addEventListener("mouseup", stop);
canvas.addEventListener("mousedown", start);

function start(e) {
  drawing = true;
}

function stop() {
  drawing = false;
  prevX = prevY = null;
  signature.value = canvas.toDataURL();
}

function draw(e) {
  if (!drawing) {
    return;
  }
  // Test for touchmove event, this requires another property.
  var clientX = e.type === 'touchmove' ? e.touches[0].clientX : e.clientX;
  var clientY = e.type === 'touchmove' ? e.touches[0].clientY : e.clientY;
  currX = clientX - canvas.offsetLeft;
  currY = clientY - canvas.offsetTop;
  if (!prevX && !prevY) {
    prevX = currX;
    prevY = currY;
  }

  ctx.beginPath();
  ctx.moveTo(prevX, prevY);
  ctx.lineTo(currX, currY);
  ctx.strokeStyle = 'black';
  ctx.lineWidth = 2;
  ctx.stroke();
  ctx.closePath();

  prevX = currX;
  prevY = currY;
}

function onSubmit(e) {
  console.log({
    'name': document.getElementsByName('name')[0].value,
    'signature': signature.value,
  });
  return false;
}