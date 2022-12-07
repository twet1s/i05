<?php
	function func($num) {
		if ($num <= 0) {
			return abs($num);
		}
		
		return $num * $num;
	}
	
	echo func(10); // 100, т.к 100 не меньше 0, пропускаем цикл, возвращаем произведение 
	echo func(-5); // 5, т.к -5 < 0, возвращаем модуль числа -5
?>