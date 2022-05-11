<?php

// tìm phần tử nhỏ nhất

$mang = array(32, 54, 32, 65, 2, 34);
$sophantu = count($mang);

$min = 0;
for ($i = 1; $i < $sophantu; $i++) {
    if ($mang[$i] < $mang[$min]) {
        $min = $i;
    }
}
echo 'giá trị nhỏ nhất là: ' . $mang[$min];
echo '<br/>';

// Tìm phần tử lớn nhất

$max = 0;
for ($j = 1; $j < $sophantu; $j++) {
    if ($mang[$j] > $mang[$max]) {
        $max = $j;
    }
}
echo "giá trị lớn nhất là: " . $mang[$max];
