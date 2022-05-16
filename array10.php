<?php

// tìm các số chính phương trong mảng
// số chính phương là một số tự nhiên có căn bậc 2 cũng là một số tự nhiên

$n = [];
for ($i = -200; $i <= 500; $i++) {
    $n[] = $i; // tạo một mảng số nguyên;
}
function ham_tim_so_chinh_phuong($n)
{
    $sochinhphuong = [];
    foreach ($n as $val) {
        if ($val >= 0) {
            $check = sqrt($val);
            if ($check - (int)$check == 0) {
                $sochinhphuong[] = $val; // tìm các giá trị là số chính phương
            }
        }
    }
    echo 'số chính phương là: ';
    foreach ($sochinhphuong as $stt => $giatri) {
        if ($stt == count($sochinhphuong) - 1) {
            echo $giatri;
        } else {
            echo "$giatri; "; // hiện thị ra màn hình
        }
    }
    return;
}
echo ham_tim_so_chinh_phuong($n);
