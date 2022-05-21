<?php

// cho mảng 2 chiều

$diemthi = [
    [
        'Name' => 'Hoàng',
        'born' => 'Quảng Trị',
        'điểm' => 8
    ],
    [
        'Name' => 'Trung',
        'born' => 'Hà Tĩnh',
        'điểm' => 9
    ],
    [
        'Name' => 'Dương',
        'born' => 'Đà Nãng',
        'điểm' => 6
    ],
];


// thêm phần tử vào mảng
$push = [
    'Name' => 'Đức',
    'born' => 'Sài Gòn',
    'điểm' => 9
];
$diemthi[] = $push;
foreach ($diemthi as $key => $val) {
    echo "Tên: {$val['Name']}<br/>";
    echo "Quê quán: {$val['born']}<br/>";
    echo "Điểm: {$val['điểm']}<br/>";
    echo '__________<br/>';
}
