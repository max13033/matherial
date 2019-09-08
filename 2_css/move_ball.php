<!DOCTYPE HTML>
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://localhost/test.ru/css/style.css">
</head>

<body>



<? 


?>
<style type="text/css">
	#start:checked ~ .text{
			left: 200px;
			transform: rotate(-360deg);
			}
	#start:checked ~ .ball{
			left: 200px;
			}" 	
	.cont{
		width: 1000px;
		height: 1000px;
		background-color: #ddd;

	}
	.ball{
		width: 200px;
		height: 200px;
		position: absolute;
		top: 100px;
		left: 1000px;
		transition-property: left;
		transition-duration: 2s;
		background: radial-gradient(circle at 35% 20%, #e6e6ff, #000080 60%, #000033 93%);
		border-radius: 50%;
	}
	.text{
		width: 200px;
		height: 200px;
		position: absolute;
		top: 100px;
		left: 1000px;
		transition-property: left transform;
		transition-duration: 2s;
		display: flex;
	}	

	.text_p{
		display: block;
		margin: auto;
		font-size: 30pt;
		color: #fff;
	}
	.start{
		background-color: #833;
		width: 20px;
		height: 20px;
	}
</style>

<div class="cont">
	<input id = "start" type = "checkbox"><label for="start">Показать меню</label>
	<div class="ball"></div>
	<div class="text">
		<p class="text_p">Главная</p>
	</div>

</div>







</body>
</html>

