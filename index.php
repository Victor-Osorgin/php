<?php
	$array1 = [13, 19, 222, 777, 322, 911];
	$array2 = [8, 312, 101, 1, 14, 0];

	echo "Результат сложения двух массивов: ", sum_arr($array1, $array2);
	echo "<br>";

	$a = 13;
	$b = "God Bless America";
	$c = 1000000.1;
	$d = true;
	$e = [2, 12, 46, 25, 0, 8, 6];
	$f = array("Name" => "Victor",
				"Age" => 18);
	
	$g = [$a, $b, $c, $d, $e, $f];

	echo "Вывод типов элементов массива: ", "<br>", type_arr($g);

	function type_arr($arr1)
	{
		if (is_array($arr1)) //Определяем является ли переменная массивом
		{
			foreach ($arr1 as $i) //Проходим циклом по каждому элементу
			{
				$type = gettype($i); //Определяем тип переменной в массиве
				echo $type;			//Выводим тип
				echo "<br>"; 
			}
		}

		else 
		{
			echo "Переменная не являтся массивом";
		}
	}

	function sum_arr ($arr1, $arr2) //Функция сложения массивов
	{
		if (is_array($arr1) && is_array($arr2)) //Проверяем, является ли 1 и 2 переменная массивом
		{
			$summing = array_sum($arr1) + array_sum($arr2); //Складываем массивы
			return $summing;
		}

		else
		{
			echo "Одна из переменных не является массивом";
		}
	}
?>