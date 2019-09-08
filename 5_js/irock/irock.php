<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Сайт</title>

</head>

<body onload="alert('Hello, world')">
<script type="text/javascript">
	function touchRock(){
		var userName = prompt("Как Вас зовут?", "Введите ваше имя.");
		if(userName){
			alert("Рад видеть вас, " + userName + ".");
			document.getElementById("rockImg").src = "2.jpg";
		}
	}
	setTimeout("document.getElementById('rockImg').src = '1.jpg';", 5000);
</script>


	<div style="width: 500px; margin-top: 100px; text-align: center;">
		<img id="rockImg" src="1.jpg" width="150px" alt="irock" style="cursor: pointer" onclick="touchRock()">
	</div>




</body>
</html>