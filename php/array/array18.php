<?php

// Cho mảng n từ 1 đến 100, tìm vị trí số chia hết cho 7;

$n = [];
for ($i = 1; $i <= 100; $i++) {
    $n[] = $i;
}

function tim_so_chia_het_cho_7($n)
{
    echo 'số chia hết cho 7 là:<br/>';
    foreach ($n as $key => $value) {
        if ($value % 7 == 0) {
            echo $key . '=>' . $value;
            echo '<br/>';
        }
    }
}
tim_so_chia_het_cho_7($n);