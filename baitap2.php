<?php
// tính số ngày các tháng trong năm
/* tháng 1, 3, 5, 7, 8, 10, 12 có 31 ngày
   tháng 4, 6, 9, 11 có 30 ngày
   tháng 2 năm nhuận có 29 ngày còn lại 28 ngày
   năm nhuận là năm maf lấy số năm chia cho 19 có lượng dư là 0, 3, 6, 9, 11, 14, 17
*/
$month = 26;
$year = 2022;
$check = $year % 19;
if ($month > 12 || $month < 1) {
    echo 'giá trị của tháng không hợp lệ';
} else {
    switch ($month) {
        case 4:
        case 6:
        case 9:
        case 11:
            echo "tháng $month của $year có 30 ngày";
            break;
        case 2:
            if ($check == 0 || $check == 3 || $check == 6 || $check == 9 || $check == 11 || $check == 14 || $check == 17) {
                echo "tháng $month của $year có 29 ngày";
                break;
            } else {
                echo "tháng $month của $year có 28 ngày";
                break;
            }
        default:
            echo "tháng $month của năm $year có 31 ngày";
            break;
    }
}
