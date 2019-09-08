<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Сайт</title>
  	<link rel="stylesheet" type="text/css" href="/test.ru/css/style.css">
</head>

<body>
<?
$arr = array(1,2,3,4);
foreach ($arr as $value) {
	echo $value."<br>";
}
echo '<br>';

for($i=0; $i < 10; $i++){
	$arr[]=$i*10;
}

foreach ($arr as $key => $value) {
	echo "key ".$key."val ".$value."<br>";
}
echo "<br><br>";

$connect=new mysqli("localhost", "root", "mysql", "lottery"); 
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
}
$query = "SELECT * from `lot1` WHERE user_id = '10'";
$res = mysqli_query($connect, $query);
$i=1;
if($res){
	$marr[] = mysqli_fetch_array($res);
	
}
foreach ($marr as $key => $value) {
	echo "key ".$key."val ".$value."<br>";
}

?>




</body>
</html>