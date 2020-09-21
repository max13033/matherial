/* Многострочный 
	комментарий	*/

//	Однострочный еомментарий	


\n	Новая строка (0x0a)
\r	Возврат каретки (0x0d)
\f	Прогон страницы (0x0c)
\b	Возврат на шаг (0x08)
\s	пробел (0x20)
\t	Табуляция
\"	Двойная кавычка
\'	Апостроф
\\	Обратная косая черта
\ddd	Восьмеричный символ (ddd)
\uxxxx	Шестнадцатеричный символ UNICODE (xxxx)


System.out.println("Diego");					//	Diego
System.out.println(3);							//	3
System.out.println("Mama" + "Mila" + "Ramu");	//	MamaMilaRamu

System.out.println(1 + 3);				//	13
System.out.println("1" + "3");			//	13
System.out.println(1 + "3");			//	13
System.out.println("1" + 3);			//	13
System.out.println("1" + (1 + 3));	4	//	14

System.out.println("Amigo is the best!");				//	Amigo is the best!
System.out.println("Amigo" + "is the best!");			//	Amigois the best!
System.out.println("Amigo" + " " + "is the best!");		//	Amigo is the best!

System.out.println(3 * 3 + 4 * 4);	//	25
System.out.println(1 * 2 + 3 * 4);	//	14

System.out.print("Diego");
System.out.print("Diego");
System.out.print("Diego");	DiegoDiegoDiego

System.out.print("Diego ");
System.out.println("is the best!");		//	Diego is the best!

System.out.print("Amigo ");
System.out.println("is the best!");		//	Amigo is the best!



//	Сравнение объектов

int a = 5;							//	Происходит сравнение примитивных типов.
int b = 5;							//	На экран будет выведено true.
System.out.println(a == b);	

Cat cat1 = new Cat("Vaska");		//	Происходит сравнение ссылок.
Cat cat2 = cat1;					//	На экран будет выведено true.
System.out.println(cat1 == cat2);	//	Обе переменных хранят ссылки на один и тот же объект.

String s = new String("Mama");		//	Происходит сравнение ссылок.
String s2 = s;						//	На экран будет выведено true.
System.out.println(s == s2);		//	Обе переменных хранят ссылки на один и тот же объект.

Cat cat1 = new Cat("Vaska");		//	Происходит сравнение ссылок.
Cat cat2 = new Cat("Vaska");		//	На экран будет выведено false.
System.out.println(cat1 == cat2);	//	Переменные хранят ссылки на два идентичных объекта Cat, но не на один и тот же.

String s = new String("Mama");		//	Происходит сравнение ссылок.
String s2 = new String("Mama");		//	На экран будет выведено false.
System.out.println(s == s2);		//	Переменные хранят ссылки на два идентичных объекта String, но не на один и тот же.

Cat cat1 = new Cat("Vaska");			//	Происходит сравнение объектов.
Cat cat2 = new Cat("Vaska");			//	Если в классе Cat не переопределен метод equals(), на экран будет выведено false.
System.out.println(cat1.equals(cat2));	//	Переменные хранят ссылки на два идентичных объекта Cat, но не на один и тот же.

String s = new String("Mama");		//	Происходит сравнение объектов.
String s2 = new String("Mama");		//	На экран будет выведено true.
System.out.println(s.equals(s2));	//	Переменные хранят ссылки на два идентичных объекта String.

Примеры вода данных:

static Scanner reader = new Scanner(System.in);

int 		reader.nextInt()
long 		reader.nextLong()
float 		reader.nextFloat()
double 		reader.nextDouble()
String 		reader.next()
char 		reader.next()charAt(0)	//	во вторых скобках надо указывать, какой по счету символ из набираемого на клавиатуре 
									//	будет вводиться в переменную. Например, оператор reader.nextQ.charAt(1) принимает второй 
									//	по счету символ из того строкового значения, которое будет
									//	набрано на клавиатуре перед нажатием на клавишу «Ввод» (Enter).

/* !!!	Хотим обратить внимание вот на какую особенность ввода с клавиатуры строковых значений: использование команды ввода s=reader.next()
приводит к тому, что переменную s вводится только часть строки (до первого пробела или табуляции). 
Если же по условию задачи необходимо ввести все символы, в том числе и пробел 
(например, если целью задачи является подсчет слов в введенном предложении), то можно применить другую, аналогичную использованной нами, команду
s=reader.nextLine(). */

