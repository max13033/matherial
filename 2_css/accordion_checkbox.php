<!DOCTYPE html>
<html>
    <head>
<style type="text/css">

#check1{
	display: none;
}
#check2{
	display: none;
}
#check3{
	display: none;
}
.pt{
	width: 300px;
	height: 30px;
	background-image: linear-gradient(0, #11a, #0af);
	border-radius: 10px;
}
.text{
	width: 300px;
	height: 0;
	overflow: hidden;
	background-image: linear-gradient(0, #199, #0fd);
	border-radius: 10px;
	transition-property: height;
	transition-duration: 1s;
}
#check1:checked ~ .one,
#check2:checked ~ .two,
#check3:checked ~ .three{
	height: 100px;
}

 </style>	
 		<div class="cont">
 			<input type="checkbox" id="check1">
			<label for="check1">
				<div class="pt">Пункт 1</div>
			</label>
 			<div class="text one">Текст первого пункта</div>

 			<input type="checkbox" id="check2">
 			<label for="check2">
				<div class="pt">Пункт 2</div>
			</label>
			<div class="text two">Текст второго пункта</div>

			<input type="checkbox" id="check3">
			<label for="check3">
				<div class="pt">Пункт 3</div>
			</label>
 			<div class="text three">Текст третьего пункта</div>
 		</div>



    </head>
</html>