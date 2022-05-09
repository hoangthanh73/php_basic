<?php
// Tìm giá trị lớn nhất của 3 số a, b, c

function tim_max($solieu)
{
    $max = $solieu[0];
    if ($max < $solieu[1]) {
        $max = $solieu[1];
    }
    if ($max < $solieu[2]) {
        $max = $solieu[2];
    }
    return "giá trị lớn nhất là: $max";
}

echo tim_max($solieu = array(242, 533, 543));
echo '<br/>';

function tim_min($solieu)
{
    $min = $solieu[0];
    if ($solieu[1] < $min) {
        $min = $solieu[1];
    }
    if ($solieu[2] < $min) {
        $min = $solieu[2];
    }
    return "giá trị min là: $min";
}
echo tim_min($solieu = array(234, 54, 56));
