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

<button onclick="alert('После нажатия кнопки')"> Нажми меня</button>

<script type="text/javascript">
	var fact = 1;
	for( i = 1; i < 10; i++){
		fact = fact*i;
		document.write(i + "! = " + fact + "<br>");
	}

// Объявлять переменные можно через var или let;

// Внешне, от «var» не сильно отличается, зато какая разница в поведении: — область видимости переменной «let» ограничена блоком {...}, в отличии от «var», которая видна везде внутри функции:

var a = 0; if (true) { var a = 1000; alert(a); // 1000 } alert(a); // 1000

А теперь сравните с поведением «let»:

let a = 0; if (true) { let a = 1000; alert(a); // 1000 } alert(a); // 0

— переменная «let» видна только после объявления:
		alert(a); // undefined var a = 0;
		alert(b); // error: 'b' is not defined let b = 0;

— переменную «let» нельзя объявить повторно:
		var a; var a; // ок
		let b; let b; // error: 'b' has already been declared

— внутри цикла переменная «let» будет объявлена новая для каждой итерации:
		for (var i = 0; i < 10; i++) { /* … */ } alert(i); // 10
		for (let j = 0; j < 10; j++) { /* … */ } alert(j); // error: 'j' is not defined


//  В JavaScript'е до ES-2015 не было констант, но поскольку необходимость в них всё же была и до того, то была неглассная договорённость: переменные, набранные в верхнем регистре через подчёркивание, не изменять:

var USER_STATUS_ACTIVE = 1; 
var USER_STATUS_BANNED = 2;
// по новым стандартам:

const USER_STATUS_ACTIVE = 1; 
USER_STATUS_ACTIVE = 2; // error: assignment to constant variable


Типы данных:

ЧИСЛО - number

СТРОКА   string

ЛОГИЧЕСКИЙ   boolean 

NULL   -  Значение null не относится ни к одному из типов выше, а образует свой отдельный тип, состоящий из единственного значения null:
	var age = null;
	В JavaScript null не является «ссылкой на несуществующий объект» или «нулевым указателем», как в некоторых других языках. Это просто специальное значение, которое имеет смысл «ничего» или «значение неизвестно». В частности, код выше говорит о том, что возраст age неизвестен.

UNDEFINED   Значение undefined, как и null, образует свой собственный тип, состоящий из одного этого значения. Оно имеет смысл «значение не присвоено».
	Если переменная объявлена, но в неё ничего не записано, то её значение как раз и есть undefined:
 		var x;
		alert( x ); // выведет "undefined"
	Можно присвоить undefined и в явном виде, хотя это делается редко:
 		var x = 123;
		x = undefined;
		alert( x ); // "undefined"
	В явном виде undefined обычно не присваивают, так как это противоречит его смыслу. Для записи в переменную «пустого» или «неизвестного» значения используется null.

ОБЪЕКТЫ object  Первые 5 типов называют «примитивными». Особняком стоит шестой тип: «объекты».Он используется для коллекций данных и для объявления более сложных сущностей. Объявляются объекты при помощи фигурных скобок {...}, например:
		var user = { name: "Вася" };




// переменные могут начинаться с буквы, знака подчёркивания или со знака $
// регистр имеет значение

/*	Зарезервированные слова

break 		do 			if 			switch 	typeof
case 		else 		in 			this 	var
catch		false 		instanceof 	throw 	void
continue 	finally 	new 		true 	while
default		for 		null 		try 	with
delete 		function 	return
														*/
/*
arguments 			encodeURI 	Infinity 	Object			String
Array 				Error 		isFinite 	parseFloat 		SyntaxError
Boolean 			escape 		isNaN 		parseInt 		TypeError
Date 				eval 		Math 		RangeError 		undefined
decodeURI 			EvalError 	NaN 		ReferenceError 	unescape
decodeURIcomponent 	Function 	Number 		RegExp 			URIError
														*/
/* 
NaN - не число (функция для проверки isNan() );
isFinite()   показывает, конечно ли число. Т.е. не равно NaN и бесконечности;

управляющие последовательности

\0 Символ NUL (\u0000)
\b «Забой» (\u0008)
\t Горизонтальная табуляция (\u0009)
\n Перевод строки (\u000A)
\v Вертикальная табуляция (\u000B)
\f Перевод страницы (\u000C)
\r Возврат каретки (\u000D)
\" Двойная кавычка (\u0022)
\' Одинарная кавычка (\u0027)
\\ Обратный слэш (\u005C)
\xXX Символ Latin-1, заданный двумя шестнадцатеричными цифрами XX
\uxXXXX Unicode-символ, заданный четырьмя шестнадцатеричными цифрами XXXX
\XXX Символ из набора Latin-1, заданный тремя восьмеричными цифрами
XXX, с кодом в диапазоне от 1 до 377. Не поддерживается ECMAScript v3;
такой способ записи не должен использоваться

*/
</script>






</body>
</html>

