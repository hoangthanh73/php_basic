<?php
// kiểm tra số nguyên tố

$number = 6;
$check = true;

if ($number < 2) {
    echo "$number không phải là số nguyên tố";
} elseif ($number == 2) {
    echo "$number là số nguyên tố";
} else {
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $check = false;
            break;
        }
    }
    if ($check == true) {
        echo "$number là số nguyên tố";
    } else {
        echo "$number không phải là số nguyên tố";
    }
}