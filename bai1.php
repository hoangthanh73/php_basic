<?php
// kiểm tra số chẵn số lẻ 

/*function ham_kiem_tra_so($number)
{
    if ($number % 2 == 0) {
        return 'số chẵn';
    }
    return 'số lẻ';
}

echo ham_kiem_tra_so(-2);
*/

function ham_kiem_tra_so($n)
{
    return $n % 2 == 0;
}
if (ham_kiem_tra_so(-2)) {
    echo 'số chẵn';
} else {
    echo 'số lẻ';
}
