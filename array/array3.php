<?php
// tìm kiếm tuyến tính
// cho mảng $a[] gồm n phần tử, tìm xem có số $b có trong mảng không

$a = array(24, 54, 47, 46, 36, 64, 2, 50, 25);
$b = 243;

function tim_gia_tri_trong_mang($a, $cantim)
{
    $check = false;
    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] == $cantim) {
            $check = true;
            return "$cantim có trong mảng tại vị trí $i";
        }
    }
    if ($check == false) return "$cantim không có trong mảng";
}

echo tim_gia_tri_trong_mang($a, 24);
