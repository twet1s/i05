<?php
	function func($num1 = 0, $num2 = 0) {
		echo $num1 + $num2;
	}

	func(2, 3); // 2 + 3 = 5 
	func(3); // 3 + 0 = 3
	func(); // 0 + 0 = 0 ($num = 0, $num2 = 0)


?>