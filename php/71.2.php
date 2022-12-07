<?php
	$arr = [['x', 'x', 'x', 'x'], ['x', 'x', 
	'x', 'x'], ['x', 'x', 'x', 'x']]  ;

	for ($i = 0; $i < 3; $i++) {
		for ($j = 0; $j < 3; $j++) {
			$arr[$i][$j] = $j + 1; 
				
		}
	}

	var_dump($arr);

?>