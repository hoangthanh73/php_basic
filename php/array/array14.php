<?php

// Kỹ thuật đặt lính canh để tìm giá trị lớn nhất nhỏ nhất trong PHP

// Tìm max;

function tim_gia_tri_max($a, $b, $c)
{

    $max = $a;
    if ($b > $max) {
        $max = $b;
    }
    if ($max < $c) {
        $max = $c;
    }
    echo "max là: $max";
}
echo tim_gia_tri_max(31, 7, 111);
echo '<br/>';

// tìm số nguyên tố lớn nhất  trong dãy số nguyên từ 1 đến 100;

$n = [];
for ($i = 1; $i < 101; $i++) {
    $n[] = $i;
}

foreach ($n as $k => $v) {
    $check = true;
    if ($v < 2) {
        continue;
    } else {
        for ($i = 2; $i <= $v / 2; $i++) {
            if ($v % $i == 0) {
                $check = false;
            }
        }
    }
    if ($check == true) {
        $snt[] = $v;
    }
}
echo "các số nguyên tố là: ";
foreach ($snt as $value) {
    echo "$value; ";
}
echo '<br/>';

// tìm số nguyên tố lớn nhất

$sntmax = 2;
for ($i = 0; $i < count($snt); $i++) {
    if ($snt[$i] > $sntmax) {
        $sntmax = $snt[$i];
    }
}
echo "số nguyên tố lớn nhất là: $sntmax";
