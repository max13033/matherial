<!DOCTYPE HTML>
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
		height: 500px;
		background-color: #999;
	}
	.block{
		width: 100px;
		height: 100px;
		background-color: #900;
		position: absolute;
		top: 0;
		left: 0;
		transform-origin: 0 0; 

	}
	.but:hover > .block{
		animation: move 4s infinite ease ;
	}
	.but{
		width: 100px;
		height: 100px;
		position: absolute;
		top: 300px;
		left: 300px;
		background-color: #990;

	}
	@keyframes move{
		0% {transform: translate(200px, -200px);}
		25% {transform: translate(200px, 200px);}
		50% {transform: translate(-200px, 200px);}
		75% {transform: translate(-200px, -200px);}
		100% {transform: translate(200px, -200px);}
	}
</style>


<? 

?>
<div class="cont">
	<div class="but">
		<div class="block">
		</div>
	</div>
</div>








</body>
</html>

