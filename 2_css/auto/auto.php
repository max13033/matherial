<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Главная</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>

<style>
.car{
	width: 500px;
	height: 300px;
	position: absolute;
	left: 800px;
	background-image: url(car.jpg);
	transition-property: left;
	transition-timing-function: ease;
	transition-duration: 3s;
}
.but{
	width: 100px;
	height: 50px;
	background-color: #777;
	color: #fff;
}
.wheel{
	width: 70px;
	position: absolute;
	top: 222px;
	transition-property: left rotate();
	transition-timing-function: ease;
	transition-duration: 3s;
}
.one{
	left: 852px;
}
.two{
	left: 1170px;
}
.but:hover ~ .car{
	left: 300px;
}
.but:hover ~ .one{
	left: 352px;
	transform: rotate(-360deg);

}
.but:hover ~ .two{
	left: 670px;
		transform: rotate(-360deg);
}


</style>

<body>
	<div class="conteiner">
		<div class="but">Кнопка</div>
		<div class="car"></div>
		<img class="wheel one" src="wheel.png">
		<img class="wheel two" src="wheel.png">
	</div>





</body>
</html>

