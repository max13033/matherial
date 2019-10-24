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

<button onclick="alert('После нажатия кнопки')"> Нажми меня</button>   <!-- alert - просто выводит вспомогательно окно с указанным текстом -->

<!-- Если указан атрибут src, то содержимое тега игнорируется.
В одном теге SCRIPT нельзя одновременно подключить внешний скрипт и указать код.
Вот так не сработает: -->

<script src="file.js">
  alert(1); // так как указан src, то внутренняя часть тега игнорируется
</script>

<script type="text/javascript">

// Функция prompt принимает два аргумента:

result = prompt(title, default);
// Она выводит модальное окно с заголовком title, полем для ввода текста, заполненным строкой по умолчанию default и кнопками OK/CANCEL.
// Пользователь должен либо что-то ввести и нажать OK, либо отменить ввод кликом на CANCEL или нажатием Esc на клавиатуре.

result = confirm(question);
// confirm выводит окно с вопросом question с двумя кнопками: OK и CANCEL.
// Результатом будет true при нажатии OK и false – при CANCEL(Esc).
// Например:

var isAdmin = confirm("Вы - администратор?");
alert( isAdmin );


// Атрибут async
// 	Поддерживается всеми браузерами, кроме IE9-. Скрипт выполняется полностью асинхронно. 
// 	То есть, при обнаружении <script async src="..."> браузер не останавливает обработку страницы, 
// 	а спокойно работает дальше. Когда скрипт будет загружен – он выполнится.

// Атрибут defer
// 	Поддерживается всеми браузерами, включая самые старые IE. Скрипт также выполняется асинхронно, 
// 	не заставляет ждать страницу, но есть два отличия от async.

// Первое – браузер гарантирует, что относительный порядок скриптов с defer будет сохранён.

// То есть, в таком коде (с async) первым сработает тот скрипт, который раньше загрузится:  </script>

<script src="1.js" async></script>
<script src="2.js" async></script>

А в таком коде (с defer) первым сработает всегда 1.js, а скрипт 2.js, даже если загрузился раньше, будет его ждать.

<script src="1.js" defer></script>
<script src="2.js" defer></script>

Поэтому атрибут defer используют в тех случаях, когда второй скрипт 2.js зависит от первого 1.js, к примеру – использует что-то, описанное первым скриптом.

Второе отличие – скрипт с defer сработает, когда весь HTML-документ будет обработан браузером.

Например, если документ достаточно большой…

<script src="async.js" async></script>
<script src="defer.js" defer></script>

…То скрипт async.js выполнится, как только загрузится – возможно, до того, как весь документ готов. А defer.js подождёт готовности всего документа.
Атрибуты async/defer работают только в том случае, если назначены на внешние скрипты, т.е. имеющие src.
При попытке назначить их на обычные скрипты <sc + ript>…</script>, они будут проигнорированы.

Стандарт ECMAScript 5 (ES5), одновременно добавил новые возможности и внёс в язык ряд исправлений, 
которые могут привести к тому, что старый код, который был написан до его появления, перестанет работать.
Чтобы этого не случилось, решили, что по умолчанию эти опасные изменения будут выключены, 
и код будет работать по-старому. А для того, чтобы перевести код в режим полного соответствия современному стандарту, 
нужно указать специальную директиву use strict.

Директива выглядит как строка "use strict"; или 'use strict'; и ставится в начале скрипта. 
Не существует директивы no use strict или подобной, которая возвращает в старый режим.
Если уж вошли в современный режим, то это дорога в один конец.

<script>

// переменный могут начинаться с буквы, знака подчёркивания или со знака $

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
