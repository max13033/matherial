<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
<?

define("num", 123, true); //   true - num = NUM,    false   num и NUM разные переменные
							// может быть опеределена в любом месте видимости
echo NUM;

echo "<br>";

const con = "ghj";    // по умолчанию регистрозависимая.  Должна быть определена в самой высокой области видимости

echo con;



?>
</body>
</html>