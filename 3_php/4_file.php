<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
	Выберите файл
	<form method = "post" enctype="multipart/form-data">
		<input type = "file" name="filename"  accept = "image/jpeg, image/png, image/gif" > 
		<input type = "submit" value = "Сохранить">
	</form> <br><br>

<?
	if(is_uploaded_file($_FILES['filename']['tmp_name'])){
		move_uploaded_file($_FILES['filename']['tmp_name'], "img/pic.jpg");
	}
?>

	Загрузка нескольких файлов	
	<form method = "post" enctype="multipart/form-data">
		<input type = "file" name="namefile[]" multiple accept = "image/jpeg, image/png, image/gif" required> 
		<input type = "submit" value = "Сохранить">
	</form>
<?
if(isset($_FILES['namefile'])){
//  1 Способ:
	foreach ($_FILES['namefile']['tmp_name'] as $key => $value) {
		move_uploaded_file($_FILES['namefile']['tmp_name'][$key], "img/".$key.".jpg");
	}
	
// 2 способ:
	$num_files = count($_FILES['namefile']['tmp_name']);
	for($i = 0; $i < $num_files; $i++){
		move_uploaded_file($_FILES['namefile']['tmp_name'][$i], "img/".$i.".jpg");
	}

}
function photo_type($name){   //  ФУНКЦИЯ ПРОВЕРКИ РАСШИРЕНИЯ ФОТО

	$name = basename($name);

	$pattern1 = "/\.jpeg$/";
	$pattern2 = "/\.png$/";
	$pattern3 = "/\.gif$/";

	if(preg_match($pattern1, $name)){
		$rass = ".jpeg";
	}
	elseif(preg_match($pattern2, $name)){
		$rass = ".png";
	}
	elseif(preg_match($pattern3, $name)){
		$rass = ".gif";
	}
	else{
		$rass = ".jpg";
	}
	return $rass;
}


?>
</body>
</html>