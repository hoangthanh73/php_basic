<?php
//vòng lặp while
//exam: tính tổng của dãy số Number
$number = 10;
$sumNumber = 0;

while ($number > 0){
    $sumNumber += $number; $number -= 3;//giảm 3 đơn vị sau mỗi lần lặp
}
echo $sumNumber;
echo '<br/>';
//vòng lặp do while
$i = 1;

do {
    echo $i; $i ++;
} while (
    $i < 1
);
echo '<br/>';
//vòng lặp while lồng nhau
$i = 1;
while ($i < 10)
{
    $j = $i;
    while ($j < 10)
    {
        echo $j; $j++;
    }
        echo '<br/>';
    $i++;
}