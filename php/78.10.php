<?php
    $keys = range(1, 26);
    $arr = range('a', 'z');

    $combine = array_combine($keys, $arr);
    var_dump ($combine);
?>