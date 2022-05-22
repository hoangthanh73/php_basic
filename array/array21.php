<?php

// sắp xếp nổi bọt tăng

$n = [32, 5, 74, 4, 7, 46, 336, 6, 97, 0, 5674, 65];

for ($i = 0; $i < count($n) - 1; $i++) {
    for ($j = $i + 1; $j < count($n); $j++) {
        if ($n[$j] < $n[$i]) {
            $tmp = $n[$j];
            $n[$j] = $n[$i];
            $n[$i] = $tmp;
        }
    }
}
foreach ($n as $v) {
    echo "$v<br/>";
}

// sắp xếp nổi bọt giảm 

for ($i = 0; $i < count($n) - 1; $i++) {
    for ($j = $i + 1; $j < count($n); $j++) {
        if ($n[$i] < $n[$j]) {
            $temp = $n[$i];
            $n[$i] = $n[$j];
            $n[$j] = $temp;
        }
    }
}
for ($a = 0; $a < count($n); $a++) {
    echo $n[$a];
    echo '<br/>';
}
// tìm giá trị lớn nhất

$max = 0; 
for ($i = 1; $i < count($n); $i ++){
    if ($n[$i] > $n[$max]){
        $max = $i;
    }
}echo "max là: $n[$max]";