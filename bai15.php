<?php
// tính giai thừa của một số cho trước bằng đệ quy

function ham_tinh_giai_thua($n)
{
    if ($n > 0)
        return $n * ham_tinh_giai_thua($n - 1);
    elseif ($n < 0)
        return 'không có giai thừa của số âm';
    return 1;
}

echo ham_tinh_giai_thua(4);
