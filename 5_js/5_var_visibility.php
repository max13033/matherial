<!DOCTYPE HTML>
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://localhost/test.ru/css/style.css">
</head>

<body>
<style type="text/css">
	
</style>
<script type="text/javascript">

var s = "hello world"; // Значение строкового типа
var S = new String("Hello World"); // Объект String

var a = 5;		//	явное задание переменной
b = 6;	//	 неявное задание переменной (объявляется как глобальна)

scope = "глобальная"; 	// Объявление глобальной переменной, даже без var
function checkscope() {
	scope = "локальная"; 	// Ой! Мы только что изменили глобальную переменную
	document.write(scope);	 // Используется глобальная переменная
	myscope = "локальная";	 // Здесь мы неявно объявляем новую глобальную переменную
	document.write(myscope);	 // Используется новая глобальная переменная
}
checkscope(); // Печатает "локальнаялокальная"
document.write(scope); 	// Печатает "локальная"
document.write(myscope); 	// Печатает "локальная"

var scope = "глобальная область видимости"; // Глобальная переменная
function checkscope() {
	var scope = "локальная область видимости"; // Локальная переменная
	function nested() {
		var scope = "вложенная область видимости"; // Вложенная область видимости локальных переменных
		document.write(scope); // Печатает "вложенная область видимости"
	}
}



function test(o) {	
	var i = 0; // i определена во всей функции
	if (typeof o == "object") {
		var j = 0; // j определена везде, а не только в блоке
		for(var k = 0; k < 10; k++) { // k определена везде, не только в цикле
			document.write(k);
		}
		document.write(k); // k все еще определена: печатается 10
	}
	document.write(j); // j определена, но может быть не инициализирована
}

//	Правило, согласно которому все переменные, объявленные в функции, определены во всей функции, может иметь удивительные следствия. Например:
var scope = "глобальная";
function f() {
	alert(scope); // Показывает "undefined", а не "глобальная".
	var scope = "локальная"; // Переменная инициализируется здесь, но определена она везде в функции.
alert(scope); // Показывает "локальная"
}
f();

// Кто-то может подумать, что в результате первого вызова alert() будет напечата-
// но слово «глобальная», т. к. инструкция var, объявляющая локальную перемен-
// ную, еще не была выполнена. Однако согласно правилу определения областей
// видимости все происходит не так. Локальная переменная определена во всем те-
// ле функции, значит, глобальная переменная с тем же именем скрыта во всем те-
// ле функции. Хотя локальная переменная определена везде, до выполнения ин-
// струкции var она не инициализирована. Поэтому функция f в предыдущем при-
// мере эквивалентна следующему фрагменту:

function f() {
	var scope; // Локальная переменная определяется в начале функции
	alert(scope); // Здесь она существует, но имеет значение undefined
	scope = "локальная"; // Здесь мы инициализируем переменную и присваиваем ей значение
	alert(scope); // Здесь она уже имеет значение
}
// Этот пример показывает, почему хорошая практика программирования подра-
// зумевает помещение всех объявлений переменных в начале функции.


</script>







</body>
</html>

