<?php
	function func($num = 5) {
		echo $num * $num;
	}

    func(2); // 2 * 2 = 4
    func(3); // 3 * 3 = 9 
    func(); // 5 * 5 = 25 (функция принимает значение 5)
?>