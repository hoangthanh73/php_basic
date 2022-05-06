<?php
// tìm số lớn nhất trong 4 số cho trước
// so sánh lần lượt 2 cặp số => lấy 2 số lớn nhất vừa tìm được so sánh với nhau 

$n1 = 10;
$n2 = 1;
$n3 = 10;
$n4 = -1;
/*
if ($n1 < $n2) {
    $max1 = $n2;
} else {
    $max1 = $n1;
}
if ($n3 < $n4) {
    $max2 = $n4;
} else {
    $max2 = $n3;
}
if ($max1 > $max2) {
    echo "số lớn nhất là $max1";
} else {
    echo "số lớn nhất là $max2";
}
*/

$number = array($n1, $n2, $n3, $n4);

sort($n);
echo "số lớn nhất trong 4 số là: ";
print_r ($n[3]);