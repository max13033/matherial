<!DOCTYPE HTML>
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://localhost/test.ru/css/style.css">
</head>

<body>

<?
$wid = 1360;
$heig = 680;

$wid_part = $wid/8;

$num_corner = 5;
$num_line = 4;
for($j = 1; $j <= $num_line; $j++){

	for($i = 1; $i <= $num_corner; $i++){
		// не пересекаются
		$arr[$j][$i][1] = rand(0.02*$heig, 0.3*$heig);
		$arr[$j][$i][2] = rand(0.3*$heig, 0.6*$heig);
		$arr[$j][$i][3] = rand(0.6*$heig, 0.98*$heig);

		// переcекаются
		// $arr[$j][$i][1] = rand(0.02*$heig, 0.98*$heig);    
		// $arr[$j][$i][2] = rand(0.02*$heig, 0.98*$heig);
		// $arr[$j][$i][3] = rand(0.02*$heig, 0.98*$heig);
	}	
}	
?>

<style type="text/css">
	body{
		margin: 0;
		background-color: #000;
	}
	#cont{
		width: <?=$wid?>px;
		height: <?=$heig?>px;
		position: relative;
		border: 1px solid black;
		-webkit-transform-style: preserve-3d; 
		-webkit-transform: perspective(500px);
	
	}
	#box1,#box2,#box3,#box4{
		width: <?=$wid?>px;
		height: <?=$heig?>px;
	}
	#box1{
		-webkit-transform-origin: 0 0;
		-webkit-transform: rotate3d(0, 1, 0, 90deg);
	}
	#box2{
		-webkit-transform-origin: 0 0;
		-webkit-transform: rotate3d(1, 0, 0, -90deg);
	}
	#box3{
		-webkit-transform-origin: 100% 0;
		-webkit-transform: rotate3d(0, 1, 0, -90deg);
	}
	#box4{
		-webkit-transform-origin: 0 100%;
		-webkit-transform: rotate3d(1, 0, 0, 90deg);
	}
	.box{
		position: absolute;
		width: <?=$wid?>px;
		height: <?=$heig?>px;
		top: 0;
		left: 0;
/*		background-color: #000;*/
		/*overflow: hidden;*/
	}
<?
for($j = 1; $j <= $num_line; $j++){			
	for($l = 1; $l<= 3; $l++){
?>
	.point<?=$j.$l?>{
		position: absolute;
		top: 200px;
		left: -20px;
		width: 10px;
		height: 10px;
		background-color: #fff;
		box-shadow: 0px 0px 6px 6px #55f;
		-webkit-animation: move<?=$j.$l?> 40s linear infinite; 
		-webkit-animation-delay: <?=rand(0, 20)?>s;

	}
<?  
	} 
}
for($j = 1; $j <= $num_line; $j++){	
	for($l = 1; $l<= 3; $l++){
?>
	@keyframes move<?=$j.$l?>{
		0% {left: 0px; 						top: <?=$arr[$j][1][$l];?>px;  }
		1% {left: <?=2*$wid_part;?>px; 		top: <?=$arr[$j][1][$l];?>px;}
		2% {left: <?=3*$wid_part;?>px; 		top: <?=$arr[$j][2][$l];?>px;}
		3% {left: <?=5*$wid_part;?>px; 		top: <?=$arr[$j][2][$l];?>px;}
		4% {left: <?=6*$wid_part;?>px; 		top: <?=$arr[$j][3][$l];?>px;}
		5% {left: <?=8*$wid_part;?>px; 		top: <?=$arr[$j][3][$l];?>px;}
		6% {left: <?=9*$wid_part;?>px; 		top: <?=$arr[$j][4][$l];?>px;}
		7% {left: <?=11*$wid_part;?>px; 	top: <?=$arr[$j][4][$l];?>px;}
		8% {left: <?=12*$wid_part;?>px; 	top: <?=$arr[$j][5][$l];?>px;}
		100%{left: <?=5*$wid;?>px; 			top: <?=$arr[$j][5][$l];?>px;}
	}
<?	
	}
}	
?>
</style>

<div id = "cont">
	<div id = "box1" class = "box">

<?   	for($l = 1; $l <= 3; $l++){		?>
			<div class = "point1<?=$l?>"></div>
<?		}		?>

		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="<?=5*$wid?>" height="<?=$heig?>">
			<defs>
			       <filter id="filter1" x="0" y="0">

			           <feGaussianBlur result="blurOut" in="offOut" stdDeviation="2" />

			           <feBlend in="SourceGraphic" in2="blurOut" mode="normal" />
			    </filter>
			</defs>		
<?   	for($l = 1; $l <= 3; $l++){		?>
			<polyline filter="url(#filter1)" points="
			0,                 	<?=$arr[1][1][$l];?> 
			<?=2*$wid_part;?>, 	<?=$arr[1][1][$l];?> 
			<?=3*$wid_part;?>, 	<?=$arr[1][2][$l];?> 
			<?=5*$wid_part;?>, 	<?=$arr[1][2][$l];?> 
			<?=6*$wid_part;?>, 	<?=$arr[1][3][$l];?> 
			<?=8*$wid_part;?>, 	<?=$arr[1][3][$l];?> 
			<?=9*$wid_part;?>, 	<?=$arr[1][4][$l];?> 
			<?=11*$wid_part;?>, <?=$arr[1][4][$l];?> 
			<?=12*$wid_part;?>, <?=$arr[1][5][$l];?> 			
			<?=3*$wid;?>,      	<?=$arr[1][5][$l];?>
			" stroke="#37a" stroke-width="5" fill="none" />     
<?		}		?>			
		</svg>
	</div>

	<div id = "box2" class = "box">
		<div style = "-webkit-transform: rotate(90deg);">

<?   	for($l = 1; $l <= 3; $l++){		?>
			<div class = "point2<?=$l?>"></div>
<?		}		?>

			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="<?=5*$wid?>" height="<?=$heig?>">
				<defs>
				       <filter id="filter1" x="0" y="0">

				           <feGaussianBlur result="blurOut" in="offOut" stdDeviation="2" />

				           <feBlend in="SourceGraphic" in2="blurOut" mode="normal" />
				    </filter>
				</defs>		

<?   	for($l = 1; $l <= 3; $l++){		?>
				<polyline filter="url(#filter1)" points="
				0,                 	<?=$arr[2][1][$l];?> 
				<?=2*$wid_part;?>, 	<?=$arr[2][1][$l];?> 
				<?=3*$wid_part;?>,	<?=$arr[2][2][$l];?> 
				<?=5*$wid_part;?>, 	<?=$arr[2][2][$l];?> 
				<?=6*$wid_part;?>, 	<?=$arr[2][3][$l];?> 
				<?=8*$wid_part;?>, 	<?=$arr[2][3][$l];?> 
				<?=9*$wid_part;?>, 	<?=$arr[2][4][$l];?> 
				<?=11*$wid_part;?>, <?=$arr[2][4][$l];?> 
				<?=12*$wid_part;?>, <?=$arr[2][5][$l];?> 			
				<?=5*$wid;?>,      	<?=$arr[2][5][$l];?>" 

					stroke="#37a" stroke-width="5" fill="none" />     
<?		}		?>			
			</svg>
		</div>	
	</div>	

	<div id = "box3" class = "box">
		<div style = "-webkit-transform: rotate(180deg);">

<?   	for($l = 1; $l <= 3; $l++){		?>
			<div class = "point3<?=$l?>"></div>
<?		}		?>

			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="<?=5*$wid?>" height="<?=$heig?>">
				<defs>
				       <filter id="filter1" x="0" y="0">

				           <feGaussianBlur result="blurOut" in="offOut" stdDeviation="2" />

				           <feBlend in="SourceGraphic" in2="blurOut" mode="normal" />
				    </filter>
				</defs>		

<?   	for($l = 1; $l <= 3; $l++){		?>
				
				<polyline filter="url(#filter1)" points="
				0,                 	<?=$arr[3][1][$l];?> 
				<?=2*$wid_part;?>, 	<?=$arr[3][1][$l];?> 
				<?=3*$wid_part;?>, 	<?=$arr[3][2][$l];?> 
				<?=5*$wid_part;?>, 	<?=$arr[3][2][$l];?> 
				<?=6*$wid_part;?>, 	<?=$arr[3][3][$l];?> 
				<?=8*$wid_part;?>, 	<?=$arr[3][3][$l];?> 
				<?=9*$wid_part;?>, 	<?=$arr[3][4][$l];?> 
				<?=11*$wid_part;?>, <?=$arr[3][4][$l];?> 
				<?=12*$wid_part;?>, <?=$arr[3][5][$l];?> 			
				<?=5*$wid;?>,      	<?=$arr[3][5][$l];?>" stroke="#37a" stroke-width="5" fill="none" />     
<?		}		?>
			</svg>
		</div>
	</div>

	<div id = "box4" class = "box">
		<div style = "-webkit-transform: rotate(-90deg);">

<?   	for($l = 1; $l <= 3; $l++){		?>
			<div class = "point4<?=$l?>"></div>
<?		}		?>

			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="<?=5*$wid?>" height="<?=$heig?>">
				<defs>
				       <filter id="filter1" x="0" y="0">

				           <feGaussianBlur result="blurOut" in="offOut" stdDeviation="2" />

				           <feBlend in="SourceGraphic" in2="blurOut" mode="normal" />
				    </filter>
				</defs>		

<?   	for($l = 1; $l <= 3; $l++){		?>

				<polyline filter="url(#filter1)" points="
				0,                 	<?=$arr[4][1][$l];?> 
				<?=2*$wid_part;?>, 	<?=$arr[4][1][$l];?> 
				<?=3*$wid_part;?>, 	<?=$arr[4][2][$l];?> 
				<?=5*$wid_part;?>, 	<?=$arr[4][2][$l];?> 
				<?=6*$wid_part;?>, 	<?=$arr[4][3][$l];?> 
				<?=8*$wid_part;?>, 	<?=$arr[4][3][$l];?> 
				<?=9*$wid_part;?>, 	<?=$arr[4][4][$l];?> 
				<?=11*$wid_part;?>, <?=$arr[4][4][$l];?> 
				<?=12*$wid_part;?>, <?=$arr[4][5][$l];?> 			
				<?=5*$wid;?>,      	<?=$arr[4][5][$l];?>" stroke="#37a" stroke-width="5" fill="none" />     
<?		}		?>
			</svg>
		</div>	
	</div>
</div>















</body>
</html>

