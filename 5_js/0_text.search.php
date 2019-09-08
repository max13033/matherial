<!DOCTYPE HTML>
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://localhost/test.ru/css/style.css">
</head>

<body>

<style type="text/css">
	
</style>

<script type="text/javascript">
	function check(){
		var text = document.getElementById('login').value;
		if(text.search(/[^a-zA-Z0-9-_]/) != '-1'){ 		//	xxx.search(/yyy/)  search ищет в строке xxx шаблон yyy и если находит - выдаёт количество совпадений. Если не находит выводит "-1" 
			alert('Вы используете запрещённые символы');
			document.getElementById('submit').disabled = "disabled";
		}
		else{
			document.getElementById('submit').disabled = "";
		}
	
		
	}
	
</script>

<?

?>
<div class="cont">
	<form method="get">
		<input id="login" type="text" name="login" onchange ="check()"><br>
		<input type="password" name="password">
		<input id = "submit" type="submit" >
		
	</form>
</div>









</body>
</html>

