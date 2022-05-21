<?php

// tìm số nguyên chẵn lớn nhất

$n = [1, 2, 3, 4, 5, -1, -2, -3, -4, -5];
sort($n);
for ($i = count($n) - 1; $i >= 0; $i--) {
    if ($n[$i] % 2 == 0) {
        echo "số nguyên chẵn lớn nhất là: $n[$i]";
        break;
    }
}
echo '<br/>';
// tìm số nguyên lẻ nhỏ nhất trong mảng
for ($i = 0; $i < count($n); $i++) {
    if ($n[$i] % 2 != 0) {
        echo "số nguyên lẻ nhỏ nhất là: $n[$i]";
        break;
    }
}

// tạo mảng số thực gồm n phần tử trong PHP
$start = -10;
$end = 10;
$n = [];
for ($i = $start; $i <= $end; $i = $i + 0.25) {
    (float)$i;
    $n[] = $i;
}
var_dump($n);
