<?php
// giải phương trình bậc 2

function giai_phuong_trinh_bac_2($a, $b, $c)
{
    if ($a == 0) {
        if ($b != 0) {
            echo "phương trình có 1 nghiệm là: x = " . -$c / $b;
        } else {
            echo "phương trình vô nghiệm";
        }
        return;
    } else {
        $delta = $b ** -4 * $a * $c;
        if ($delta < 0) {
            echo 'Phương trình vô nghiệm.';
        } elseif ($delta == 0) {
            echo 'Phương trình có nghiệm kép: x1 = x2 = ' . -$b / (2 * $a);
        } else {
            echo 'phương trình có 2 nghiệm: x1 = ' . (-$b - sqrt($delta) / (2 * $a));
            echo '<br/>';
            echo 'x2 = '.(-$b + sqrt($delta) / (2 * $a));
        }
        return;
    }
}

echo giai_phuong_trinh_bac_2(2, 6, 4);