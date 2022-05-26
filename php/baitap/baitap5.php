<?php
// tính tổng phân số đến 1/n
// đặt điều kiện n > 0;

function tinh_tong_phan_so($n)
{
    $tong = 0;
    for ($i = 1; $i <= $n; $i++) {
        $tong += 1 / $i;
    }
    return $tong;
}

if ($n < 0) {
    "'n' phải lớn hơn 0";
} else {
    echo tinh_tong_phan_so(0);
}
