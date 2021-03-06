<?

mixed filter_var(
    mixed $variaЬle [ ,
    int $filter = FILTER_DEFADLT [ ,
    mixed $options]]
)
// Функция принимает значение $variaЫe и фильтрует его в соответствии с правилом
// $filter. Необязательный массив $options позволяет задать дополнительные параметры,
// которые будут рассмотрены далее. Если переменная $variaЫe успешно
// проходит проверку, функция возвращает ее в качестве результата, в противном
// случае возвращается false.


// FILTER_VALIDATE_BOOLEAN Возвращает true для значений "1'', "true", "on" и "yes", -
//     иначе возвращается false

// FILTER_VALIDATE_EМAIL Возвращает true , если значение является корректным
//     электронным адресом, иначе возвращает false

// FLTER_VALIDAТE_FLOAT Возвращает true еслизначение является корректным 
//     числом с плавающей точкой, иначе возвращает false

// FILTER_VALIDATE_INT Возвращает true, если значение является корректным
//     целым числом и при необходимости входит в диапазон
//     от min_range до max_range, значения которых задаются
//     третьим параметром функции filter_var(;

// FILTER_VALIDATE_IP Возвращает true, если значение является корректным 
//     IР-адресом, иначе возвращает false

// FILTER_VALIDATE_REGEXP Возвращает true, если значение соответствует регулярно
//     му выражению, которое задается параметром regexp
//     в дополнительных параметрах функции filter_var()

// FILTER_VALIDATE_URL Возвращает true, если значение соответствует корректному
//     URL, иначе возвращает false





// FILTER_SANITIZE_EМAIL Удаляет все символы, кроме букв, цифр и 
//     символов ! # $ % & ' * + - / = ? ^ _  ` { | } ~ @ . []
// -
// FILTER_SANITIZE_ENCODED Кодирует строку в формат URL, при необходимости 
//     удаляет или кодирует специальные символы

// FILTER_SANITIZE_МAGIC_QUOTES       К строке применяется функция addslashes()

// FILTER_SANITIZE_NUМВER_FLOAT       Удаляет все символы, кроме цифр, +, - и, при необходимости, . , еЕ

// FILTER_SANITIZE_NUМВER_INT         Удаляет все символы, кроме цифр и знаков плюса и минуса

// FILTER_SANITIZE_SPECIAL_CНARS      Экранирует НТМL-символы ' " < > &. Управляющие 
//     символы при необходимости удаляет или кодирует

// FILTER_SANITIZE_FULL_SPECIAL_CНARS Эквивалентно вызову htmlspecialchars() 
//     с установленным параметром ENT_QUOTES. Кодирование кавычек может быть отключено
//     с помощью установки флага FILTER_FLAG_NO_ENCODE_QUOTES.

// FILTER_SANITIZE_STRING       Удаляет теги, при необходимости удаляет или кодирует специальные символы

// FILTER_SANITIZE_STRIPPED    Псевдоним для предыдущего фильтра.

// FILTER_SANITIZE_URL         Удаляет все символы, кроме букв, цифр
//     и $ - _ . + ! * ' () , {} | \\ ^ ~ [] ` <> # % " ; / ? : @ & = 

// FILTER_UNSAFE_RAW           Бездействует, при необходимости удаляет -
// или кодирует специальные символы


mixed filter_input(
    int $type,
    string $variaЬle_nаmе [ ,
    int $filter = FILTER_DEFAULT [ ,
    mixed $options] ] 
)
Функция принимает в качестве первого параметра $type одну из констант
INPUT_GET, INPUT_POST, INPUT_COOKIE, INPUT_SERVER, INPUT_ENV, соответствующих суперглобальным
массивам из первого списка. В качестве второго значения
$variaЫe_name указывается ключ параметра в суперглобальном массиве, который
нужно либо проверить на соответствие условиям, либо отфильтровать. Третьим
параметром $filter указывается одна из констант (FILTER_VALIDATE_...   или FILTER_SANITIZE_....). 
В качестве четвертого параметра $options передается ассоциативный массив
с дополнительными параметрами, там, где они необходимы.

?>