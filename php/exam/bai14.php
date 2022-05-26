<?php
// Ví dụ về vòng lặp While
$i = 1;
while ($i < 1){
    echo 'I = '.$i.'<br/>'; $i++;
}
echo'<br/>';
// Ví dụ về vòng lặp do...while
$j = 1;
do{echo 'J = '.$j.'<br/>'; $j ++;}while($j < 1);
// tổng của dãy số nguyên từ 1 đến 20
$number = 4;
$sumNumber = 0;
for ($i = 1; $i <= $number; $i ++){
    $sumNumber += $i;
}echo $sumNumber;
echo '<br/>';
// tính giai thừa của 1 số nguyên bất kỳ;
$number = 1;
$factorial = 1;
if ($number < 0)
{
    echo "giai thừa của số $number không tồn tại";
}elseif ($number == 0)
{
    echo "$number! = 1";
}else{
    for ($n = $number; $n > 1; $n --){
        $factorial *= $n;
    }echo "$number! = $factorial";
}