<!DOCTYPE HTML>
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://localhost/test.ru/css/style.css">
</head>

<body>

<style type="text/css">
	.cont{
		width: 500px;
		height: 500px;
		background-color: #999; 
		border: 1px solid black;
		margin: 10px;
		position: relative;
		float: left;
	}
	.red{
		width: 100px;
		height: 100px;
		background-color: #934;	
		color: black;	
	}
	.green{
		width: 200px;
		height: 200px;
		background-color: #394;
		color: black;
	}
	.blue{
		width: 400px;
		height: 400px;
		background-color: #349;
		color: black;
	}

	.div1-1{
		float: left;
	}
	.div1-2{
		float: left;
	}
	.div1-3{

	}	
	.div2-1{

	}
	.div2-2{
		float: right;
	}
	.div2-3{

	}
	.div3-1{
		float: left;
	}
	.div3-2{
		float: right;
	}
	.div3-3{

	}
</style>

<div class="cont">
	<div class="div1-1 red">div1-1 float left</div>
	<div class="div1-2 green">div1-2 float left</div>
	<div class="div1-3 blue">div1-3</div>
</div>

<div class="cont">
	<div class="div2-1 red">div2-1 </div>
	<div class="div2-2 green">div2-2 float right</div>
	<div class="div2-3 blue">div2-3</div>
</div>

<div class="cont">
	<div class="div3-1 red">float left</div>
	<div class="div3-2 green">float right</div>
	<div class="div3-3 blue">div 3</div>
</div>

<div class="cont">
	<div class="red" style="float: right">float right</div>
	<div class="green" style="float: right; z-index: 3">float right</div>
	<div class="blue" style="width: 450px"></div>
</div>

<div class="cont">
	<div class="red" style="float: left;">float left</div>
	<div class="green" style="float: right">float right</div>
	<div class="blue" style="clear: both">clear both</div>
</div>

<div class="cont">
	<div class="red" >float left</div>
	<div class="green">float right</div>
	<div class="blue" >clear both</div>
</div>

</body>
</html>

