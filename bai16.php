<?php
/*function kiem_tra_so_chan($number)
{
    return ($number % 2 == 0);
}
$number1 = 253;
if (kiem_tra_so_chan($number1)) {
    echo 'số chẵn';
} else {
    echo 'số lẻ';
}
echo '<br/>';
*/
function ham_kiem_tra_so_chan($i)
{
    if ($i % 2 == 0) {
        return 'số chẵn';
    } else return 'số lẻ';
}
echo ham_kiem_tra_so_chan(8);