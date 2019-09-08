<!DOCTYPE HTML>
<html>
<head>
	<title>Бани и сауны</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- 	<link rel="shortcut icon" href="img/favicon.png" type="image/png"> -->
</head>

<body>

<style type="text/css">
	.block{
		width: 500px;
		height: 700px;
	}
	#one{
		background-color: #ffa;
	}
	#two{
		background-color: #aff;
		opacity: 0;
		transition: opacity;
		transition-duration: 2s;
		transition-timing-function: ease;
	}
	#three{
		background-color: #faf;
		opacity: 0;
		transition: opacity;
		transition-duration: 2s;
		transition-timing-function: ease;
	}
</style>



<div class = "block" id = "one">   </div>
<div class = "block" id = "two">   </div>
<div class = "block" id = "three">   </div>



<script type="text/javascript">
	window.onscroll = function(){
		var coor = two.getBoundingClientRect();
		if(coor.top < 0){
			two.style.opacity = '1';
		}
		var coor = three.getBoundingClientRect();
		if(coor.top < 0){
			three.style.opacity = '1';
		}
	}	

</script>

















</body>
</html>