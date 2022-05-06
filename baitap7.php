<?php
// tìm các số 2 chữ số lớn hơn n chia hết cho 7

$n = 10;
$result = [];

if ($n < 10 || $n > 99) {
    echo 'giá trị không thỏa mãn điều kiện';
} else {
    for ($i = 10; $i < 100; $i++) {
        if ($i % 7 == 0) {
            $result[] = $i;
        }
    }
    print_r($result);
}
