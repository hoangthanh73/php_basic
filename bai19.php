<?php

// Viết chương trình tinhd tổng số nguyên chẵn từ 1 đến n

$n = 100;
$numberEven = [];
$sum = null;
for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 0) {
        $numberEven[] = $i;
    }
}
echo 'Số chẵn là: ';
foreach ($numberEven as $key => $val) {
    if ($n - $val <= 1) {
        echo $val;
    } else {
        echo $val . '; ';
    }
    $sum += $val;
}
echo '<br/>';
echo "Tổng là: $sum";
