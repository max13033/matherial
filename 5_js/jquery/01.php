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
	
	$() — это синоним для «jQuery()», чтобы у вас не возникало конфликтов с другими 
	библиотеками за использование $, советую ваш код оборачивать в анонимную функцию 
	следующего вида (best practice):
(function($, undefined){ 
	// тут тихо и уютно 
	// мы всегда будем уверены, что $ === jQuery 
	// a undefined не переопределен ;) 
})(jQuery);


//  ===============  примеры из книги  =================

// nothing, tag h2 is not exists
jQuery("article h2").css(
    "font-size",
    "24px"
);

// it's working
// deprecated
jQuery(document).ready(function(){
    jQuery("article h2").css(
        "background-color",
        "green"
    );
});

// it's working too
$(function(){
    $("article h2").css("color", "#fff");
});

// for jQuery 3.x+
$.ready.then(function(){
    $("article p").css("font-size", "8px");
});

// anonymous function - best practices
(function($, undefined){
    $(function(){
        $("p").css("color", "#966");
    });
})(jQuery);

//  ===============  / примеры из книги  =================


//  Выбор элементов по «id» либо «className» аналогично используемым в CSS:

$("#content") // выбираем элемент с id=content 
$("div#content") // выбираем div с id=content (хотя и без div работает) 
$(".wrapper") // выбираем элементы с class=wrapper 
$("div.wrapper") // выбираем div'ы с class=wrapper 
$(".wrapper.box") // выбираем элементы с class=wrapper и box 
$("h2") // выбираем все теги h2 
$("h1, h2") // выбираем все теги h1 и h2

//  Теперь вспомним, что мы в DOMе не одни, это таки иерархическая структура:
$("article h2") // выбираем все теги h2 внутри тега article $("div article h2") // выбираем все теги h2 внутри тега article // внутри тега div, в доме который построил Джек
$("article").find("h2") // аналогично примерам выше $("div").find("article").find("h2") //
У нас есть соседи:
$("h1 + p") // выбор всех p элементов, перед которыми есть h1 // элементы (у нас только один такой)
$("#stick ~ article") // выбор всех article элементов после элемента // c id=stick
$("#stick").prev() // выбор предыдущего элемента от найденного $("#stick").next() // выбор следующего элемента от найденного
Родственные связи:
$("*") // выбор всех элементов $("article > h2") // выбираем все теги h2 которые являются // непосредственными потомками тега article
$("article > *") // выбор всех потомков элементов article $("article").children()
$("p").parent() // выбор всех прямых предков элементов p $("p").parents() // выбор всех предков элементов p (не понадобится) $("p").parents("div") // выбор всех предков элемента p которые есть div // parents принимает в качестве параметра селектор
//	Если хотите поиграться с селекторами от души — то для этого я припас для вас соответствующую страничку — css.selectors.html
//	Поиск по атрибутам Ещё со времён CSS2 была возможность найти элемент с определёнными атрибутами, в CSS3 добавили ещё возможностей по поиску:
a[href] — все ссылки с атрибутом «href» 
a[href=#] — все ссылки с «href=#» 
a[href~=#] — все ссылки с «#» где-то в «href» 
a[hreflang|=en] — все ссылки, для которых hreflang начинается с «en» и обрезается по символу «-» — «en», «en-US», «en-UK» 
a[href^=http] — ссылки начинающиеся с «http» 
a[href*="google.com"] — ссылки на погуглить 
a[href$=.pdf] — ссылки на PDF файлы (по идее)

//	Заглянув внутрь jQuery вы скорей всего найдёте то место, где ваше выражение будет анализироваться с помощью регулярных выражений, по этой причине в селекторах необходимо экранировать специальные символы используя обратный слеш «\\»:
$("a[href^=\\/]").addClass("internal");





</script>

</body>
</html>

