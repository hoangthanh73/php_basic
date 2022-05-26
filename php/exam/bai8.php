<?php
for ($a = 1; $a <= 5; $a++) {
    for ($b = 1; $b < $a; $b++) {
        if ($b < $a) {
            echo '*';
        }
    }
    echo '<br/>';
}
for ($a = 1; $a <= 5; $a++) {
    for ($b = 5; $b >= 1; $b--) {
        if ($b >= $a) {
            echo '*';
        }
    }
    echo '<br/>';
}
// liệt kê số chẵn và số lẻ trong dãy số tự nhiên
$number = 100;

$resaultEven = null;
$resaultOdd = null;

$countEven = 0;
$countOdd = 0;

for ($i = 0; $i <= $number; $i++) {
    if ($i % 2 == 0) {
        $resaultEven .= $i . ' ';
        $countEven++;
    } else {
        $resaultOdd .= $i . ' ';
        $countOdd++;
    }
}
echo 'Tìm thấy ' . $countEven . ' số chẵn: ' . $resaultEven . '<br/>';
echo 'Tìm thấy ' . $countOdd . ' số lẻ: ' . $resaultOdd;
echo '<br/>';
//tính giai thừa của tập hợp N 
$index = 5;
$factorial = 1;
for ($n = $index; $n >= 1; $n--) {
    $factorial *= $n;
}
echo 'giai thừa của ' . $index . ' bằng: ' . $factorial;
