<?php
$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd',
    'qualquer-coisa' => 'Teste'
];

foreach ($array as $item) {
    echo $item.PHP_EOL;
}

$carros = [
    'LMS-2312' => [
        'marca' => 'VW',
        'modelo' => 'Gol'
    ]
];
