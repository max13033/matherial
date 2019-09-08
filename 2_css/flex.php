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
	background-color: #555;
	width: 500px;
	height: 500px;
	flex-direction: column;  /* column-reverse, row, row-reverse  */
	justify-content: flex-start;   /*  flex-start   flex-end    center   space-between    space-around  */
	align-items: stretch;		/*   flex-stert		flex-end	center	baseline	stretch  (можно использовать min-width  max-width) */	
}
.fl-block{
	background-color: #456;
	border: 1px solid black;
}

</style>

<div class="fl">
	<div class="fl-block">Первый блок</div>
	<div class="fl-block">Второй блок</div>	
	<div class="fl-block">Третий блок</div>
	<div class="fl-block">Четвертый блок</div>
</div>

</body>
</html>

