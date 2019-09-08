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
	}
	.cont{
		margin: 0px;
		background-color: #000;
		width: 20px;
		position: relative;
		float: left;
	}
	.w{
		color: #00f;
		font-size: 20pt;
		font-weight: bold;
		filter: drop-shadow(0px 0px 2px #7af);
		opacity: 0.1;
	}

	@keyframes flash{
		0% {opacity: 1; };
		10% {opacity: 0.8; };
		20% {opacity: 0.6; };
		30% {opacity: 0.5; };			
		100% {opacity: 0.2;	};
	}
</style>

<?
$num_rows = 15;
$num_cols = 3;
$dur = 2;
$delay = $dur/$num_rows;

for($i = 1; $i <= $num_cols; $i++){		
	$delay_col = rand(100, 2000);
	?>

	<div class = "cont"	>
<?
		for($j = 1; $j <= $num_rows; $j++){		?>	

			<div class = "w" style = "animation: flash <?=$dur?>s infinite ease; animation-delay: <? echo ($j*$delay + $delay_col/1000); ?>s;"   ?>
<?				echo rand(0, 9);	?>
			</div>	
<?		}	?>		
	</div>
<?
}
?>	



</body>
</html>

