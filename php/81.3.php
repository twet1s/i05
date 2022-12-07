<?php
	function func($num) {
		return $num; // выполнится это, выводим $num и заканчивает свою работу, ниже строчки не сработают, т.к эта строчка отработала на ура
		
		$result = $num * $num;
		return $result;
	}
	
	echo func(3);
?>