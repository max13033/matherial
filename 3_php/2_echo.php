<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
<?
$apple = "Яблоко";

echo '$apple';     //  Выведет    $apple

echo "$apple";		//   Выведет   Яблоко

$x = 10;
$y = 20;

echo '$x + $y';		//  Выведет   $x + $y 

echo "$x + $y";		//	выведет   10 + 20

echo $x + $y;		//   Выведет  30

echo "У меня есть $apple" ;   //		У меня есть Яблоко

echo 'Переменная $apple равна '.$apple;		//   Конкатенация строк, выведет   Переменная $apple равна Яблоко

//  Сложение массивов

$a = array(10, 20, 30);
$b = array(40, 50, 60);

$c = array_merge($a, $b);   //   выведет   10 20 30 40 50 60

$d = $a + $b ;     //    не сработает, выведет   10 20 30 


foreach($c as $value){
	echo $value."<br>";
}

echo "<br>$d<br>";

foreach ($d as $value) {
	echo $value."<br>";	
}
?>
</body>
</html>