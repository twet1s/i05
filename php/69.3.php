<?php
	$arr = [
		[
			[1, 2],
			[3, 4],
		],
		[
			[5, 6],
			[7, 8],
		],
	];
	$sum = 0;
	foreach ($arr as $sub) {
        foreach($sub as $elem) {
			foreach($elem as $elemm) {
				$sum += $elemm;
			}
            
            
        }
        
    }
	echo $sum;
	
?>