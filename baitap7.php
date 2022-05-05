<?php
// tìm các số 4 chữ số lớn hơn n chia hết cho 7

$n = 1000;
$result = [];

if ($n < 1000 || $n > 9999) {
    echo 'giá trị không thỏa mãn điều kiện';
} else {
    for ($i = 1000; $i < 10000; $i++) {
        if ($i % 7 == 0) {
            $result[] = $i;
        }
    }
    print_r($result);
}
