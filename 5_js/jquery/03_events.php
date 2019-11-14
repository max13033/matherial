<script type="text/javascript">

// 	change — изменение значения элемента (значение, при потери фокуса, элемента отличается от изначального, при получении фокуса) 
// 	lick — клик по элементу (порядок событий: «mousedown» → «mouseup» → «click») 
//	dblclick — двойной щелчок мышки 
//	resize — изменение размеров элементов 
//	scroll — скроллинг элемента 
//	select — выбор текста для «input[type=text]» и «textarea» 
//	submit — отправка формы 
//	focus — фокус на элементе, актуально для «input[type=text]», но в современных браузерах работает и с другими элементами 
//	blur — фокус ушёл с элемента, актуально только для элементов «input[type=text]» — срабатывает при клике по другому элементу на странице или по событию клавиатуры (к примеру переключение по tab'у) 
//	focusin — фокус на элементе, данное событие срабатывает на предке элемента, для которого произошло событие «focus» 
//	focusout — фокус ушёл с элемента, данное событие срабатывает на предке элемента, для которого произошло событие «blur»
//	keydown — нажатие клавиши на клавиатуре 
//	keypress — нажатие клавиши на клавиатуре, последовательность «keydown → keypress → keyup» 
//	keyup — отжатие клавиши на клавиатуре 
//	mousedown — нажатие клавиши мыши 
//	mouseup — отжатие клавиши мыши 
//	mousemove — движение курсора 
//	mouseenter — наведение курсора на элемент, не срабатывает при переходе фокуса на дочерние элементы 
//	mouseleave — вывод курсора из элемента, не срабатывает при переходе фокуса на дочерние элементы 
//	mouseover — наведение курсора на элемент 
//	mouseout — вывод курсора из элемента

// следующий код выводит сообщение "Hello" и отменяет переход по ссылке

$("#menu li a").click(function(event){ 
	alert("Hello!"); 
	event.preventDefault(); 
})

$("#menu li a").click(function(event){ 
	alert("Hello!"); 
	event.preventDefault(); 
	event.stopPropagation();  	//	данная команда останавливает "всплытие", т.е. 
								//	если у родительского элемента тоже указано действие по click, последнее не сработает
})

//	Для ускорения разработки в jQuery есть быстрый способ вызова этих двух методов за раз:
$("#menu li a").click(function(event){ 
	return false; // вот это он :) 
})

//	для того, чтобы сработал лишь ваш обработчик события, можно использовать метод «event.stopImmediatePropagation()»:
$("#menu li a").click(function(event){ 
	alert("Hello!"); 
	event.stopImmediatePropagation(); 
	return false; 
}) 
$("#menu li a").click(function(event){ 
	alert("Hello again!"); 
	return false; 
})
//	В данном примере, при клике по ссылке будет выведено лишь одно сообщение. И да, порядок имеет значение.

// вешаем обработчик 
$('.class').on('click', function(){ 
	// что-то делаем 
}); 
// вызываем обработчик 
$('.class').trigger('click'); 

// отключаем обработчик 


//	Можно повесить обработчик событий практически на любой объект:
// проще некуда 
var obj = { 
	test:function() { 
		console.log('obj.test'); 
	} 
}
// создаём обработчик произвольного события someEvent $(obj).on('someEvent', function(){ console.log('obj.someEvent'); this.test(); });
// инициируем событие someEvent
$(obj).trigger('someEvent');
// полюбопытствуем console.log(obj);
$('.class').off('click');











</script>
