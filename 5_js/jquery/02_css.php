<!DOCTYPE HTML>   
<html>

<head>
	<title>Заголовок страницы</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="http://localhost/test.ru/css/style_scss.css">
</head>

<body>

<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript">

css(property) — получение значения CSS свойства 
css(property, value) — установка значения CSS свойства 
css({key: value, key:value}) — установка нескольких значений 
css(property, function(index, value) { return value }) — тут для установки значения используется функция обратного вызова (в просторечии — callback-функция), index это порядковый номер элемента в выборке, value — старое значение свойства

    Метод «.css()» возвращает текущее значение, а не прописанное в CSS файле по указанному селектору

//   Example

$("#my").css('color') // получаем значение цвета шрифта 
$("#my").css('color', 'red') // устанавливаем значение цвета шрифта 

// установка нескольких значений: 
$("#my").css({ 
    'color':'red', 
    'font-size':'14px', 
    'margin-left':'10px' 
}) 

// альтернативный способ:
$("#my").css({ 
    color:'red', 
    fontSize:'14px', 
    marginLeft:'10px', 
}) 

// используя функцию обратного вызова:
$("#my").css('height', function(i, value){ 
    return parseFloat(value) * 1.2; 
})


//  манипуляции с классами, тоже из разряда первичных навыков:
addClass(className) — добавление класса элементу 
addClass(function(index, currentClass){ return className }) — добавление класса используя функцию обратного вызова
hasClass(className) — проверка на причастность к определённому классу
removeClass(className) — удаление класса 
removeClass(function(index, currentClass){ return className }) — удаление класса используя функцию обратного вызова
toggleClass(className) — переключение класса toggleClass(className, switch) — переключение класса по флагу switch 
toggleClass(function(index, currentClass, switch){ 
    return className }, switch) — переключение класса используя функцию обратного вызова

//  В приведённых методах в качестве «className» может быть строка содержащая список классов через пробел.


HTML код:
//  <!-- В данном примере это href, title, class --> 
//  <a href="#top" title="anchor" class="simple">To Top</a>  
//  Атрибуты, с которыми вам чаще других придётся сталкиваться:
// получение альтернативного текста картинки 
    var altText = $('img').attr('alt')

// изменение адреса картинки 
    $('img').attr('src', '/images/default.png')

// работаем со ссылками 
$('a#my').attr({ 'href':'http://anton.shevchuk.name', 'title':'My Personal Blog', });

//  Кроме атрибутов, также есть свойства элементов, к ним относится «selectedIndex», «tagName», «nodeName», «nodeType», «ownerDocument», «defaultChecked» и «defaultSelected». Ну вроде бы список невелик, можно и запомнить. Для работы со свойствами используем методы из семейства «.prop()»:
prop(propName) — получение значения свойства 
prop(propName, propValue) — установка значения свойства (также можно использовать hash, либо функцию обратного вызова) 
removeProp(propName) — удаление свойства (скорей всего никогда не понадобится)






</script>

</body>
</html>

