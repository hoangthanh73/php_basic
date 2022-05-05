<?php
// giải phương trình bậc 2
$a = 1;
$b = 1;
$c = 0;

if ($a == 0) {
    $x = -$c / $b;
    echo "phương trình có một nghiệm là: $x";
} else {
    $delta = ($b * $b) - 4 * $a * $c;
}
if ($delta < 0) {
    echo 'phương trình vô nghiệm';
} elseif ($delta == 0) {
    echo "phương trinhg có nghiệm kép: x1 = x2 = " - $b / (2 * $a);
} else {
    echo "phương trình có 2 nghiệm:<br/>" .
        'x1 = ' . (-$b - sqrt($delta)) / (2 * $a) . '<br/>' .
        'x2 = ' . (-$b + sqrt($delta)) / (2 * $a);
}
