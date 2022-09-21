<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style type="text/css">

/* login */
body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #B0BEC5;
    background-repeat: no-repeat;
}

.card0 {
    box-shadow: 0px 4px 8px 0px #00b3b3;
    border-radius: 0px;
}

.card2 {
    margin: 0px 40px;
}

.logo {
    width: 200px;
    height: 100px;
    margin-top: 20px;
    margin-left: 35px;
}

.image {
    width: 360px;
    height: 280px;
}

.border-line {
    border-right: 1px solid #00cccc;
}

.line {
    height: 1px;
    width: 45%;
    background-color: #E0E0E0;
    margin-top: 10px;
}

.text-sm {
    font-size: 14px !important;
}

::placeholder {
    color: #BDBDBD;
    opacity: 1;
    font-weight: 300
}

:-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
}

::-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
}

input, textarea {
    padding: 10px 12px 10px 12px;
    border: 1px solid lightgrey;
    border-radius: 2px;
    margin-bottom: 5px;
    margin-top: 2px;
    width: 200%;
    box-sizing: border-box;
    color: #2C3E50;
    font-size: 14px;
    letter-spacing: 1px;
}

input:focus, textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #304FFE;
    outline-width: 0;
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0;
}

a {
    color: inherit;
    cursor: pointer;
}

.btn-blue {
    background-color: #00b3b3;
    width: 150px;
    color: #fff;
    border-radius: 2px;
}

.btn-blue:hover {
    background-color: #000;
    cursor: pointer;
}

/* footer_ */
.bg-blue {
    color: #fff;
    background-color:#008080;
}

/* eyelashhh */
    .p-viewer{

        z-index: 9999;
	    position: absolute;
	    top: 42%;
	    right: 30px;
    }

    .p-viewer-cp{

        z-index: 9999;
        position: absolute;
        top: 64%;
        right: 30px;
}

    .fa-eye{

        color: maroon;
    }

	.name{

		color: white;
		font-size: medium;
	}

/* upload file butn */
    #yourBtn {
    position: relative;
    top: 2px;
    font-family: calibri;
    width: 150px;
    padding: 5px;
    border: 1px dashed #BBB;
    text-align: center;
    background-color: #DDD;
    cursor: pointer;
}

/* signup */
#wrap{
    
    height: 100%;
    background-color: #B0BEC5;

}

.signup-btn {
  background: #79bc64;
  background-image: -webkit-linear-gradient(top, #79bc64, #578843);
  background-image: -moz-linear-gradient(top, #79bc64, #578843);
  background-image: -ms-linear-gradient(top, #79bc64, #578843);
  background-image: -o-linear-gradient(top, #79bc64, #578843);
  background-image: linear-gradient(to bottom, #79bc64, #578843);
  -webkit-border-radius: 4;
  -moz-border-radius: 4;
  border-radius: 4px;
  font-family: Arial;
  color:#B0BEC5;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.signup-btn:hover {
  background: #79bc64;
  text-decoration: none;
}
.navbar-default .navbar-brand{
		color:#B0BEC5;
		font-size:30px;
		font-weight:bold;
	}
.form .form-control { margin-bottom: 10px; }
@media (min-width:768px) {
	#home{
		margin-top:100px;
	}
	#home .slogan{
		color: #0e385f;
		line-height: 29px;
		font-weight:bold;
	}
}

/* end */

	.grid-container {
  		display: grid;
  		grid-template-columns: 240px 1fr;
  		grid-template-rows: 50px 1fr 50px;
  		grid-template-areas:
   		 "sidenav header"
   		 "sidenav main"
   		 "sidenav footer";
 	 	height: 100vh;
}

/* Give every child element its grid name */
.header {
  grid-area: header;
  background-color: #89D5D2;
}

.sidenav {
  grid-area: sidenav;
  background-color: #008080;
}

.main {
  grid-area: main;
  background-color: #BBF1F1;
}

.footer {
  grid-area: footer;
  background-color: #89D5D2;
}

.dashboard{
	
  	color: white;
  	padding: auto;
  	text-align: center;
  	text-decoration: none;
  	font-size: 16px;
  	margin: auto;
  	cursor: pointer;
}

a:hover{
	background-color: white;

}

li{
	list-style: none;
}
</style>

