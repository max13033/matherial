<?
session_start();

?>
<!DOCTYPE HTML>
<html>
<head>
	<title>test</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	
</head>

<body>

<form method="post">
	<label >Введите IP</label>
	<input type="text" name="text"><br><br>
	<input type="submit" >
</form>	

<?
$log = file_get_contents('log.txt');
// echo "log = $log";


if(isset($_POST['text'])){
	$text = $_POST['text'];

	if(strpos($log, $text)){
	//	echo "Текст есть";
		$pos = strpos($log, $text); // находим позицию IP адреса
		$ip_count_ = substr($log, $pos);  // отрезаем начало файла
		$count_pos = strpos($ip_count_, ' ');  // находим начало счётчика
		$count = intval(substr($ip_count_, $count_pos+1));  // 
		$count_len = strlen($count);
		$new_count = $count + 1;
		$ip_count_len = strlen("$text $count");
		$subject = "$text $new_count";
		$ip_count = substr($ip_count_, 0, $ip_count_len);
		$new_log = str_replace($ip_count, $subject, $log);
		echo "new_log = $new_ip_count";
		file_put_contents('log.txt', $new_log);
	}
	else{
		file_put_contents('log.txt', "IP = $text 1 <br>\r\n", FILE_APPEND);
	}
}	

	





?>


<div>
	$test = <br>"<?=$new_log?>" <br><br>

	From file: <br><?=$log?>
</div>



</body>
</html>