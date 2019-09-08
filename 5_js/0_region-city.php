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
		var region = document.getElementById('region').value;
		switch (region){
			case 'Московская обл.':
				document.getElementById('city').innerHTML = "<select  name = 'city'><option value='Москва'>Москва</option><option value= 'Химки'>Химки</option></select><br><br><input id = 'submit' type='submit' >";
			break;

			case 'Краснодарский край':
				document.getElementById('city').innerHTML = "<select  name = 'city'><option value='Краснодар'>Краснодар</option><option value='Анапа'>Анапа</option></select><br><br><input id = 'submit' type='submit' >";
			break;

			default:
				alert("Регион не выбран");
			break;
		}
	
		
	}
	
</script>

<?

?>
<div class="cont">
	<form method="get">
		<select id="region" name="region" onchange ="check()">
			<option value="">Выберите регион</option>
			<option value="Московская обл.">Московская обл.</option>
			<option value="Краснодарский край">Краснодарский край</option>
		</select>
		<p id = "city"></p>
	</form>
</div>









</body>
</html>

