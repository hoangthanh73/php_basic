<?php
// tính tổng phân số đến 1/n
// đặt điều kiện n > 0;

$n = 4;
$result = 0;

if ($n <= 0){
    echo 'n phải lớn hơn không';
}else{
    for ($i = 1; $i <= $n; $i ++){
        $result += 1/$i;
    }
    echo $result;
}