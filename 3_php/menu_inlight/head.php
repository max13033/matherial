<!DOCTYPE HTML>
<html>

<head>
	<title><?=$title?></title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="http://localhost/test.ru/css/style.css">
</head>

<body>

<style type="text/css">
	.menu{
		margin: 100px;
		width: 600px;
		height: 50px;
	}

	.but{
		background-color: #07d;
		width: 30%;
		height: 100%;
		position: relative;
		float: left;
		border-radius: 20px;
		padding: 10px;
		color: #fff;
	}
	.color{
		background-color: #09f;
	}

</style>
<div class="menu">
	<a href="page1.php"> <div class="but <? if($title == "Страница 1"){ echo "color";}?>">Страница 1</div> </a>
	<a href="page2.php"> <div class="but <? if($title == "Страница 2") echo "color";?>">Страница 2</div> </a>
	<a href="page3.php"> <div class="but <? if($title == "Страница 3") echo "color";?>">Страница 3</div> </a>

</div>

