<?php


$n = [2, 54, 8, 34, -55, 75, -43, 75, 324, 26];

// Tính tổng mảng

function tinh_tong($n)
{
    $sum = null;
    foreach ($n as $val) {
        $sum += $val;
    }
    return $sum;
}
echo tinh_tong($n);
echo '<br/>';

// tính trung bình

function tinh_trung_binh($n)
{
    return   tinh_tong($n) / count($n);
}

echo tinh_trung_binh($n);

// tìm các giá trị lớn hơn giá trị trung bình

$giatrilonhontrungbinh = null;
foreach ($n as $val){
    if($val > tinh_trung_binh($n)){
        $giatrilonhontrungbinh .='; '. $val;
    }
}echo $giatrilonhontrungbinh;
