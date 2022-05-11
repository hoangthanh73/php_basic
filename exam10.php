<?php

$listnumber = array(24, 665, 4, 43, 47, 45, 657);
$total = count($listnumber);

for ($i = 0; $i < $total - 1; $i++) {
    $min = $i;
    for ($j = $i + 1; $j < $total; $j++) {
        if ($listnumber[$j] < $listnumber[$min]) {
            $min = $j;
        }
    }
    $temp = $listnumber[$i];
    $listnumber[$i] = $listnumber[$min];
    $listnumber[$min] = $temp;
}
print_r($listnumber);
