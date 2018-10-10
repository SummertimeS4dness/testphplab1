<html>
	<head>
		<title>9_1and2_1</title>
		<meta charset="utf-8">
	</head>
	<body>
		<center>
			<font color= "green"><h1> Присвоєння значення змінним </h1></font>
		</center>
		<font size="5">
		<?php
			echo "Приймаємо кількість яблук - 1.<br>";
			$apples = 1;
			echo "Кількість яблук: ", $apples, "<br>";
			echo "Додаємо 3 яблука.<br>";
			$apples+=3;
			echo "Тепер кількість яблук: ", $apples, "<br>";
		?>
		<H1>Інтерполяція змінних</H1>
		<?php
			echo " Приймаємо кількість яблук - 1.<BR>";
			$apples=1;
			echo "Кількість яблук: ", $apples, "<BR>";
			echo "Додаємо 3 яблука. <BR>";
			$apples=$apples+3;
			echo "Теперь кількість яблук: $apples <br><br>";
		?>
		<?php
			echo "Визначення типів змінних <br>";
			$a = 121;
			$b = "abc";
			$c = TRUE;
			echo $a." - ";
			echo gettype($a)."<br>";
			echo $b." - ";
			echo gettype($b)."<br>";
			echo $c." - ";
			echo gettype($c)."<br><br>";
		?>
		<?php
			$str = "15000"; // Значення String
			$new_str = (integer) $str; // Теперь значен-ня стало Integer
			// Перевірка...
			$a=10000;
			echo $new_str + $a."<br><br>";
		?>
		<H1>Змінні, що містять в собі імена інших змінних</H1>
		<?php
			$apples=4;
			$oranges=3;
			$fruitname="oranges";
			echo "Кількість апельсинів: ${$fruitname}.<BR>";
			$fruitname="apples";
			echo "Кількість яблук: ${$fruitname}.<BR><BR>";
		?>
		<?php
			$a=5;
			$b=3;
			$c=4;
			$d=$a+$b-$c;
			echo $d."<br><br>";
		?>
		<?php
			$b=$a=5; /* присвоєння однакового значення
			змінним $a та $b*/
			$c=$a++;/* присвоєння змінній $с початкового значення змінної $а, а потім збільшення на 1 */
			$e=$d=++$b; /*спочатку збільшення $b на 1, а по-тім присвоєння цього значення змінним $e і $d */
			$d=2*($d++);/* присвоєння змінній $d подвоєного значення змінної $d, а потім збільшення на 1 */
			$g=2*(++$e); /* присвоєння змінній $g подвоєно-го значення змінної $e після її збільшення на 1 */
			$h=$g+=10; /* спочатку збільшуємо змінну $g на 10, а результат заносимо у змінну $h */
			echo $h."<br><br>";
		?>
		<?php
			define("pi", 3.14);
			define("adresa", "Sumy, Kirova Street, 10");
			echo "Математична константа Пі дорівнює ", pi, "<br>";
			echo "Рядкова константа адреса приймає значення ", adresa, "<br><br>";
		?>
		<h1>Математичні оператори</h1> 
		<?php 
			$a=5; 
			$b=2; 
			$d=$a+$b; 
			echo $a,"+",$b,"=",$d, "<br>";
			$d=$a-$b; 
			echo $a,"-",$b,"=",$d, "<br>"; 
			$d=$a*$b; 
			echo $a,"*",$b,"=",$d, "<br>";
			$d=$a/$b; 
			echo $a,"/",$b,"=",$d, "<br>"; 
			$d=$a%$b; 
			echo $a,"%",$b,"=",$d, "<br><br>";
		?>
		<h1>Керування порядком виконання операторів</h1> 
		<?php
			$a=4; $b=2; $c=9; $d=$a+$b*$c; echo $a,"+",$b,"*",$c,"=",$d, "<br>"; $d=($a+$b)*$c; echo "(",$a,"+",$b,")", "*", $c, "=",$d, "<br>"; $d=$a+($b*$c); echo $a,"+", "(", $b,"*",$c,")","=",$d, "<br><br>"; 
		?>
		<?php
			echo trim("Життя прекрасне"),"<br>";
			echo substr("Життя прекрасне",6,9),"<br>";
			$x = "Hello";
			echo "кількість літер у слові Hello=", strlen($x),"<br>";
			echo ucfirst("життя прекрасне"),"<br>";
			echo substr_replace("Життя прекрасне","чудове",6,9),"<br>";
			echo strtoupper("життя прекрасне"),"<br>";
			echo chr(65), chr(67), chr(69),"<br>";
			$appl="яблук";
			$kol=10;
			$format="Вчора я купив %2\$d стиглих %1\$s в ма-газині неподалік від власного будинку <br>
			Сьогодні 5 %1\$s я віддав сестрі. Завтра, скоріш за все, куплю %2\$d апельсинів <br>";
			printf($format, $appl,$kol);
			$number = 362525200;
			echo sprintf("%.2e <br>", $number);
			$money=2.5;
			echo $money, "<br>";
			$formatted = sprintf("%01.2f <br>", $money );
			echo $formatted;
			$float=1.23456;
			echo $float, "\n";
			echo strval($float)."<br><br>";
		?>
		<H1>Использование оператора if</H1>
		<?php
			$minutes = 4;
			if ($minutes > 3) {
				echo "Ваше время истекло!<BR>";
				echo "Пожалуйста, положите трубку.<br><br>";
				$hang_up_now = TRUE;
			}
		?>
		<H1>Використання циклу WHILE</H1>
		<?php
			$valute=1;
			$i=1;
			while($i<=10){
				$valute*=2;
				$i+=1;
				echo "Число " . $valute . "<br><br>";
			}
		?>
		<H1>Використання циклу FOR </H1>
		<?php
			// Варіант 1
			for ($i = 1; $i <= 10; $i++) {
				echo $i;
			}
			// Варіант 2
			for ($i = 1;;$i++) {
				if ($i > 10) break;
				echo $i;
			}
		?>
		<h1>Використання масивів</h1> 
		<?php 
			$fruits[]="яблоко"; 
			$fruits[]="груша"; 
			$fruits[]="абрикос"; 
			$fruits[]="персик"; 
			$fruits[]="манго"; 
			for($i=0;$i<count($fruits);$i++) 
				if($fruits[$i]=="абрикос") {
					$fruits[$i]="слива"; 
					echo $fruits[$i], "<br>"; 
				} else echo $fruits[$i], "<br>";
		?>
		<h1>Використання циклу foreach</h1>
		<?php
			$names["Іванов"] = "Іван";
			$names["Петров"] = "Борис";
			$names["Макаров"] = "Антон";
			foreach ($names as $key => $value) {
				echo "<b>$value $key</b><br>";
			}
		?>
	</body>
</html>