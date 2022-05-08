<?php

// Tìm ước chung lớn nhất của 2 số a và b

$a = 1;
$b = 30;
$uocchung = null;

// Giải thuật: dùng vòng lặp chạy từ giá trị biến nhỏ về 1: tìm giá trị mak cả 2 số đều chia hết
/*
if ($a == 0 || $b == 0) {
    echo 'ước chung lớn nhất là: ' . $a + $b;
} else {
    if ($a > $b) {
        $max = $a;
        $min = $b;
    } else {
        $max = $b;
        $min = $a;
    }
    for ($i = $min; $i >= 1; $i--) {
        if ($max % $i == 0 && $min % $i == 0) {
            $uocchung = $i;
            break;
        }
    }
    echo $uocchung;
}
*/

// Cách 2: lấy số lớn trù số nhỏ đến khi 2 số bằng nhau thì số đó là ước chung lớn nhất
/*
if ($a == 0 || $b == 0) {
    echo 'ước chung lớn nhất là: ' . ($a + $b);
} else {
    if ($a > $b) {
        $a = $a - $b;
    } else {
        $b = $b - $a;
    }
    if ($a == $b) {
        echo 'ước chung lớn nhất là: ' . $a;
    }
}
*/

// Cách 3: dùng giải thuật Euclid 
/* nếu a, b mod n đồng dư k
   thì |a - b| mod n bằng 0
*/

