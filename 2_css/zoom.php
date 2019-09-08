<!DOCTYPE HTML>
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>

<body>

<style type="text/css">
	#cont{
		width: 500px;
		height: 400px;
		background-color: #ddd;
		position: relative;
		top: 100px;
		margin: auto;
		overflow: hidden;
	}
	#box{
		transition-property: width, top, left,opacity;
		width: 100%;
		position: relative;
		top: 0%;
		left: 0%; 
		transition-duration: 3s;
		transition-timing-function: ease-in;
	}

	#box:hover{
		width: 2000%;
		position: relative;
		top: -1000%;
		left: -970%; 
		opacity: 0;
	}
	img{
		width: 100%;
		height: auto;;
		opacity: 1;
	}
</style>

<div id = "cont">
	<div id = "box">
		<img src = "img/tower.jpg">
	</div>	
</div>	


</body>
</html>

