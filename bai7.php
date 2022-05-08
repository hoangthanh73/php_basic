<?php
//kiểm tra hôm nay là thứ mấy


function hom_nay_la_thu_may($th)
{
    switch ($th) {
        case 2:
            return 'hôm nay là thứ 2';
        case 3:
            return 'hôm nay là thứ 3';
        case 4:
            return 'hôm nay là thứ 4';
        case 5:
            return 'hôm nay là thứ 5';
        case 6:
            return 'hôm nay là thứ 6';
        case 7:
            return 'hôm nay là thứ 7';
        case 1:
            return 'hôm nay là chủ nhật';
        default:
            return 'số nhập phải nằm trong khoảng từ 1 đến 7';
    }
}
echo hom_nay_la_thu_may(1);