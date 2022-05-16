<?php

// bài tập: tìm phần tử thiếu 
/* 
   Bạn Nam đang sắp xếp 2 danh sách A và B giống hệt nhau thành những thứ tự cụ thể. 
   Thật không may là một số đã bị loại khỏi danh sach A.
   tìm các số còn thiếu từ A mak không làm rối thứ tự
*/
// duyệt tất cả các phàn tử của cả 2 mảng, cái nào giống nhau thì xóa

$a = [23, 24, 25, 26, 27, 28, 29, 30];
$b = [23, 24, 24, 24, 25, 25, 26, 27, 28, 29, 29, 30, 32];

$temp = $b;

for ($i = 0; $i < count($a); $i++) {
    for ($j = 0; $j < count($b); $j++) {
        if ($a[$i] == $b[$j]) {
            unset($temp[$j]);
            break;
        }
    }
}
echo "số còn thiếu là: ";
foreach ($temp as  $value) {
    echo "$value; ";
}
