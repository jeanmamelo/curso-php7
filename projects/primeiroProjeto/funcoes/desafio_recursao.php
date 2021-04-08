<div class="titulo">Desafio recursão</div>

<?php

/*

$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

> 1
> 2
>> 3
>> 4
>> 5
> 6
>> 7
>>> 8
>>> 9
> 10

*/

$array = [
    1, 2,
        [
            3, 4, 5
        ],
    6, 
        [
            7,
            [
                8, 9
            ]
        ],
    10
];

/**
 * minha solução
 */

Class Desafio_recursao {

    public $array = [
        1, 2,
            [
                3, 4, 5
            ],
        6, 
            [
                7,
                [
                    8, 9
                ]
            ],
        10
    ];

    public function printArrayByLevel($array, $level) {
        foreach ($array as $key) {
            if (!is_array($key)) {
                echo "$level $key";
                echo '<br>';
            } else {
                printArrayByLevel($key, $level . $level[0]);
            }
        }
    }

}

/**
 * solução do professor
 */

function printArray($array, $level = '>') {
    foreach ($array as $element) {
        if (is_array($element)) {
            printArray($element, $level . $level[0]);
        } else {
            echo "$level $element";
            echo '<br>';
        }
    }
}

printArray($array);