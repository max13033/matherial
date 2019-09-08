<!DOCTYPE HTML>
<html>

<head>
<title>Заголовок страницы</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://localhost/test.ru/css/style.css">
</head>

<body>
<style type="text/css">
	result{ font-weight: bold; }
	#payment{ text-decoration: underline; }
</style>
<script type="text/javascript">
	function calculate( ) {
			// Получаем пользовательские данные из формы. Предполагаем, что данные
			// являются корректными. Преобразуем процентную ставку из процентов
			// в десятичное значение. Преобразуем период платежа
			// в годах в количество месячных платежей.
		var money = document.loandata.money.value;
		var procent = document.loandata.procent.value;
		var payments = document.loandata.years.value * 12;   // количество платежей
			// Теперь вычисляется сумма ежемесячного платежа.
		var totalpay = (money*(procent/100 + 1));
		var monthpay = totalpay/payments;
		var repay = totalpay - money;

		
		var payment = document.getElementById("payment");
		var total = document.getElementById("total");
		var totalprocent = document.getElementById("totalprocent");
			// Убедиться, что результат является конечным числом. Если это так –
			// отобразить результаты, определив содержимое каждого элемента <span>.
		if (isFinite(monthpay)) {
			payment.innerHTML = monthpay.toFixed(2);
			total.innerHTML = totalpay.toFixed(2);
			totalprocent.innerHTML = repay.toFixed(2);
		}
			// В противном случае данные, введенные пользователем, по-видимому
			// были некорректны, поэтому ничего не выводится.
		else {
			payment.innerHTML = "";
			total.innerHTML = "";
			totalprocent.innerHTML = "";
		}
	}




</script>

<form name="loandata">
	<table>
		<tr>	<td>	<b>Введите данные о ссуде: </b>	</td>	<td></td></tr>
		<tr>
			<td>1) Размер ссуды:</td>
			<td><input type="text" name = "money" onchange="calculate();"></td>
		</tr>
		<tr>
			<td>2) Годовой процент:</td>
			<td><input type="text" name="procent" onchange="calculate();"> </td>
		</tr>
		<tr>
			<td>3) Срок ссуды:</td>
			<td><input type="text" name="years" onchange="calculate();"> </td>
		</tr>
		<tr>
			<td></td>	
			<td><input type="button" value="Рассситать" onclick="calculate();"> </td>
		</tr>
		<tr>
			<td>	<b>Сведения о платежах:</b>		</td>	<td></td>	</tr>
		
		<tr>
			<td>4) Ежемесячный платёж:</td>
			<td>	<span class="result" id="payment"></span></td>
		</tr>	

		<tr>
			<td>5) Общая сумма платежей:</td>
			<td><span class="result" id = "total"></span></td>
		</tr>

		<tr>
			<td>6) Общая сумма платежей по процентам</td>
			<td><span class="result" id = totalprocent></span></td>
		</tr>
	</table>
</form>







</body>
</html>

