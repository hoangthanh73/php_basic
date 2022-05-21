<?php

// Tìm kiếm tuyến tính
// là thuật toán tìm kiếm một phần tử cho trước nằm trong danh sách bằng cách duyệt lần lượt đến khi tìm thấy phần tử đó
// cho mảng n, tìm xem có số nào chia hết cho 5 không
$n = [50, 2, 3, 1, 6, 7, 4, 3, 51, 456, 342353, 454, 564];


foreach ($n as $check) {
    if ($check % 5 == 0) {
        echo "có phần tử chia hết cho 5";
        break;
    }
}
echo '<br/>';

for ($i = 0; $i < count($n); $i++) {
    if ($n[$i] % 5 == 0) {
        echo 'có phần tử chia hết cho 5';
        break;
    }
}
echo '<br/>';

// sắp xếp tăng dần mảng n

for ($i = 0; $i < count($n) - 1; $i++) {
    for ($j = $i + 1; $j < count($n); $j++) {
        if ($n[$i] > $n[$j]) {
            $emp = $n[$j];
            $n[$j] = $n[$i];
            $n[$i] = $emp;
        }
    }
}

foreach ($n as $key => $value) {
    $key = $key + 1;
    echo "$key => $value <br/>";
}

