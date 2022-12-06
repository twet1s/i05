<?php
    $age = ['25'];
    foreach ($age as $elem) {
    if ($elem >= 10){
        if($elem <= 99){
            $z = $elem[0] + $elem[1];
        }
        else {
            echo 'Число больше 99';
        }
    }
    else {
        echo 'Число меньше 10';
    }
}
    echo $z;
?>