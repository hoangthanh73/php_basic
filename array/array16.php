<?php

//sắp xếp thủ công mảng số nguyên

$number = [3, 4, 5, 75, 2, 6, 67];

// Sắp xếp mảng tăng dần;


for ($i = 0; $i < count($number) - 1; $i++) {
    for ($j = $i + 1; $j < count($number); $j++) {
        if ($number[$i] > $number[$j]) {
            $emp = $number[$j];
            $number[$j] = $number[$i];
            $number[$i] = $emp;
        }
    }
}
foreach ($number as $value) {
    echo "$value <br/>";
}

// Sắp xếp mảng giảm dần

for ($i = 0; $i < count($number) - 1; $i++) {
    for ($j = $i + 1; $j < count($number); $j++) {
        if ($number[$i] < $number[$j]) {
            $emp = $number[$j];
            $number[$j] = $number[$i];
            $number[$i] = $emp;
        }
    }
}
for ($n = 0; $n < count($number); $n++) {
    echo "{$number[$n]}";
    echo '<br/>';
}
