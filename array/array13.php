<?php
// tạo mảng 2 chiều để lưu danh sách điểm của học sinh

$list = [
    10 => [
        [
            'Name' => 'Trung',
            'Age' => 17,
            'Điểm TB' => 6.9
        ],
        [
            'Name' => 'Hoàng',
            'Age' => 17,
            'Điểm TB' => 7.5
        ],
        [
            'Name' => 'Lý',
            'Age' => 17,
            'Điểm TB' => 8.0

        ],
    ],
    11 => [
        [
            'Name' => 'Trần',
            'Age' => 18,
            'Điểm TB' => 4.2
        ],
        [
            'Name' => 'Ngọc',
            'Age' => 18,
            'Điểm TB' => 6.8

        ],
        [
            'Name' => 'Hiếu',
            'Age' => 18,
            'Điểm TB' => 5.7

        ],
    ],
    12 => [
        [
            'Name' => 'Dương',
            'Age' => 19,
            'Điểm TB' => 8.1
        ],
        [
            'Name' => 'Vinh',
            'Age' => 19,
            'Điểm TB' => 7.3

        ],
        [
            'Name' => 'Diệu',
            'Age' => 19,
            'Điểm TB' => 7.0

        ],

    ]
];
// duyệt mảng vừa tạo ra;
/*
foreach ($list as $key => $val) {
    foreach ($val as $val) {
        echo "Lớp: $key<br/>";
        echo "Tên: {$val['Name']}<br/>";
        echo "Tuổi: {$val['Age']}<br/>";
        echo "Điểm TB: {$val['Điểm TB']}<br/>";
        echo "----------------------<br/>";
    }
}
*/
// sắp xếp học lực của học sinh trong mảng vừa tạo ra;
// dưới 5 là yếu, 5 đến 6.5 là trung bình, 6.5 đến 7.9 là khá, trên 7.9 là giỏi

$gioi = [];
$kha = [];
$trungbinh = [];
$yeu = [];
foreach ($list as $key => $val) {
    foreach ($val as $val) {
        $average = $val['Điểm TB'];
        if ($average > 10 || $average < 0) {
            echo 'điểm không hợp lệ';
        } else {
            if ($average < 5) {
                $yeu[] = $val;
            } elseif ($average >= 5 && $average < 6.5) {
                $trungbinh[] = $val;
            } elseif ($average < 7.9 && $average >= 6.5) {
                $kha[] = $val;
            } else {
                $gioi[] = $val;
            }
        }
    }
}
echo 'Học sinh giỏi là: ';
foreach ($gioi as $val) {
    echo "{$val['Name']}- ";
}
echo '<br/>';

echo 'Học sinh khá là: ';
foreach ($kha as $val) {
    echo "{$val['Name']}- ";
}
echo '<br/>';

echo 'Học sinh trung bình là: ';
foreach ($trungbinh as $val) {
    echo "{$val['Name']}- ";
}
echo '<br/>';

echo 'Học sinh yếu là: ';
foreach ($yeu as $val) {
    echo "{$val['Name']}- ";
}
echo '<br/>';
