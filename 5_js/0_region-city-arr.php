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

		var arr23 = new Array('Краснодар',	'Анапа', 'Геленджик', 'Джубга');

		var arr77 = new Array('Москва', 'Химкм', 'Шереметьево', 'Подольск');
		switch (region){
			case 'Московская обл.':
				arr = new Array();
				arr = arr77;
				var text = "<select  name = 'city'>";

				for(var i = 0; i <= arr.length - 1 ; i++){
					text += "<option value='" + arr[i] + "'>" + arr[i] + "</option>";
				}

				text += "</select><br><br><input id = 'submit' type='submit' >";
				document.getElementById('city').innerHTML = text;
			break;

			case 'Краснодарский край':
				arr = new Array();
				arr = arr23;
				var text = "<select  name = 'city'>";

				for(var i = 0; i <= arr.length - 1 ; i++){
					text += "<option value='" + arr[i] + "'>" + arr[i] + "</option>";
				}
				
				text += "</select><br><br><input id = 'submit' type='submit' >";
				document.getElementById('city').innerHTML = text;
			break;

			default:
				alert("Регион не выбран");
				document.getElementById('city').innerHTML = "";
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

