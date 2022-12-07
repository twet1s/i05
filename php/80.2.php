<?php
	function func($num) {

        if ($num > 0 ) {
            echo '+++';
        }
        elseif($num == 0) {
            echo 'error';
        } 
        else {
            echo '---';
        }
        

    }
    
    func(5);
?>