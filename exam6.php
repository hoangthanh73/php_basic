<?php
// tìm số lớn nhất
$a = 23;
$b = 3;
$c = 4;
$d = 3;
if ($a > $b)
{
    $max1 = $a; //$min1 = $b;
}else{
    $max1 = $b; //$min1 = $a;
}
if ($c > $d)
{
    $max2 = $c; //$min2 = $d;
}else{
    $max2 = $d; //$min2 = $c;
}
if ($max1 > $max2)
{
    $max = $max1;
}else{ $max = $max2;}
echo $max;