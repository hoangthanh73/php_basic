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
echo '<br/>';

// cách 2: tạo một mảng rỗng, gán các giá trị vào mảng,
           // dùng hàm sort() để sắp xếp giá trị của mảng tăng dần => 
           // in ra giá trị thứ n- 1 của mảng

$sapxep = array($a, $b, $c, $d);
sort($sapxep);
print_r ($sapxep[count($sapxep)-1]);