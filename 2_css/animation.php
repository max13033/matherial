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
		top: 100px;
		left: 100px;
		animation: move 4s infinite ease ;

	}
	@keyframes move{
		0% {transform: translateX(0px);		}

		25% {transform: translateX(200px);	background-color: #990;}

		50% {transform: translate(200px, 200px);	background-color: #090;}

		75% {transform: translate(0px, 200px);	background-color: #009;}
	}
</style>


<? 

?>
<div class="cont">
	<div class="block">
	</div>
</div>








</body>
</html>

