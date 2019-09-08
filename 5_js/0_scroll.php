<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Сайт</title>
</head>

<body>

<style type="text/css">
	div{
		width: 800px;
		height: 600px;
	}
	.div1{
		position: relative;
		float: left;
		background-color: #999;
	}
	.div2{
		position: relative;
		float: left;
		background-color: #900; 
	}
	.div3{
		position: relative;
		float: left;
		clear: left;
		background-color: #090; 
	}
	.div4{
		position: relative;
		float: left;
		background-color: #009; 
	}		
	.fix{
		width: 300px;
		height: 50px;
		background-color: #aaa;
		position: fixed;
		right: 30px;
		bottom: 30px;
		display: none;
	}

</style>




<div style = "width: 2000px"> 
<!-- 	onclick внутри самого элемента -->	
	<div class = "div1" >	<span  id = "span" onClick = "window.scroll(500, 500);" style = "cursor: pointer;">	div1	</span>	</div> 
	<div class = "div2">div2</div>
	<div class = "div3">div3</div>
	<div class = "div4">div4</div>
</div>

<div class = "fix" > 
	<span id = "text"> </span>  
</div>


<script type="text/javascript">
	// alert('Видимая Ширина и высота - ' + document.documentElement.clientWidth + ' * ' + document.documentElement.clientHeight);
	// alert('Вся Ширина/высота - ' + document.documentElement.scrollWidth + ' * ' +document.documentElement.scrollHeight);

	// alert( 'Текущая прокрутка сверху: ' + window.pageYOffset );
	// alert( 'Текущая прокрутка слева: ' + window.pageXOffset );

	window.onscroll = function(){
		if(window.pageYOffset > 100){
			document.getElementsByClassName('fix')[0].style.display = 'block';
			var text = 'Текущий отступ сверху ' + window.pageYOffset + ', <br> Текущий отступ слева ' + window.pageXOffset;
			document.getElementById("text").innerHTML = text;
		}
		else{
			document.getElementsByClassName('fix')[0].style.display = 'none';		}	
	}

//  СПОСОБЫ ЗАДАНИЯ ПРОКРУТКИ ЧЕРЕЗ ОБРАЩЕНИЕ ПО ID
// 1
	document.getElementById("span").onclick = function(){
		window.scroll(300, 300);
	}

// 2	
	// span.onclick = function(){
	// 	window.scroll(500, 500);
	// }

</script>

</body>
</html>