<?php
//Sắp xếp nổi bọt trong PHP

function sap_xep_noi_bot($n)
{
    for ($i = 0; $i < count($n) - 1; $i++) {
        for ($j = $i + 1; $j < count($n); $j++) {
            if ($n[$i] > $n[$j]) {
                $temp = $n[$j];
                $n[$j] = $n[$i];
                $n[$i] = $temp;
            }
        }
    }
    foreach ($n as $val) {
        echo "$val- ";
    }
}
$n = [];
for ($i = 100; $i > 50; $i--) {
    $n[] = $i;
}

echo 'thứ tự tăng dần của mảng là: ';
sap_xep_noi_bot($n);
