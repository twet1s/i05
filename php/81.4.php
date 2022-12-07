<?php
	function func($num) {
		if ($num <= 0) {
			return abs($num);
		} else {
			return $num * $num;
		}
	}
	
	echo func(10); // выведет 100, т.к 10 не меньше и не равно 0 
	echo func(-5); // выведет 5, т.к -5 меньше 0 и вернет модуль числа -5
?>