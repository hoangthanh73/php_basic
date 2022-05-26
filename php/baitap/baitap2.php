<?php
// tính số ngày các tháng trong năm
/* tháng 1, 3, 5, 7, 8, 10, 12 có 31 ngày
   tháng 4, 6, 9, 11 có 30 ngày
   tháng 2 năm nhuận có 29 ngày, còn lại 28 ngày
   năm nhuận là năm chia hết cho 4, riêng với những năm tròn thế kỷ thì chia hết cho 400
*/



function ham_tinh_so_ngay_cac_thang_trong_nam($month, $year)
{
    switch ($month) {
        case 4:
        case 6:
        case 9:
        case 11:
            return "30 ngày";
        case 2:
            if ($year % 100 != 0) {
                if ($year % 4 == 0) {
                    return "29 ngày";
                } {
                    return "28 ngày";
                }
            } else {
                if ($year % 400 == 0) {
                    return "29 ngày";
                } {
                    return "28 ngày";
                }
            }
        default:
            return "31 ngày";
    }
}

$check = array(
    'month' => 2,
    'year' => 2013
);

echo "tháng $check[month] của năm $check[year] có: ";
echo ham_tinh_so_ngay_cac_thang_trong_nam($check['month'], $check['year']);
