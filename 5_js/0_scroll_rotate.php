<!DOCTYPE HTML>
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://localhost/test.ru/css/style.css">
</head>

<body>

<style type="text/css">
	#box{
		width: 100px;
		height: 100px;
		background-color: #777;
		position: fixed;
		top: 400px;
		left: 0px;
	}
	.cont{
		width: 1000px;
		height: 3000px;
		background-color: #ff8;
		background-image: url(img/moto3.jpg);
		opacity: 0.4;
	}
	#wheel{
		position: fixed;
		width: 200px;
		top: 300px;
		left: 400px;
		transform: rotate(0deg);
	}
</style>

<div class = "cont"	></div>

<div id = "box">
	Текст
</div>

<img id = "wheel" src = "img/rw.png">

<script type="text/javascript">
	window.onscroll = function(){
		var y =  window.pageYOffset
		box.style.left = y + 'px';
		wheel.style.transform = 'rotate(' + y + 'deg)';
	}


</script>	


</body>
</html>

