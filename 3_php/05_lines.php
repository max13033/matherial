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


//  str_replace() -  позволяет заменить подстроку в тексте другой подстрокой и имеет следующий синтаксис:
// mixed str _ replace (
// mixed $search,
// mixed $replace,
// mixed $str
// [ , int &$count ] )
//  Функция заменяет в строке $str все вхождения подстроки $search на $replace и возвращает результат замены .

$str = '[Ь]Это[ / Ь] очень жирный [Ь]текст[ / Ь]. ';
$str = str_replace (' [Ь] ', ' < Ь > ', $str ) ;
$str str_replace('[ / b]', ' </ Ь > ', $str ) ;
echo $str ;

//  Функция trim() удаляет символы из начала и конца строки и имеет следующий синтаксис:
string trim(string $str [, string $charlist = " \t\n\r\0\xOB" ] );

// Функция принимает в качестве аргумента $str строку и удаляет из нее ведущие и
// конечные пробельные символы, к которым относят:
" "(ASCII 32 (Ох20)), символ пробела;
"\t" (ASCII 9 (Ох09)), символ табуляции;
"\n" (ASCII 10 (ОхОА)), символ перевода строки;
"\r" (ASCII 13 (OxOD)), символ возврата каретки;
"\О" (ASCII О (ОхОО)), NUL-байт;
"\хОВ" (ASCII 11 (ОхОВ)), вертикальная табуляция.

// Зачастую данных символов бывает недостаточно, в этом случае во втором необязательном
// параметре $charlist приводится список символов, которые необходимо
// считать пробельными.
// Для демонстрации работы функции создадим скрипт, в котором будет контролироваться
// длина строки до и после удаления из нее пробельных символов.

$str = '   Hello, world!    ';
Strim_str = trim($str);
$str_len = strlen($str);
$trim_str_len = strlen($trim_str);
echo " размер исходной строки '$str' = $str_len, <br />
    размер строки '$trim_str' после удаления пробелов = $trim_str_len";



//  Для решения задачи замены обычных переводов строк в НТМL-эквивалент РНР
//  предоставляет специальную функцию nl2br ( J, которая имеет следующий синтаксис:
string n12Ьr (string $str [, Ьооl $is_xhtml = true])
//  Для перевода строк в HTML используется тег <br> или <br /> в 3ависимости от того,
//  принимает второй параметр функции $is_xhtml значение false или true.

$str = <<<text
hello
php
text;

echo $str;
echo '<br /><br />';
echo nl2br($str);
//  Результатом работы скрипта будут следующие строки:
hello php
hello
php


//  Функция htmlspecialchars () имеет следующий синтаксис:
string htmlspecialchars (
string $str [ ,
int $quote_style = ENТ_COMPAT | ЕNТ_НТМL401 [,
string $charset = ini_get( "default_charset") [ ,
Ьооl $douЬle_encode = true ] ] ] )

//  Первый аргумент $str - строка, в которой требуется выполнить преобразование.
//  Второй необязательный аргумент $quote_style определяет режим обработки двойных
//  и одиночных кавычек и может принимать одну из констант:
//  -  ЕNТ СОМРАТ - режим по умолчанию, в этом режиме двойные кавычки заменяются
//      символом &quot;, а одиночные кавычки остаются без изменений;
//  - ЕNТ QUOTES - в этом режиме преобразуются и двойные, и одиночные кавычки,
//      последние заменяются символом &#039;;
//  - ЕNТ NOQUOTES - в данном режиме двойные и одиночные кавычки остаются без изменений.

//  Третий необязательный аргумент $charset принимает строку с названием кодировки,
//  которую можно задать при помощи директивы default_charset конфигурационного файла php.ini.
//  Последний аргумент $douЫe_encode позволяет управлять режимом повторного кодирования
//  НТМL-тегов. По умолчанию повторное кодирование включено, поэтому
//  если в строке $str встречается последовательность &amp;, являющаяся НТМLпредставлением
//  амперсанда, она превратиться в &amp;amp;, еще одно преобразование
//  htmlspecialchars () превратит эту последовательность в &amp; amp; amp; . Для того
//  чтобы предотвратить такие преобразования при повторных вызовах, следует установить
//  значение $douЫe encode в false.


//  strip_tags() имеет следующий синтаксис:
string strip_tags(string $str [, string $allowaЫe_t:ags]);
//  Функция удаляет из строки $str НТМL-теги кроме тех, которые указываются в параметре $allowaЫe_tags.
/// ЗАМЕЧАНИЕ
//  Особенность функции заключается в том , что теги не удаляются, а заменяются пробельными символами.
//  Для того чтобы был виден результат, перед выводом в окно браузера 
//  он пропускается через функцию htmlspecialchars () .

$str = ' <р> Параграф. </р>
        <!-- Comment -->
        Еще немноготекста ';
echo htmlspecialchars(strip_tags($str));
echo '<br/>' ;
echo htmlspecialchars(strip_tags($str, '<р>')) ;
//  Результатом работы скрипта будут следующие строки:
//  Параграф. Еще немного текста
//  <р> Параграф.</р> Еще немного текста



// Для форматного вывода предназначены функции семейства printf(). Функция
// printf() имеет следующий синтаксис :
int printf (string $format [, mixed $args [, mixed $ . . . ] ] )
// ЗАМЕЧАНИЕ
// Функция printf() отличается от sprintf () тем, что первая функция выводит результат
// непосредственно в окно браузера, а вторая возвращает строку, которую можно
// сохранить в переменной. Функция fprintf() результат помещает в открытый файл,
// дескриптор которого передается ей в качестве первого параметра .

// В качестве первого аргумента функция printf () принимает строку форматирования,
// а в качестве последующих - переменные, определяемые строкой форматирования
// (количество аргументов функции не ограничено).
// Строка форматирования помимо обычных символов может содержать специальные
// последовательности символов, начинающиеся со знака %, которые называют определителя.
// ми преобразования. В примере ниже определитель
// преобразования %d подставляет в строку число, которое передается в качестве
// второго аргумента функции.

printf("Пepвое число - %d", 26); // Первое число - 26
// Буква d, следующая за знаком %, определяет тип аргумента (целое, строка и т. д.),
// поэтому называется определителем типа. 
// Определители типа функции printf()



// %Ь - Определитель целого, которое выводится в виде двоичного числа

// %c - Спецификатор символа, используется для подстановки в строкуформата 
//      символов char,например, 'а', 'w', 'О', '\О'

// %d - Спецификатор десятичного целого числа со знаком, используется для
//      подстановки целых чисел, например, О, 100, -45

// %е - Спецификатор числа в научной нотации, например, число 1200, в данной
//      отации записывается как 1.2е+ОЗ, а 0.01, как le-02

// %f - Спецификатор десятичного числа с плавающей точкой, например, 156.001

// %о - Спецификатор для подстановки в строку формата восьмеричного числа без знака

// %s - Спецификатор для подстановки в строку формата строки
// %u - Спецификатор десятичного целого числа со знаком, используется
//      для подстановки целых чисел без знака

// %х - Спецификатор для подстановки в строку формата шестнадцатеричного
//      числа без знака (строчные буквы для а, Ь, с, d, е, f)

// %Х - Спецификатор для подстановки в строку формата шестнадцатеричного
//      числа без знака (прописные буквы для А, D, С, D, Е, F)

// %% Обозначение одиночного символа % в строке вывода


// Ниже демонстрируется форматный вывод числа 1024 с использованием
// разнообразных определителей типа .

$пumЬer = 5867;
рriпtf('Двоичное число : %b<br />', $пumЬer);
рriпtf('Десятичное число: %d<br />', $пumЬer);
рriпtf('Число с плавающей точкой: %f <br / >', $пumЬer);
riпtf('Восьмеричное число: %o<br />', $пumЬer);
рriпtf('Строковое представление: %s <br / >', $пumЬer);
рriпtf('Шестнадцатеричное число (нижний регистр): %x<br / >', $пumЬer ) ;
рriпtf('Шестнадцатеричное число (верхний регистр): %X<br / >', $пumЬer);
// Результат работы скрипта:
// Двоичное число: 1011011101011
// Десятичное число: 5867
// Число с плавающей точкой : 5867.000000
// Восьмеричное число: 13353
// Строковое представление: 5867
// Шестнадцатеричное число (нижний регистр) : 16еЬ
// Шестнадцатеричное число (верхний регистр): 16ЕВ

// Использование определителя типа х для шестнадцатеричных чисел удобно при
// формировании цвета в НТМL-тегах 

$red = 255;
$greeп = 255;
$Ыuе = 100;
priпtf('#%X%X%X', $red, $greeп, $Ыuе); // #FFFF64

// Между символом % и определителем типа может быть расположен определитель
// заполнения. Определитель заполнения состоит из символа заполнения и числа, которое
// определяет, сколько символов отводится под вывод. Все не занятые параметром
// символы будут заполнены символом заполнителя. Так под
// вывод числа 45 отводится пять символов, поскольку само число занимает лишь два
// символа, три ведущих символа будут содержать символ заполнения .

echo '<pre>';
printf('% 4d\п', 45); //' 45'
printf(' %04d\п', 45); // '00045'
echo '</pre>';

// Применение оnределителя тиnа f nозволяет вывести число в десятичном формате.
// Очень часто требуется вывести строго оnределенное число символов nосле заnятой
// , наnример, для вывода денежных единиц, где обязательным требованием являются
// два знака nосле заnятой. В этом случае nрибегают к определителю точности,
// который следует сразу за оnределителем ширины и nредставляет собой точку и
// число символов, отводимых nод дробную часть числа
echo '<pre>';
    printf('%8.2f\n', 1000.45684); // 1000.46
    printf('%.2f\n ', 12.92869) ; // 12.93

// В nервом случае nод все число отводятся 8 символов, два из которых будут заняты
// мантиссой числа. Во втором случае ограничение накладывается только на количество
// цифр nосле точки.

//  Функция explode() nредназначена для разбивки строки no оnределенному разделителю
//  и имеет следующий синтаксис:
array explode(
    string $delimiter,
    string $str
    [ , int $limi t = РНР INТ МАХ ] )

// Функция возвращает массив из строк, каждая из которых соответствует фрагменту
// исходной строки $str, находящемуся между разделителями, оnределяемыми nараметром
// $delimiter.
// Необязательный nараметр $limit задает максимальное количество элементов в результирующем
// массиве. Оставшаяся (неразделенная) часть будет содержаться
// в nоследнем элементе. Пример исnользования функции explode() nриводится ниже

$str = 'Имя , Фамилия, e-mail';
echo '<pre> ';
print_r(explode( ', ', $str)) ; //   Z[ 'Имя', 'Фамилия', 'e -mail']


// Функция implode () является обратной explode( )-функцией и осуществляет объединение
// элементов массива в строку. Функция имеет следующий синтаксис:
string implode (string $delimiter, array $arr)

// Функция возвращает строку, которая содержит элементы массива, заданного в параметре
// $arr, между которыми вставляется значение, указанное в параметре $delimi ter. 

$arr ['Сидоров', 'Иван', 'Петрович'];
echo implode(', ', $arr); //Сидоров, Иван, Петрович

//  Для URL ссылки в безопасный код в РНР предусмотрены специальные функции.
//  Например, функция urlencode () принимает в качестве аргумента строку и кодирует 
//  ее для безопасной передачи через URL:
string urlencode (string $str);

//  формируется ссылка на файл test.php, через GЕТ-параметр phrase которому передается фраза "Привет, мир!".

echo "<а href='test.php?phrase=".
urlencode("Пpивeт, мир!") ."'>ссылка< / а>";

// Исходный код результирующей НТМL-страницы будет содержать следующую строку:

<а href='test . php?phrase=%CF% F0 % E8 % E2 % E5 % F2 % 2C+% EC % E8 % F0 % 2 1' >ccЬLJiкa </a>









?>
</body>
</html>