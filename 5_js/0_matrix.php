<!DOCTYPE HTML>
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://localhost/test.ru/css/style.css">
</head>

<body>

<style type="text/css">
	body{
		margin: 0;
		background-color: #000;
		color: #00f;
	}
	.cont{
		margin: 0px;
		background-color: #000;
		width: 30px;
		position: relative;
		float: left;
	}
	.w{
		color: #5af;
		-webkit-text-stroke: 1px #03f;
		font-size: 20pt;
		font-weight: bold;
		filter: drop-shadow(0px 0px 3px #7df);
		opacity: 0.1;
		animation: flash 2s infinite ease; 
	}

	@keyframes flash{
		0% {opacity: 1; };
		10% {opacity: 0.8; };
		20% {opacity: 0.6; };
		30% {opacity: 0.5; };			
		100% {opacity: 0.2;	};
	}
</style>


	

<script type="text/javascript">
	var col = 10;
	var rows = 17;
	var dur = 3;
	var delay = dur/rows;
	var i,j,delay_col;

	// document.write(Math.floor(Math.random()*(15 - 1)) + 1);

	for(j = 1; j<= col; j++){
		document.write('<div class = "cont">');
		delay_col = (Math.floor(((Math.random() * col) + 1)*10))/10;

		for(i = 1; i <= rows; i++){
			document.write('<div class = "w" style = "animation-delay: ' + (delay * i + delay_col) + 's; animation-duration: ' + dur + 's;">' + Math.floor(Math.random()*10) + '</div>');
		}

		document.write('</div>');
	}
	// document.write('<div class = "w" style = "animation-delay: 0s">' + Math.floor(Math.random()*10) + '</div>');
	// document.write('<div class = "w" style = "animation-delay: 0.1s">' + Math.floor(Math.random()*10) + '</div>');
	// document.write('<div class = "w" style = "animation-delay: 0.2s">' + Math.floor(Math.random()*10) + '</div>');


</script>


</div>
</body>
</html>

