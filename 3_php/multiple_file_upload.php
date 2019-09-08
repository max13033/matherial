<!DOCTYPE HTML>
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

</head>

<body>
<style type="text/css">
	

</style>


<form method="post" enctype = "multipart/form-data" >
	<input type="file" name="pic[]" multiple = "true" accept = "image/*">
	<input type="submit" value="Сохранить">


</form>

<?

$num_f = count($_FILES['pic']['tmp_name']);
for($i = 0; $i < $num_f; $i++) {
	move_uploaded_file($_FILES['pic']['tmp_name'][$i], 'user_files/'.$_FILES['pic']['name'][$i]);  //	загружаем файлы с их настоящим именем
	// move_uploaded_file($_FILES['pic']['tmp_name'][$i], 'user_files/'.$i.'.jpg');   загружаем файл с его порядковым номером (только для расширения .jpg) !!!
}


?>



</body>
</html>	
