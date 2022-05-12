<?php
// Viết hàm kiểm tra chuỗi có phải chữ thường không

function ham_kiem_tra_chu_thuong($string)
{
    for ($i = 0; $i < mb_strlen($string); $i++) {
        if (ord($string[$i]) >= ord('A') && ord($string[$i]) <= ord('Z')) {
            return false;
        }
        return true;
    }
}
if (ham_kiem_tra_chu_thuong('hoÀng minh thÀnh')) {
    echo 'chữ thường';
} else {
    echo 'có chữ Hoa';
}
// không hỗ trợ tiếng Việt có dấu