<?php
//tính tổng bình phương các số từ 1 đến n

function tong_binh_phuong($n)
{
    $sum_square = null;
    for ($i = 0; $i <= count($n) - 1; $i++) {
        $sum_square += ($n[$i] * $n[$i]);
    }
    return $sum_square;
}
$n = [];
for ($i = 1; $i <= 5; $i++) {
    $n[] = $i;
}
echo tong_binh_phuong($n);
echo '<br/>';


// nhập ngày, tháng, năm. viết chương trình tính ngày tiếp theo của ngày vừa nhập
/* những ngày cuối tháng thì ngày tiếp theo là ngày đầu tiên của tháng sau
   ngày cuối năm thì ngày tiếp theo là ngày đầu tiên của năm sau
   những ngày còn lại thì ngày tiếp theo sẽ tăng lên 1 ngày
   + tính số ngày của từng tháng
*/

function tinh_nam_nhuan($year)
{
    $check = false;
    if (($year % 100 == 0 && $year % 400 == 0) || ($year % 100 != 0 && $year % 4 == 0)) {
        return $check = true;
    }
}
if (tinh_nam_nhuan(1996) == true) {
    echo "Năm nhuận";
} else {
    echo "không phải Năm Nhuận";
}
echo '<br/>';

function ngay_tiep_theo($day, $month, $year)
{
    $day = (int)$day;
    $month = (int)$month;
    $year = (int)$year;
    if ($month > 12 | $month < 1) {
        echo "Tháng phải từ 1 đến 12<br/>";
    } elseif ($month == 12) {
        if ($day > 31 || $day < 1) {
            return "Ngày không hợp lệ";
        } else {
            if ($day == 31) {
                $day = 1;
                $month = 1;
                $year = $year + 1;
                return "Ngày: $day<br/>Tháng: $month<br/>Năm: $year";
            } else {
                $day = $day + 1;
                return "Ngày: $day<br/>Tháng: $month<br/>Năm: $year";
            }
        }
    } elseif ($month == 2) {
        if (tinh_nam_nhuan($year)) {
            if ($day > 29 || $day < 1) {
                return "Ngày không hợp lệ";
            } elseif ($day == 29) {
                $day = 1;
                $month = $month + 1;
                return "Ngày: $day<br/>Tháng: $month<br/>Năm: $year";
            } else {
                $day = $day + 1;
                return "Ngày: $day<br/>Tháng: $month<br/>Năm: $year";
            }
        } else {
            if ($day > 28 || $day < 1) {
                return "Ngày không hợp lệ";
            } elseif ($day == 28) {
                $day = 1;
                $month = $month + 1;
                return "Ngày: $day<br/>Tháng: $month<br/>Năm: $year";
            } else {
                $day = $day + 1;
                return "Ngày: $day<br/>Tháng: $month<br/>Năm: $year";
            }
        }
    } elseif ($month == 4 || $month == 6 || $month == 9 || $month == 11) {
        if ($day > 30 || $day < 1) {
            return "Ngày không hợp lệ";
        } elseif ($day == 31) {
            $day = 1;
            $month = $month + 1;
            return "Ngày: $day<br/>Tháng: $month<br/>Năm: $year";
        } else {
            $day = $day + 1;
            return "Ngày: $day<br/>Tháng: $month<br/>Năm: $year";
        }
    } else {
        if ($day < 1 || $day > 31) {
            return "Ngày không hợp lệ";
        } elseif ($day == 31) {
            $day = 1;
            $month = $month + 1;
            return "Ngày: $day<br/>Tháng: $month<br/>Năm: $year";
        } else {
            $day = $day + 1;
            return "Ngày: $day<br/>Tháng: $month<br/>Năm: $year";
        }
    }
}

echo ngay_tiep_theo(29, 2, 1995);
