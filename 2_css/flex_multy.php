<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://localhost/test.ru/css/style.css">
</head>

<body>
<style>
.fl{
	display: flex;
	background-color: #777;
	width: 500px;
	height: 500px;
	flex-direction: column;  /* column-reverse, row, row-reverse  */
	justify-content: flex-start;   /*  flex-start   flex-end    center   space-between    space-around  */
	align-items: stretch;		/*   flex-start		flex-end	center	baseline	stretch  (можно использовать min-width  max-width) */	
	flex-wrap: wrap;   /*  no-wrap  (default), wrap-  */
	align-content: space-around;
/*	flex-flow - сокращение для flex-direction и flex-wrap.   flex-flow: column wrap / row no-wrap*/
}
.fl-block{
	background-color: #79f;
	border: 1px solid black;
}

/*
Существует также свойство align-content, которое определяет то, каким образом образовавшиеся ряды блоков будут выровнены по вертикали и как они поделят между собой все пространство flex-контейнера.

Важно: align-content работает только в многострочном режиме (т.е. в случае flex-wrap:wrap; или flex-wrap:wrap-reverse;)

Доступные значения align-content:

flex-start: 		ряды блоков прижаты к началу flex-контейнера.
flex-end: 			ряды блоков прижаты к концу flex-контейнера
center:				ряды блоков находятся в центре flex-контейнера
space-between: 		первый ряд блоков располагается в начале flex-контейнера, последний ряд блоков блок – в конце, все остальные ряды равномерно распределены в оставшемся пространстве.
space-around: 		ряды блоков равномерно распределены в от начала до конца flex-контейнера, разделяя все свободное пространство поровну.
stretch (значение по умолчанию): 	Ряды блоков растянуты, дабы занять все имеющееся пространство.		*/

</style>

<div class="fl">
	<div class="fl-block">Первый блок</div>
	<div class="fl-block">Второй блок</div>	
	<div class="fl-block">Третий блок</div>
	<div class="fl-block">Четвертый блок</div>
	<div class="fl-block" style = "flex-grow: 4">Первый блок Первый блок Первый блок Первый</div>
	<div class="fl-block">Второй блок </div>	
	<div class="fl-block">Третий блок</div>
	<div class="fl-block">Четвертый блок</div>
	<div class="fl-block">Первый блок</div>
	<div class="fl-block">Второй блок</div>	
	<div class="fl-block">Третий блок</div>
	<div class="fl-block">Четвертый блок</div>
	<div class="fl-block">Первый блок</div>
	<div class="fl-block">Второй блок</div>	
	<div class="fl-block">Третий блок</div>
	<div class="fl-block">Четвертый блок</div>
	<div class="fl-block">Первый блок</div>
	<div class="fl-block">Второй блок</div>	
	<div class="fl-block">Третий блок</div>
	<div class="fl-block">Четвертый блок</div>
	<div class="fl-block">Первый блок</div>
	<div class="fl-block">Второй блок</div>	
	<div class="fl-block">Третий блок</div>
	<div class="fl-block">Четвертый блок</div>
	<div class="fl-block">Первый блок</div>
	<div class="fl-block">Второй блок</div>	
	<div class="fl-block">Третий блок</div>
	<div class="fl-block">Четвертый блок</div>
</div>

</body>
</html>

