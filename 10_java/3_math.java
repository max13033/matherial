Math.abs(x) 		Абсолютное значение х 	Math.abs(1О) -> 1О
											Math.abs(-1О) -> 1О

Math.pow(a,b) а в степени Ь 				Math.pow(2,3) -> 8.0
											Math.pow(-2,3) -> -8.0
											Math.pow(5.5,2) -> 30.25
											Math.pow(2,2.5) -> 5.66

Math.sqrt(x) Квадратный корень (положительный)	Math.sqrt(16) -> 4.0

Math.round(x) Округленное число 			Math.round(6.3) -> 6
											Math.round(6.7) -> 7
											Math.round(-6.7) -> -7
											Math.round(-6.3) -> -6

Math.floor(x) Ближайшее слева число с 		Math.tloor(15.2) -> 15.0
				нулевой дробной частью		Math.tloor(0.98) -> О.О
											Math.tloor(-9.8) -> -10.0
											Math.tloor(-9.2) -> -10.0

Math.ceil(x) Ближайшее справа число с 		Math.ceil(O.98) -> 1.0
				нулевой дробной частью 		Math.ceil(-9.8) -> -9.0
											Math.ceil(-9.2) -> -9.0 
											Math.ceil(l5.2) -> 16.0

Math.min(a,b) Наименьшее из двух значений	Math.min(5,9) -> 5
 											Math.min(5.2, 1.1) -> 1.1

Math.max(а,Ь) Наибольшее из двух значений	Math.max(5,9) -> 9
 											Math.max(5.2, l.1) -> 5.2

Math.random() Случайная десятичная дробь из 
			диапазона от О (включая) до 1 (не включая) 

//	Общая формула для генерации случайного целого числа х, такого, что
a <= x <= Ь:
х = а+ (int)(Math.random()*(b-a+1)) 




























