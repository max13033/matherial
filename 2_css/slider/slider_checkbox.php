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
	text-align: center;
}

.rad{
	height: 20px;
	width: 20px;
	color: green;
	background-color: red: 
}
.slide{
	width: 500px;
	height: 300px;
	background-color: #569;
	margin: auto;
	overflow: hidden;

}
.sl1{
	background-image: url(img/slide1.jpg);
	transition-property: opacity;
	transition-duration: 2s;
}
.sl2{
	background-image: url(img/slide2.jpg);
	transition-property: opacity;
	transition-duration: 2s;
}
.sl3{
	background-image: url(img/slide3.jpg);
	transition-property: opacity;
	transition-duration: 2s;
}
.img{
	width: inherit;
	height: inherit;
	opacity: 0;
	z-index: 0;
	position: absolute;
	top: 30;
	left: 30;
}
#rad1:checked ~ .slide > .sl1,
#rad2:checked ~ .slide > .sl2,
#rad3:checked ~ .slide > .sl3{
	opacity: 1;
	z-index: 1;
}
</style>
<div class="cont">
	<input id="rad1" type="radio" name="slide" checked>
	<input id="rad2" type="radio" name="slide">
	<input id="rad3" type="radio" name="slide">
	<div class="slide">
		<div class="img sl1"></div>
		<div class="img sl2"></div>
		<div class="img sl3"></div>
	</div>


</div>

<? 



?>









</body>
</html>

