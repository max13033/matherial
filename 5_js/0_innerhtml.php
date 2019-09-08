<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Сайт</title>

</head>

<body>
<style type="text/css">
	#but{
		width: 100px;
		height: 100px;
		background-color: #595;
	}
</style>
<script type="text/javascript">





</script>

<div id="but" onclick='document.getElementById("mytext").innerHTML = "Заменяющий текст" '></div>
<div id="mytext">Первый текст </div>

<div id="but" onclick='document.getElementById("mytext2").innerHTML += "добавляемый текст" '></div>
<div id="mytext2">Первый текст </div>

</body>
</html>