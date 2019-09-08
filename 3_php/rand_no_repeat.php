<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>

	<form method="post">
		<input type="text" name="min" placeholder="min"> <br> <br>
		<input type="text" name="max" placeholder="max"> <br> <br>
		<input type = "submit" value = "Отправить">
	</form>	<br>
<?

	if(isset($_POST['min']) && isset($_POST['max'])){
		$min = $_POST['min'];
		$max = $_POST['max'];
		$array = random_no_repeat($min, $max);

		foreach($array as $value){
			echo $value.'<br>'; 
		}
	}	

	function random_no_repeat($min, $max){

		$num = range($min, $max);
		shuffle($num);
		foreach ($num as $value) {
			$arr[] = $value;
		}
		return $arr;
	}

?>
</body>
</html>