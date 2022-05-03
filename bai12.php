<?php
//in kết quả số chẵn số lẻ trong dãy số number
$startNumber = 4;
$endNumber = 6;
$check = true;
// Đặt biến để lưu số chẵn số lẻ 
$numberEven = null;
$numberOdd = null;
// Đặt biến đếm số chẵn số lẻ
$countEven = 0;
$countOdd = 0;

for ($i = $startNumber; $i <= $endNumber; $i ++)
{
    if ($i % 2 == 0){
        $numberEven .= $i.' ';$countEven ++;
    }else{
        $numberOdd .= $i.' ';$countOdd ++;
    }
}
echo 'Dãy số từ '.$startNumber.' đến '.$endNumber.' có '.$countEven.' số chẵn: '.$numberEven.'<br/>';
echo 'Dãy số từ '.$startNumber.' đến '.$endNumber.' có '.$countOdd.' số lẻ: '.$numberOdd;