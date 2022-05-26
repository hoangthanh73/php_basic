<?php
// viết hàm tính giai thừa của 1 số 
$number = 3;
$factorial = 1;

if ($number < 0)
{
    echo "giai thừa của số âm không tồn tại";
}
elseif ($number == 0)
{
    echo "$number! = 1";
}
else
{
    for ($i = $number; $i > 1; $i --){
        $factorial *= $i;
    }
    echo "$number! = $factorial";
}
echo '<br/>';

$number1 = -2;
echo "$number1! = ".tinh_giai_thua($number1).'<br/>';

function tinh_giai_thua($n)
{
    if ($n < 0)
    {
        return 'giai thừa của số âm không tồn tại';    
    }    
    elseif ($n == 0)
    {
        return 1;
    }
    else 
    {
        return $n * tinh_giai_thua($n - 1);
    }
}

