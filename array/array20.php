<?php

// Sắp xếp chọn 

$n = [32, 5, 74, 4, 7, 46, 336, 6, 97, 0, 5674, 65];

// dùng phương pháp sắp xếp chọn để sắp xếp mảng theo giá trị giảm dần
/*
function sap_xep_chon_giam($n)
{
    for ($i = 0; $i < count($n) - 1; $i++) {
        $max = $i;
        for ($j = $i + 1; $j < count($n); $j++) {
            if ($n[$max] < $n[$j]) {
                $max = $j;
            }
        }
        $temp = $n[$i];
        $n[$i] = $n[$max];
        $n[$max] = $temp;
    }
    foreach ($n as $v) {
        echo $v;
        echo '<br/>';
    }
}

sap_xep_chon_giam($n);
*/

// Dùng thuật toán sắp xếp chon để sắp xếp mảng theo giá trị tăng dần

function sap_xep_chon_tang($n)
{
    for ($i = 0; $i < count($n) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($n); $j++) {
            if ($n[$min] > $n[$j]) {
                $min = $j;
            }
        }
        $temp = $n[$min];
        $n[$min] = $n[$i];
        $n[$i] = $temp;
    }
    foreach ($n as $v) {
        echo $v . '<br/>';
    }
}
sap_xep_chon_tang($n);