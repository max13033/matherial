<!DOCTYPE HTML>
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>

<body>
<script type="text/javascript">

</script>
<?
if(isset($_FILES['newfile']['tmp_name'])){
	echo $_FILES['newfile']['tmp_name']."<br>";
	echo $_FILES['newfile']['name']."<br>";
	echo $_FILES['newfile']['size']."<br>";
	echo $_FILES['newfile']['type']."<br>";
	echo $_FILES['newfile']['error']."<br>";
	move_uploaded_file($_FILES['newfile']['tmp_name'], "user_files/1.jpg");
}

if(isset($_FILES['morefile'])){
	echo "file2<br>";
	$num_foto = count($_FILES['morefile']['tmp_name']);
	echo $num_foto;
}

?>
<form method="post" enctype="multipart/form-data">  	<!-- загрузка одного файла (любого типа) -->
	<input type="file" name="newfile" >
	<input type="submit" >
</form>

<form method="post" enctype="multipart/form-data">  	<!-- загрузка нескольких файлов (картинки) -->
	<input type="file" name="morefile[]" multiple accept = "image/jpeg">  

	<!-- создадутся файлы с названиями  $_FILES['morefile']['name'][0], $_FILES['morefile']['name'][1] и т.д. -->
	
 	<input type="submit" >
</form>



</body>
</html>

