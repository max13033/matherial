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
$res = $connect->query($query);
$i=1;
if($res){
	$marr[] = $res->fetch_array(MYSQLI_ASSOC);
	
}

// Функция in_array() осуществляет поиск значения в массиве и имеет следующий
// синтаксис:
Ьооl in_array(mixed $value, array $arr [, Ьооl $strict = false ] )
// Функция ищет в массиве $arr значение $value и возвращает true, если значение
// найдено, и false - в противном случае 
$nшnЬers = [0.57, '21.5', 40.52];
if (in_array(21.5, $nшnЬers)) {
	echo 'Значение 21.5 найдено';
else {
	echo 'Ничего не найдено ';
}


// Аналогично функции in_array() для поиска заданного ключа в массиве можно воспользоваться
// функцией array_key_exists(), которая имеет следующий синтаксис:
// Ьооl array_key_exists(mixed $key, array $array)
// Функция возвращает true, если ключ $key найден в массиве $arr
$arr = ['first_numЬ' => 1, 'second_numЬ' => 2];
if(array_key_exists('first_numЬ', $arr){
	echo 'ОК';
}



//	Найти ключ массива по значению позволяет функция array_search(), которая имеет
//	следующий синтаксис:
mixed array_search(mixed $value, array $arr[, Ьооl $strict = false])
//	Функция ищет значение $value в массиве $arr и, если значение найдено, возвращает
//	соответствующий ключ, в противном случае возвращается false. Если необязательный
//	параметр $strict принимает значение true, то при сравнении значения
//	элемента массива с $value будет использоваться оператор эквивалентности ===,
//	в противном случае будет использован оператор равенства ==. 

$array = [0 => 'Ыuе', 1 => 'red', 2 => 'green', 3 => 'red'J;
$key = array_search('green', $array); // $key = 2;
$key = array_search( 'red', $array) ; // $key = 1;









?>




</body>
</html>