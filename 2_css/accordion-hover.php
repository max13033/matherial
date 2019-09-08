<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Сайт</title>
  	<!-- <link rel="stylesheet" type="text/css" href="/test.ru/css/style.css"> -->
</head>

<body>
<style type="text/css">
.pt{
	width: 300px;
	height: 30px;
	background-color: #999;
	border: 1px solid black;
	border-radius: 10px;
	text-align: center;  
}
.text{
	width: 300px;
	height: 0px;
	background-color: #995;
	display: none;
	transition: height display 1s ease 0;
}
.pt:hover + .text{
	height: 130px;
	display: block;
}
.text:hover{
	height: 130px;
	display: block;
</style>
<div class="menu">
	<div class="pt">Пункт 1</div>
	<div class="text">Описание меню Описание меню Описание меню Описание меню Описание меню Описание меню</div>
	<div class="pt">Пункт 2</div>
	<div class="text">Описание меню</div>
	<div class="pt">Пункт 3</div>
	<div class="text">Описание меню</div>
	<div class="pt">Пункт 4</div>

</div>





















</body>
</html>