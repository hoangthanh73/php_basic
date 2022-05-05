<?php
// tìm số lớn nhất trong 4 số cho trước
// so sánh lần lượt 2 cặp số => lấy 2 số lớn nhất vừa tìm được so sánh với nhau 
$number1 = 10;
$number2 = 1;
$number3 = 10;
$number4 = -1;

if ($number1 < $number2) {
    $max1 = $number2;
} else {
    $max1 = $number1;
}
if ($number3 < $number4) {
    $max2 = $number4;
} else {
    $max2 = $number3;
}
if ($max1 > $max2) {
    echo "số lớn nhất là $max1";
} else {
    echo "số lớn nhất là $max2";
}
