<!DOCTYPE HTML>
<html>
<head>
	<title>Заказы</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="img/favicon.png" type="image/png">
	<meta name='viewport' content='width=device-width,initial-scale=1'/>
	<meta content='true' name='HandheldFriendly'/>
	<meta content='width' name='MobileOptimized'/>
	<meta content='yes' name='apple-mobile-web-app-capable'/>	
</head>

<body>

<?
//  strlen () принимает в качестве единственного аргумента строку $string и возвращает ее длину.
int strlen (string $string);

//  Функция chr() принимает в качестве аргумента ASCII-кoд $ascii символа и возвращает
//  соответствующий этому коду фактический символ:
string chr (int $ascii)

echo chr(36); // $ - имеет код 36

//  Функция ord () выполняет действие, обратное функции chr () - возвращает ASCIIкoд
//  символа, переданного ей в качестве аргумента
int ord(string $str)
//  Если параметр $str функции ord () содержит более одного символа, ASCil-кoд
//  будет возвращен только для первого .

echo ord('$') ; // 36

//  Функция substr() возвращает часть строки (подстроку) и имеет следующий синтаксис:
//  string suЬstr(string $str, int $start [, int $length ] )
//  В качестве первого аргумента $str функции передается исходная строка , из которой
//  вырезается текст; второй аргумент $star t определяет начало подстроки (отсчет
//  начинается с нуля) ; третий аргумент $length задает длину возвращаемой подстроки
//  в символах . Если третий аргумент не указан , то возвращается вся оставшаяся часть строки.

$str '04.05.2017';
echo 'день - '.substr($str, 0, 2).' <br /> '; // день - 04
echo 'месяц - '.suЬstr($str, 3, 2) . ' <br /> '; //месяц - 05
echo 'год - '.substr($str, 6).'<br />'; // ГОД - 2017

//  Функция strpos() возвращает позицию вхождения подстроки в строку и имеет следующий
mixed strpos (string $str, mixed $search [, int $offset = 0 ] );
//  Функция возвращает позицию в строке $str первого вхождения подстроки $search.
//  Необязательный параметр $offset позволяет задать позицию, начиная с которой
//  будет осуществляться поиск. Если строка не найдена, возвращается false. 
echo strpos('Hello, world!', 'world'); // 7




?>
</body>
</html>