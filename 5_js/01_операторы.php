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
	У операторов есть своя терминология, которая используется во всех языках программирования.

Прежде, чем мы двинемся дальше – несколько терминов, чтобы понимать, о чём речь.

Операнд – то, к чему применяется оператор. Например: 5 * 2 – оператор умножения с левым и правым операндами. Другое название: «аргумент оператора».

Унарным называется оператор, который применяется к одному операнду. Например, оператор унарный минус "-" меняет знак числа на противоположный:

 


var x = 1;

x = -x;
alert( x ); // -1, применили унарный минус
Бинарным называется оператор, который применяется к двум операндам. Тот же минус существует и в бинарной форме:

 var x = 1, y = 3;
alert( y - x ); // 2, бинарный минус
Сложение строк, бинарный +
Обычно при помощи плюса '+' складывают числа.

Но если бинарный оператор '+' применить к строкам, то он их объединяет в одну:

var a = "моя" + "строка";
alert( a ); // моястрока
Иначе говорят, что «плюс производит конкатенацию (сложение) строк».

Если хотя бы один аргумент является строкой, то второй будет также преобразован к строке!

Причем не важно, справа или слева находится операнд-строка, в любом случае нестроковый аргумент будет преобразован. Например:

 alert( '1' + 2 ); // "12"
alert( 2 + '1' ); // "21"
Это приведение к строке – особенность исключительно бинарного оператора "+".

Остальные арифметические операторы работают только с числами и всегда приводят аргументы к числу.

Например:

 alert( 2 - '1' ); // 1
alert( 6 / '2' ); // 3
Преобразование к числу, унарный плюс +
Унарный, то есть применённый к одному значению, плюс ничего не делает с числами:

 alert( +1 ); // 1
alert( +(1 - 2) ); // -1
Как видно, плюс ничего не изменил в выражениях. Результат – такой же, как и без него.

Тем не менее, он широко применяется, так как его «побочный эффект» – преобразование значения в число.

Например, когда мы получаем значения из HTML-полей или от пользователя, то они обычно в форме строк.

А что, если их нужно, к примеру, сложить? Бинарный плюс сложит их как строки:

 var apples = "2";
var oranges = "3";

alert( apples + oranges ); // "23", так как бинарный плюс складывает строки
Поэтому используем унарный плюс, чтобы преобразовать к числу:

 var apples = "2";
var oranges = "3";

alert( +apples + +oranges ); // 5, число, оба операнда предварительно преобразованы в числа
С точки зрения математики такое изобилие плюсов может показаться странным. С точки зрения программирования – никаких разночтений: сначала выполнятся унарные плюсы, приведут строки к числам, а затем – бинарный '+' их сложит.

Почему унарные плюсы выполнились до бинарного сложения? Как мы сейчас увидим, дело в их приоритете.

Приоритет
В том случае, если в выражении есть несколько операторов – порядок их выполнения определяется приоритетом.

Из школы мы знаем, что умножение в выражении 2 * 2 + 1 выполнится раньше сложения, т.к. его приоритет выше, а скобки явно задают порядок выполнения. Но в JavaScript – гораздо больше операторов, поэтому существует целая таблица приоритетов.

Она содержит как уже пройденные операторы, так и те, которые мы еще не проходили. В ней каждому оператору задан числовой приоритет. Тот, у кого число больше – выполнится раньше. Если приоритет одинаковый, то порядок выполнения – слева направо.

Отрывок из таблицы:

Приоритет	Название	Обозначение
…	…	…
15	унарный плюс	+
15	унарный минус	-
14	умножение	*
14	деление	/
13	сложение	+
13	вычитание	-
…	…	…
3	присваивание	=
…	…	…
Так как «унарный плюс» имеет приоритет 15, выше, чем 13 у обычного «сложения», то в выражении +apples + +oranges сначала сработали плюсы у apples и oranges, а затем уже обычное сложение.

Оператор взятия остатка % интересен тем, что, несмотря на обозначение, никакого отношения к процентам не имеет.
Его результат a % b – это остаток от деления a на b.

Например:

alert( 5 % 2 ); // 1, остаток от деления 5 на 2
alert( 8 % 3 ); // 2, остаток от деления 8 на 3
alert( 6 % 3 ); // 0, остаток от деления 6 на 3
</script>






</body>
</html>

