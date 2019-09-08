<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://localhost/test.ru/css/style.css">
</head>

<body>
<style type="text/css">
	



</style>
<? 
error_reporting(E_ALL);
$connect = new mysqli("localhost", "root", "mysql", "test");
date_default_timezone_set('Europe/Moscow');
$date_time = strval(date("Y.m.d H:i"));
$query = "INSERT INTO `testtable` (`id`, `name`, `last`, `date`) VALUES (null, 'myname', 'mylast', '$date_time')";
if(mysqli_query($connect, $query)){
	 echo $date_time;
}
else{
	echo "error <br><br>";
}


?>









</body>
</html>

