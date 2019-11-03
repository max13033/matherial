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












</script>

</body>
</html>

