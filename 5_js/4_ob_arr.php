<!DOCTYPE HTML>
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>

<body>
<style type="text/css">
	
</style>
<script type="text/javascript">

//	создание объекта

var o = new Object();
var now = new Date();
document.write("Сегодня: " + now.toLocaleString());

//	создание свойств

var point = new Object();
point.x = 2.3;
point.y = -1.2;
//	или
var point = { x:2.3, y:-1.2 };

//	Объектные литералы могут быть вложенными. Например:
var rectangle = { upperLeft: { x: 2, y: 2 },
				  lowerRight: { x: 4, y: 4 }
};
// ======================
var x = {
	wid: 100,
	hei: 200,
	sqr: function(){
	  return x.wid*x.hei;
	}
}
 
  alert(x.wid);
  alert(x.sqr());

// =======================

Копирование объекта

var user = {
  name: "Вася",
  age: 30
};

var clone = {}; // новый пустой объект

// скопируем в него все свойства user
for (var key in user) {
  clone[key] = user[key];
}

// теперь clone - полностью независимая копия
clone.name = "Петя"; // поменяли данные в clone

alert( user.name ); // по-прежнему "Вася"


//	создание массива
var a = new Array();
a[0] = 1.2;
a[1] = "JavaScript";
a[2] = true;
a[3] = { x:1, y:3 };

//	или так
var a = new Array(1.2, "JavaScript", true, { x:1, y:3 });
//	или так
var a = [1.2, "JavaScript", true, { x:1, y:3 }];

Обычно new Array(элементы, ...) создаёт массив из данных элементов, 
но если у него один аргумент-число new Array(число), то он создает массив без элементов, но с заданной длиной.

var arr = new Array(2, 3);
alert( arr[0] ); // 2, создан массив [2, 3], всё ок

arr = new Array(2); // создаст массив [2] ?
alert( arr[0] ); // undefined! у нас массив без элементов, длины 2
</script>







</body>
</html>

