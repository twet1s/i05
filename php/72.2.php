<?php
$products = [
    [
        'name'   => 'мясо',
        'price'  => 100,
        'amount' => 5,
    ],
    [
        'name'   => 'овощи',
        'price'  => 200,
        'amount' => 6,
    ],
    [
        'name'   => 'фрукты',
        'price'  => 300,
        'amount' => 7,
    ],
    [
        'name' => 'рыба',
        'price' => 500,
        'amount' => 10,
    ],
];

    foreach ($products as $elem) {
		echo $elem['name'] . ': ' . $elem['price'] . '$, ' . $elem['amount'] . '<br>';
	}
?>