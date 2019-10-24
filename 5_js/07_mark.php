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

// parser:         //	сделав метку циклу, на него можно ссылаться
// while(token != null) {
// // здесь код опущен
// }

outerloop:
for(var i = 0; i < 10; i++) {
	innerloop:
		for(var j = 0; j < 10; j++) {
			if (j > 3) break; // Выход из самого внутреннего цикла (цикл не запустится снова (как в случае с continue)) 
			if (i == 2) break innerloop; // То же самое
			if (i == 4) break outerloop; // Выход из внешнего цикла (полное прекращение работы цикла, переход к коду после цикла)
			document.write("i = " + i + "   j = " + j + "<br>");
		}
}
document.write("FINAL i = " + i + " j = " + j + "<br>");

i = 0 j = 0
i = 0 j = 1
i = 0 j = 2
i = 0 j = 3
i = 1 j = 0
i = 1 j = 1
i = 1 j = 2
i = 1 j = 3
i = 3 j = 0
i = 3 j = 1
i = 3 j = 2
i = 3 j = 3
FINAL i = 4 j = 0


// Примеры функций

function welcome() { alert("Добро пожаловать на мою домашнюю страницу!"); }

function print(msg) {
	document.write(msg, "<br>");
}
function hypotenuse(x, y) {
	return Math.sqrt(x*x + y*y); // Инструкция return описана далее
}
function factorial(n) { // Рекурсивная функция
	if (n <= 1) return 1;
	return n * factorial(n - 1);
}

// Когда выполняется
// инструкция return, вычисляется выражение и его значение возвращается в каче-
// стве значения функции. Инструкция return прекращает исполнение функции,
// даже если в теле функции остались другие инструкции. Инструкция return ис-
// пользуется для возвращения значения следующим образом:
function square(x) { return x*x; }

function display_object(obj) {
// Сначала убедимся в корректности нашего аргумента
// В случае некорректности пропускаем остаток функции
	if (obj == null) return;
// Здесь находится оставшаяся часть функции...
}

</script>
</body>
</html>

