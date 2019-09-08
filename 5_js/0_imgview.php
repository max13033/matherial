<!DOCTYPE HTML>
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://localhost/test.ru/css/style.css">
</head>

<body>
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
		max-width: 1200px;
		height: 500px;
		border: 5px solid #fff;
		border-radius: 10px;
		box-shadow: 10px 10px 10px #222;
		z-index: 5;
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
		margin-top: 2%;
		background-color: #777;
		display: inline-block;
		position: relative;
	}

</style>

<script type="text/javascript">


function func(x){

		document.getElementsByClassName('big')[0].src = 'img/moto' + x + '.jpg';
		func.id = x;
		
		document.getElementById('bigcont').style.display = 'block';
		document.getElementById('backgr').style.display = 'block';
}

function prev(){
	var imgNum = document.getElementsByClassName('img').length;
	//alert(imgNum);
	var p_id;

	if(func.id == 1){
		p_id = imgNum;
	}
	else{
		p_id = parseInt(func.id) - 1;
	}
	document.getElementsByClassName('big')[0].src = 'img/moto' + p_id + '.jpg';

	func.id = p_id;
}
function next(){
	var imgNum = document.getElementsByClassName('img').length;
	//alert(imgNum);

	var n_id;

	if(func.id == imgNum){
		n_id = 1;
	}
	else{
		n_id = parseInt(func.id) + 1;
	}
	document.getElementsByClassName('big')[0].src = 'img/moto' + n_id + '.jpg';
	func.id = n_id;
}

	

</script>

<?
for($i = 1; $i<=5; $i++){	?>
	<img class = "img" id = "<?=$i?>" src = "img/moto<?=$i?>.jpg" onclick = "var x = this.id; func(x);">
<?
}	?>	
<div class="backgr" id = "backgr" style="display: none">	
</div>

<div class="bigcont" id = "bigcont" style="display: none" >
	<div class="imgbox">
		<div class="left but" onclick="prev()" ></div>
		<img class="big" onclick = "document.getElementsByClassName('bigcont')[0].style.display = 'none'; document.getElementsByClassName('backgr')[0].style.display = 'none';">
		<div class="right but" onclick="next()"></div>
	</div>
</div>
</body>
</html>

