<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<style type="text/css">
	
	.texts{

		font-size: 2vw;
	}
	.text{

		height: 40px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 80%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: #EBA7AC;
		border: none;
	}

	#box{

		background-color: #E17F93;
		margin: auto;
		width: 300px;
		padding: 30px;
		height: 250px;
        text-align: center;
		justify-content: center;
		justify-items: center;
	}

    .p-viewer{

        width: 100%;
        margin: auto;
        position: absolute;
        left: 90px;
    }

    .fa-eye{

        color: maroon;
    }

	.name{

		color: white;
		font-size: medium;
	}

/* signup */
#wrap{
background-image: -ms-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* Mozilla Firefox */ 
background-image: -moz-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* Opera */ 
background-image: -o-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* Webkit (Safari/Chrome 10) */ 
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #FFFFFF), color-stop(1, #D3D8E8));
/* Webkit (Chrome 11+) */ 
background-image: -webkit-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* W3C Markup, IE10 Release Preview */ 
background-image: linear-gradient(to bottom, #FFFFFF 0%, #D3D8E8 100%);
background-repeat: no-repeat;
background-attachment: fixed;
}
legend{
	color:#141823;
	font-size:25px;
	font-weight:bold;
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
  text-shadow: 0px 1px 0px #898a88;
  -webkit-box-shadow: 0px 0px 0px #a4e388;
  -moz-box-shadow: 0px 0px 0px #a4e388;
  box-shadow: 0px 0px 0px #a4e388;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  border: solid #3b6e22  1px;
  text-decoration: none;
}

.signup-btn:hover {
  background: #79bc64;
  background-image: -webkit-linear-gradient(top, #79bc64, #5e7056);
  background-image: -moz-linear-gradient(top, #79bc64, #5e7056);
  background-image: -ms-linear-gradient(top, #79bc64, #5e7056);
  background-image: -o-linear-gradient(top, #79bc64, #5e7056);
  background-image: linear-gradient(to bottom, #79bc64, #5e7056);
  text-decoration: none;
}
.navbar-default .navbar-brand{
		color:#fff;
		font-size:30px;
		font-weight:bold;
	}
.form .form-control { margin-bottom: 10px; }
@media (min-width:768px) {
	#home{
		margin-top:50px;
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

