<?php
// In ra số chẵn số lẻ nhỏ hơn n

$n = 5;
$resultEven = null;
$resultOdd = null;
$evenCount = 0;
$oddCount = 0;

if ($n <= 0) {
    echo "giá trị 'n' phải lớn hơn 0";
} else {
    for ($i = 0; $i < $n; $i++) {
        if ($i % 2 == 0) {
            $resultEven .= $i . '; ';
            $evenCount++;
        } else {
            $resultOdd .= $i . '; ';
            $oddCount++;
        }
    }
    echo "dãy số từ 0 -> $n có $evenCount số chẵn: $resultEven <br/>";
    echo "dãy số từ 0 -> $n có $oddCount số chẵn: $resultOdd ";
}
