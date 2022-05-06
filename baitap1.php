<?php
// so sánh 2 số cho trước

/*
$a = -10;
$b = 2;

if ($a > $b) {
    echo "$a > $b";
} elseif ($a < $b) {
    echo "$a < $b";
} else {
    echo "$a = $b";
}
*/

function so_sanh_hai_so($a, $b)
{
    if ($a < $b){
        return "$a < $b";
    }elseif ($a > $b){
        return "$a > $b";
    }return "$a = $b";
}
echo so_sanh_hai_so(6, 7);
