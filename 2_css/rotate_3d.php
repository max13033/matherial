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
		width: 200px;
		height: 200px;
		perspective: 1000px;
		margin: 300px;
		background-color: #ddd;
		border: 1px solid black;
		perspective-origin: -50%;

	}
	.block{
		width: 200px;
		height: 200px;
		border: 2px solid green;
		transition-property: transform;
		transition-duration: 2s;
		transform: rotateX(0deg);
		transform-style: preserve-3d;
		transform-origin: 0 50%;

	}
	.block:hover{
		transform: rotateX(360deg);
	}
</style>

<?

?>
<div class="cont">
	<div class="block">Block</div>
</div>








</body>
</html>

