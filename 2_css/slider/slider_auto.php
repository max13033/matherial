<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://localhost/test.ru/css/style.css">
</head>

<body>
<style type="text/css">
.cont{
	width: 500px;
	height: 400px;
	background-color: #777;
	overflow: hidden;
}

.slide{
	width: 1500px;
	height: 300px;
	background-color: #569;
	margin: auto;
	animation: move 4s infinite ease;
	position: relative;
	left: 0;
}

.img{
	width: 500px;
	height: inherit;
	margin: -2px;
}
@keyframes move{
		0% {left: 0px;}

		33% {left: -500px;}

		66% {left: -1000px;}
}

</style>
<div class="cont">
	<div class="slide">
		<img class = "img" src = "img/slide1.jpg">
		<img class = "img" src = "img/slide2.jpg">
		<img class = "img" src = "img/slide3.jpg">
	</div>


</div>

<? 



?>









</body>
</html>

