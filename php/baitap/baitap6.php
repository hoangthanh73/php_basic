<?php
// liệt kê ước số của một số cho trước

$number = 9;
$result = null;

if ($number <= 0) {
    echo 'không thỏa mãn điều kiện';
} else {
    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $result .= $i . '; ';
        }
    }
    echo "số $number có các ước dương là: $result" . " $number";
    echo '<br />';
}
