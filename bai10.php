<?php
//mảng trong php

//khai báo mảng
$color = array(
    'xanh lá cây' => 'green',
    'xanh dương' => 'blue',
    'màu đen' => 'black',
    'màu đỏ' => 'red',
    'màu trắng' => 'white'
);

//kiểm tra $color có phải kiểu mảng không
echo is_array($color);
echo '<br/>';
var_dump($color);
echo '<br/>';

//đếm số phần tử của mảng
echo count($color);
echo '<br/>';

// xuất phần tử thứ [] của mảng
print_r($color['xanh lá cây']);
echo '<br/>';
echo $color['xanh lá cây'];
echo '<br/>';

//hàm asort
asort($color);
print_r($color);
echo '<br/>';

// vòng lặp foreach để xuất tất cả phần tử của mảng
foreach($color AS $mausac => $ketqua){
    echo $mausac.' => '.$ketqua;
    echo '<br/>';
}
foreach($color as $ketqua){
    echo $ketqua.'<br/>';
}

// hàm sắp xếp các phần tử trong một mảng sort và ksort
//sort($color);
//echo print_r($color);
//echo '<br/>';
ksort($color);
echo print_r($color);