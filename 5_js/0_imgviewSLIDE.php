<!DOCTYPE HTML>
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://localhost/test.ru/css/style.css">
</head>

<body>

<?
$pic_width = 500;
$num_pic = 5;
$sl_width = $pic_width*$num_pic;
?>

<style type="text/css">
	.img{
		width: 150px;
	}
	.left{
		position: absolute;
		left: 0;

	}
	.right{
		position: absolute;
		right: 5px;
		top: 5px;
	}
	.but{
		background-color: #666;
		height: 100%;
		width: 50px;
		opacity: 0;
		z-index: 6;
	}
	.but:hover{
		opacity: 0.5;
	}
	.big{
		width: <?=$pic_width?>px;
		z-index: 5;
		margin: -2px;
	}
	.backgr{
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: #333;
		opacity: 0.9;
		z-index: 2;
	}
	.bigcont{
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		text-align: center;
		z-index: 3;
		/*background-color: #555;*/
	}
	.imgbox{
		width: <?=$pic_width?>px;
		margin-top: 2%;
		background-color: #777;
		display: inline-block;
		position: relative;
		border: 5px solid #fff;
		border-radius: 10px;
		box-shadow: 10px 10px 10px #222;
		overflow: hidden;

	}
	#sl{
		position: relative;
		width: <?=$sl_width?>px;
		transition-property: left;
		transition-duration: 1s;


	}

</style>

<script type="text/javascript">
var left;
var numPhoto = <?=$num_pic?>;
var width = <?=$pic_width?>;
var slwidth = (num*width) + 'px';

function func(x){
		
		document.getElementById('bigcont').style.display = 'block';
		document.getElementById('backgr').style.display = 'block';
		left = -(width*(x-1));
		document.getElementById('sl').style.left = left + 'px';
		func.left = left;
		
		setInterval(next, 3000);    // задаёт автоматическую прокрутку
}

function prev(){
	if(left == 0){
		left = -width*(numPhoto - 1);
	}
	else{	
		left = func.left + width;
	}
	document.getElementById('sl').style.left = left + 'px';
	func.left = left;
}
function next(){
	if(left == -width*(numPhoto - 1)){
		left = 0;
	}
	else{	
		left = func.left - width;
	}
	document.getElementById('sl').style.left = left + 'px';
	func.left = left;
}
	

</script>

<?
for($i = 1; $i<=$num_pic; $i++){	?>
	<img class = "img" id = "<?=$i?>" src = "img/m<?=$i?>.jpg" onclick = "var x = this.id; func(x);">
<?
}	?>	
<div class="backgr" id = "backgr" style="display: none">	
</div>

<div class="bigcont" id = "bigcont" style="display: none" >
	<div class="imgbox">
		<div class="left but" onclick="prev()" ></div>
		<div class = "slide" id = "sl" onclick = "document.getElementsByClassName('bigcont')[0].style.display = 'none'; document.getElementsByClassName('backgr')[0].style.display = 'none';">
<?			for($i = 1; $i <= $num_pic; $i++){ 	?>
				<img class="big" src = "img/m<?=$i?>.jpg">
<?			}			?>				
		</div>
		<div class="right but" onclick="next()"></div>
	</div>
</div>
</body>
</html>

