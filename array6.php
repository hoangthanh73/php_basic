<?php

// tìm giá trị trung bình mảng và hiện thị 5 giá trị lớn nhất, nhỏ nhất của mảng

for ($i = 0; $i <= 30; $i++) {
    $number[] = $i;
}

function tinh_trung_binh($number)
{
    $sum = 0;
    for ($j = 0; $j < count($number); $j++) {
        $sum += $number[$j];
    }
    $average = $sum / count($number);
    return "trung bình là: $average";
}

function ham_hien_thi_lon_nhat_nho_nhat($number)
{
    $min = $number[0];
    for ($i = 0; $i < count($number) - 1; $i++) {
        if ($i < $min) {
            $temp = $min;
            $min = $number[$i];
            $number[$i] = $temp;
        }
    }
    $numbermin = [];
    $numbermax = [];
    for ($min = 0; $min < 5; $min++) {
        $numbermin[] = $number[$min];
    }
    for ($max = count($number) - 1; $max > count($number) - 6; $max--) {
        $numbermax[] = $number[$max];
    }
    echo '5 giá trị nhỏ nhất là:';
    print_r($numbermin);
    echo '<br/>';
    echo '5 giá trị lớn nhất là:';
    print_r($numbermax);
    return;
}

echo tinh_trung_binh($number);
echo '<br/>';
echo ham_hien_thi_lon_nhat_nho_nhat($number);
