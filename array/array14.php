<?php

$staff = [
    10 => [
        'Name' => 'Thành',
        'Age' => 27
    ],
    //11 => 'Lý Ngộ',
    12 => [
        [23, 4, 6],
        [
            'sắp xếp'
        ],
    ]
];

foreach ($staff as $key => $value){
    foreach ($value as $item){
        echo $item['Name'];
    }
    //echo $key .'=>'.$value;
}