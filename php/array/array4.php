<?php

// CHo một mảng gồm các phần tử từ 1 đến 100, tìm vị trí các số chia hết cho 3
$mang = [];

// gán giá trị từ 1 đến 100 vào mảng
for ($n = 1; $n <= 100; $n++) {
    $mang[] = $n;
}
// Viết hàm tìm các vị trí chia hết cho 3;

function chia_het_cho_3($mang)
{
    foreach ($mang as $key => $value) {
        if ($value % 3 == 0) {
            echo "$key => $value";
            echo '<br/>';
        }
    }
    return;
}

echo chia_het_cho_3($mang);