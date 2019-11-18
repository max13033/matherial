<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>

<?php   echo "это полный вариант тега php";   ?>

<?      echo "Это короткий вариант тега  php"  ?>

<script language = "php">

		echo "можно и так, но лучше использовать предыдущие методы"  

</script>


<?

// integer Целое число, максимальное значение которого зависит от разрядности
//         операционной системы. В случае 32-битной операционной системы число
//         может принимать значения от -2 147 483 648 до 2 147 483 647. Если раз-
//         рядность составляет 64 бита, диапазон возможных значений -
//         от -9 223 372 036 854 775 808 до 9 223 372 036 854 775 807
//         douЫe Вещественное число, минимально возможное значение которого состав-
//         (или float) ляет от ±2.23х10-308 до ±1.79х1О308

// boolean Логический тип, способный принимать лишь два значения: true (истина)
//         и false (ложь)

// string Строковый тип. Может хранить строку, максимальный размер которой составляет 2 Гбайт

// array Массив. Это объединение нескольких переменных под одним именем.
//         Обращаться к отдельным переменным можно при помощи индекса массива.

// object Объект. Это конструкция, объединяющая несколько разнотипных переменных и методы их обработки

// resource Дескриптор, позволяющий оперировать тем или иным ресурсом, доступ
//         к которому осуществляется при помощи библиотечных функций. Дескрип-
//         торы применяются при работе с файлами, базами данных, динамическими
//         I изображениями и т. д. 
// nul  Специальный тип, который сигнализирует о том, что переменная не была инициализирована

// callaЫe (или callback) Некоторые функции РНР могут принимать в качестве аргументов другие
//         функции, которые называются функциями обратного вызова. 
//         Переменные данного типа содержат ссылки на такие функции

string gettype (mixed $var)   //  функция, которая опрееляет тип пременной

//  Для каждого из типов, предназначена функция, начинающаяся
//  с префикса is , которая возвращает true, если переменная принадлежит
//  заданному типу. В листинге 4.22 демонстрируется использование функции
//  is_int(), определяющей, принадлежит переменная целому типу int или нет.

$x = true;   // присаиваем переменной значение True

$x = 1645;    //   Целое число  integer

$x = 0121;    //   восьмеричное число       

$x = 0x1A;     // шестнадцатиричное число

$x = 12.35;     // вещественное число - foat     double

$X = 1.5e3;   //   =  1.5* 1000   

$str = '12. 6';
$nшnЬer = 3 + $str;
echo $nшnЬer; // 15.6

// Строка может содержать помимо числа любые другие символы , интерпретатор РНР
// постарается извлечь из начала строки наиболее полное значение, соответствующее
// числу. Если извлечь число из строки не удается, ее значение рассматривается как
// нулевое

echo '12wet56.7' + 10; // 12 + 10 22
echo ' <br /> ';
echo 14 + 'четырнадцать'; // 14 +О= 14   

// Аналогичным образом число автоматически преобразуется в строку там, где ожидается
// строковая переменная (например, при выводе в окно браузера).
// Если ожидается логический тип (например, в условных операторах) , числа, равные
// нулю, пустая строка, строка, содержащая "О", пустые массивы и объекты, а также
// null автоматически приводятся к значению false, все остальные переменные рассматриваются как true
// Объявляем нулевое вещественн о е число

$float = О.О;
if($float) { // false
echo 'Переменная $float ра ссматривается как true';
$str = "Hello, world!";
if ($str) { // true
echo 'Переменная $str рассматри вается как true' ;

//  При преобразовании логического типа к строке , true превращается в "1", а false
//  в пустую строку "". Преобразование логического типа к числу приводит к превращению
//  true в 1, а false в О. Поэтому true всегда выводится как единица, а false
//  как пустая строка:

echo true; // "1"
echo false; // ""
          
//  Явное приведение типов:

$var = (int)$var;       //  Приведение к целому типу int
$var = (integer)$var    //  Приведение к целому типу int
$var = (bool)$var       //  Приведение к логическому типу boolean
$var = (boolean)$var    //  Приведение к логическому типу boolean
$var = (float)$var      //  Приведение к вещественному типу douЫe
$var = (douЬle)$var     //  Приведение к вещественному типу douЬle
$var = (real) $var      //  Приведение к вещественному типу douЬle
$var = (string)$var     //  Приведение к строковому типу string
$var = (array)$var      //  Приведение к массиву
$var = (object)$var     //  Приведение к объекту

// Функция settype() является универсальной функцией преобразования типов и преобразует
// переменную $ var к типу, указанному в параметре $type, который может
// принимать одно из следующих значений: "boolean'', "bool", "integer", "int",
// "float", "string", "array", "object" и "null". Функция возвращает true, если преобразование
// было успешно осуществлено, и false в противном случае

// Объявляем строковую переменную
$str = 'Swet';
// Приводим строку к целому числу
settype($str, 'integer');
e cho $str; // 5
echo ' <br /> ';


//  Кавычки

//  "....."  Двойные кавычки - вместо переменных РНР в этих кавычках подставляются их значения
//  '.....'  Одиночные кавычки - вместо переменных РНР не подставляются их значения, символ $ отображается как есть 
//  `.....`  Обратные кавычки - значение, заключенное в такие кавычки, рассматривается 
//             как системная команда. Вместо такой системной команды возвращается результат выполнения команды


//      \п  Перевод строки
//      \r  Возврат коретки
//      \t  Символ табуляции
//      \\  Обратный слеш
//      \"  Двойная кавычка
//      \'  Одинарная кавычка

$text = "Паро";
echo "Едет $textвoз<br />";     //  Едет
echo "Плывет $textxoд <br / >"; //  Плывёт
echo "Едет {$text}вoз <br / >"; //  Едет паровоз
echo "Плывет {$text}xoд<br />"; //  Плывет Пароход

$str = <<<HTML_END
Здесь располагается любой текст. Дотех пор, пока не встретится
Метка, можно писать все что угодно
HTML_END;

echo $str;


//  Маркер можно заключать в одинарные кавычки, которые сообщают интерпретатору
//  РНР, что переменные внутри такой строки не интерполируются.

$name = "Имя пользователя";
$text = <<<'MARKER'
Переменные РНР не буду т интерполироваться: $narne
MARKER;

//  Специальный тип null предназначен для пометки неинициалюированной переменной.
//  Если интерпретатор РНР встречает в выражении неинициализированную переменную, 
//  она пол учает тип null. Переменная также получает данный тип, если она инициализируется
//   константой типа null или уничтожается при помощи конструкции unset().

$user = $null;


$a = "Какой нибудь текст"   //  

$b = 'Другой текст';    //

$c = array(13, 20, 4677);   //  массив из чисел    $c[0] = 13,    $c[1] = 20 ....

$d = array("name" => "ivan", "age" => "23", "country" => "Russia");    //ассоциативный сассив     $d['name'] = "ivan" ,  $d['age'] = 23 .....

//  Многомерный массив

$arr[0][0]="Овощи";
$arr[0][1]="Фрукты";
$arr[1][0]="Абрикос";
$arr[1][1]="Апельсин";
$arr[1][2]="Банан";
$arr[2][0]="Огурец";
$arr[2][1]="Помидор";
$arr[2][2]="Тыква";

4	5	8	5
3	5	0	8
5	3	8	4

$arr[0][0]= 4
$arr[0][1]= 5

$arr[1][0]=3
$arr[1][3]= 8
// Пример

$fruit[] = "Яблоко";
$fruit[] = "Банан";
$fruit[] = "Виноград";

// 1 вариант

$apple = $fruit[0];
$banan = $fruit[1];
$grapes = $fruit[2];

// 2 вариант

list($apple, $banan, $grapse) = $fruit;
                    
?>
</body>
</html>