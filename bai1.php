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
    if ($n % 2 == 0) return true;
}
if (ham_kiem_tra_so(-2)) {
    echo 'số chẵn. ahihi';
} else {
    echo 'số lẻ';
}
