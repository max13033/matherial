<!DOCTYPE HTML>
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>

<body>
<style type="text/css">


</style>
<script type="text/javascript">
var pattern = /s$/;
	// Эта строка создает новый объект RegExp и присваивает его переменной pattern.
	// Данный объект RegExp ищет любые строки, заканчивающиеся символом s. (Ско-
	// ро мы поговорим о грамматике определения шаблонов.) Это же регулярное вы-
	// ражение может быть определено с помощью конструктора RegExp():
var pattern = new RegExp("s$");

Таблица Символы литералов в регулярных выражениях

\0 Символ NUL (\u0000)
\t Табуляция (\u0009)
\n Перевод строки (\u000A)
\v Вертикальная табуляция (\u000B)
\f Перевод страницы (\u000C)
\r Возврат каретки (\u000D)
\xnn Символ из набора Latin, задаваемый шестнадцатеричным числом nn; например, \x0A – это то же самое, что \n
\uxxxx Unicode-символ, заданный шестнадцатеричным числом xxxx; например, \u0009 – это то же самое, что \t
\cX Управляющий символ ^X; например, \cJ эквивалентно символу перевода строки \n 


[...] Любой из символов, указанных в скобках
[^...] Любой из символов, не указанных в скобках
. Любой символ, кроме перевода строки или другого разделителя Unicode-строки
\w Любой текстовый ASCII-символ. Эквивалентно [a-zA-Z0-9_]
\W Любой символ, не являющийся текстовым ASCII-символом. Эквивалентно [^a-zA-Z0-9_]
\s Любой символ-разделитель из набора Unicode
\S Любой символ, не являющийся символом-разделителем из набора Unicode. Обратите внимание: \w и \S – это не одно и то же
\d Любые ASCII-цифры. Эквивалентно [0-9]
\D Любой символ, отличный от ASCII-цифр. Эквивалентно [^0-9]
[\b] Литерал символа «забой» (особый случай)

{n,m} Соответствует предшествующему шаблону, повторенному не менее n, но не более m раз
{n,} Соответствует предшествующему шаблону, повторенному n или более раз
{n} Соответствует в точности n экземплярам предшествующего шаблона
? Соответствует нулю или одному экземпляру предшествующего шаблона; предшествующий шаблон является необязательным. Эквивалентно {0,1}
+ Соответствует одному или более экземпляру предшествующего шаблона. Эквивалентно {1,}
* Соответствует нулю или более экземплярам предшествующего шаблона. Эквивалентно {0,}

Символ вертикальной черты | служит для разделения альтернатив.
Например, /ab|cd|ef/ соответствует либо строке «ab», либо строке «cd», либо
строке «ef», а шаблон /\d{3}|[a-z]{4}/ – либо трем цифрам, либо четырем строчным буквам.

Одно из них – группировка отдельных элементов в одно подвыражение, так что элементы
при использовании спецсимволов |, *, +, ? и прочих спецсимволов рассматриваются 
как одно целое. Например, /java(script)?/ соответствует слову «java», за которым 
следует необязательное слово «script», а /(ab|cd)+|ef)/ соответствует либо
строке «ef», либо одному или более повторений одной из строк «ab» или «cd».

С этим связано еще одно применение подвыражений в скобках, позволяющее делать 
ссылку назад к подвыражению из предыдущей части того же регулярного
выражения. Это достигается путем указания одной или нескольких цифр после
символа \. Цифры ссылаются на позицию подвыражения в скобках внутри регулярного 
выражения. Например, \1 ссылается на первое подвыражение, а \3 – на
третье. Обратите внимание: поскольку подвыражения могут быть вложены одно
в другое, при подсчете используется позиция левой скобки. Например, в следующем 
регулярном выражении ссылка на вложенное подвыражение ([Ss]cript) будет выглядеть как \2:

/([Jj]ava([Ss]cript)?)\sis\s(fun\w*)/

Например, следующее регулярное выражение соответствует нулю или более символам внутри одинарных
или двойных кавычек. Однако оно не требует, чтобы открывающие и закрывающие кавычки 
соответствовали друг другу (т. е. чтобы обе кавычки были одинарными или двойными):

/['"][^'"]*['"]/

Соответствия кавычек мы можем потребовать посредством такой ссылки:

/(['"])[^'"]*\1/

Здесь \1 соответствует результату поиска в соответствии с первым подвыражением. 
В этом примере ссылка налагает ограничение, требующее, чтобы закрывающая кавычка соответствовала открывающей.

В JavaScript 1.5 (но не в JavaScript 1.2) возможна группировка элементов в регулярном 
выражении без создания нумерованной ссылки на эти элементы. Вместо
простой группировки элементов между ( и ) начните группу с символов (?: и закончите ее символом ). 
Рассмотрим, например, следующий шаблон:

/([Jj]ava(?:[Ss]cript)?)\sis\s(fun\w*)/

Здесь подвыражение (?:[Ss]cript) нужно только для группировки, чтобы к груп
пе мог быть применен символ повторения ?. Эти модифицированные скобки не
создают ссылку, поэтому в данном регулярном выражении \2 ссылается на текст,
соответствующий шаблону (fun\w*).

| 			Альтернативы. Соответствует либо подвыражению слева, либо подвыражению справа.

(...) 		Группировка. Группирует элементы в единое целое, которое может использоваться с символами *, +, ?, | и т. п. 
			Также запоминает символы, соответствующие этой группе, для использования в последующих ссылках.

(?:...) 	Только группировка. Группирует элементы в единое целое, но не запоминает символы, соответствующие этой группе.

\n 			Соответствует тем же символам, которые были найдены при первом соответствии группе с номером n. 
			Группы – это подвыражения внутри скобок	(возможно, вложенных). Номера группам присваиваются путем 
			подсчета левых скобок слева направо. Группы, сформированные с помощью символов (?:, не нумеруются.

Другие элементы регулярных выражений соответствуют позициям в тексте, а не самим символам. Например, \b соответствует границе слова – гра
нице между \w (текстовый ASCIIсимвол) и \W (нетекстовый символ), или границе между текстовым ASCIIсимволом и началом или концом 
строки (За исключением класса символов (квадратных скобок), где \b соответствует символу «забой».). Такие элементы, как \b, не задают 
каких-либо символов, которые должны присутствовать в найденной строке, однако они определяют допустимые позиции для проверки
соответствия. Иногда эти элементы называются якорными элементами регулярных выражений, т. к. они закрепляют шаблон за определенной 
позицией в строке. Чаще других используются такие якорные элементы, как ^ и $, привязывающие шаблоны соответственно к началу и концу строки.
Например, слово «JavaScript», находящееся на отдельной строке, можно найти с помощью регулярного выражения /^JavaScript$/. Отдельное слово «Java» (а не
префикс, например в «JavaScript») можно поискать по шаблону /\sJava\s/, который требует наличия пробела2 до и после слова. Но такое решение порождает две
проблемы. Во-первых, оно найдет слово «Java», только если оно окружено пробелами с обеих сторон, и не сможет найти его в начале или в конце строки. ВоСимвол Значение
| Альтернативы. Соответствует либо подвыражению слева, либо подвыражению справа.
(...) Группировка. Группирует элементы в единое целое, которое может использоваться с символами *, +, ?, | и т. п. Также запоминает символы, соответствующие этой группе, для использования в последующих ссылках.
(?:...) Только группировка. Группирует элементы в единое целое, но не запоминает символы, соответствующие этой группе.
\n Соответствует тем же символам, которые были найдены при первом соответствии группе с номером n. Группы – это подвыражения внутри скобок
(возможно, вложенных). Номера группам присваиваются путем подсчета
левых скобок слева направо. Группы, сформированные с помощью символов (?:, не нумеруются.
1 За исключением класса символов (квадратных скобок), где \b соответствует
символу «забой».
2 Точнее, любого разделителя. – Примеч. науч. ред.
222 Глава 11. Шаблоны и регулярные выражения
вторых, когда этот шаблон действительно найдет соответствие, возвращаемая
им строка будет содержать ведущие и замыкающие пробелы, а это не совсем то,
что нам нужно. Поэтому вместо шаблона для реальных символовразделителей
\s мы воспользуемся шаблоном (или якорем) для границ слова \b. Получится
следующее выражение: /\bJava\b/. Элемент \B представляет собою якорь для позиции, не являющейся границей слова. То есть шаблону /\B[Ss]cript/ будут соответствовать слова «JavaScript» и «postscript» и не соответствовать слова
«script» или «Scripting».

^ 	Соответствует началу строкового выражения или началу строки при многострочном поиске.
$ 	Соответствует концу строкового выражения или концу строки при многострочном поиске.
\b 	Соответствует границе слова, т. е. соответствует позиции между символом \w 	и символом \W или между символом \w и началом или концом строки.
		(Однако обратите внимание, что [\b] соответствует символу забоя.)

\B 	Соответствует позиции, не являющейся границей слов.
(?=p) Положительное условие на последующие символы. Требует, чтобы последующие символы соответствовали шаблону p, но не включает эти символы
		в найденную строку.
		
(?!p) Отрицательное условие на последующие символы. Требует, чтобы следующие символы не соответствовали шаблону p.

</script>









</body>
</html>

