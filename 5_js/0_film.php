<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Сайт</title>

</head>

<body>
<script type="text/javascript">

var count = prompt("enter number", "10");
if(count>0){
	for(var x = count; x>0; x--){
		alert("Starting in..." + x);
	}
	alert("Roll");
}
else alert("fuck you");

// два способа задания функции:

function shoSeatStatus(seatNum){
	alert("This seat is " + getSeatStatus(seatNum));
}

var showSeatStatus = function(seatNum){
	alert("This seat is " + getSeatStatus(seatNum));
}




</script>






</body>
</html>