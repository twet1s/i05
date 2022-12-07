<?php

    $country = 
[
	[
		'country' => 'Россия', // ???
		'city' =>    'Москва',
	],
	[
		'country' => 'Беларусь', // ???
		'city' =>    'Минск',
	],
	[
		'country' => 'Россия',
		'city' =>    'Питер',
	],
	[
		'country' => 'Россия',
		'city' =>    'Владивосток',
	],
	[
		'country' => 'Украина',
		'city' =>    'Львов',
	],
	[
		'country' => 'Беларусь',
		'city' =>    'Могилев',
	],
	[
		'country' => 'Украина',
		'city' =>    'Киев',
	],
];

$result = [];
    foreach ($country as $elem) {
        $result[$elem['country']] = $elem;
    }

    var_dump($result);

?>