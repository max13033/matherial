<!DOCTYPE HTML>
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>

<body>

<style type="text/css">
	#cont{
/*		background-color: #ddf;*/
		border: 1px solid #000;
		width: 600px;
		height: 300px;
		-webkit-transform-style: preserve-3d; 
		-webkit-transform: perspective(500px);
	}	
	#block1{
		width: 600px;
		height: 300px;
		position: absolute;
		top: 0;
		left: 0;
		opacity: 0.5;
		background-color: #dfd;
		-webkit-transform-origin: 0 0;
		-webkit-transform: rotate3d(0, 1, 0, 60deg);
	}
	#block2{
		width: 600px;
		height: 300px;
		background-color: #fdd;
		position: absolute;
		top: 0;
		right: 0;
		opacity: 0.5;
		-webkit-transform-origin: 100% 0;
		-webkit-transform: rotate3d(0, 1, 0, -60deg);
	}
</style>


<div id = "cont">
	<div id = "block1">
		<h1> Бани и <br>сауны</h1>
	</div>
	<div id = "block2">8-918-343-54-45</div>

</div>	

</body>
</html>

