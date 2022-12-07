<?php
	function func($num) {
		$sum = 0;
		
		for ($i = 1; $i <= $num; $i++) {
			$sum += $i;
			
		}
        return $sum; // цикл прокрутил 1 итерацию и вышел из функции. За 1 итерацию цикла в $sum = 1
	}
	
	echo func(5);
?>