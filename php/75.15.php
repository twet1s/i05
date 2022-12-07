<?php

    $string = 'prOYs44 ';

    if(strlen($string > 5)) {
        $str = substr($string, 0, 6) .'...';
    }
    else {
        $str = $string;
    }
    echo $str;
?>

