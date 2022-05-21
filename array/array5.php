<?php

// kiểm tra mảng số nguyên từ 1 đến 1000 xem có số nào chia hết cho 333 không

// dùng vòng lặp tạo mảng số nguyên

for ($i = 1; $i <= 1000; $i++) {
    $songuyen[] = $i;
}
// kiểm tra từ 1 đến 1000 xem có số nào chia hết cho 333 không
// nếu có => kết luận có tồn tại
// nếu không => kết luận không

$check = false;
foreach ($songuyen as $val) {
    if ($val % 333 == 0) {
        $check = true;
        break;
    }
}
if ($check == true) {
    echo "có tồn tại số chia hết cho 333";
} else {
    echo "không tồn tại số chia hết cho 333";
}
