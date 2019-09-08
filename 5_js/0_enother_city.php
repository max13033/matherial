<!DOCTYPE HTML>
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

</head>

<body>
<style type="text/css">
	

</style>

<script type="text/javascript">

	function check(x){
		if(x == ""){
			var newcity = prompt('Введите название населённого пункта.');
			if(newcity != null && newcity != ''){
				if(newcity.search(/[^а-яА-Я0-9-\.]/) != '-1'){
					alert('Используйте только русские буквы.');
				}
				else{newCity(newcity);}
			}
		}
	}
	function newCity(city){
		document.getElementById('newcity').name = 'city';
		document.getElementById('newcity').style.display = 'inline';
		document.getElementById('newcity').value = city;
	}

</script>

<form method="get" enctype = "multipart/form-data" >

	<select name="city" onchange = "var city = this.value; check(city);">
		<option value="Астрахань">Астрахань</option>
		<option value="Краснодар">Краснодар</option>
		<option value="">Другой</option>

	</select>


	<input type="text" id = "newcity" style="display: none;">

	<input type="submit" value="Сохранить">


</form>

<?
if(isset($_GET['city'])){
	echo $_GET['city'];
}



?>



</body>
</html>	
