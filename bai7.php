<?php
//kiểm tra hôm nay là thứ mấy
$th = 'gfu';
switch ($th) {
    case 2:
        echo 'hôm nay là thứ 2';
        break;
    case 3:
        echo 'hôm nay là thứ 3';
        break;
    case 4:
        echo 'hôm nay là thứ 4';
        break;
    case 5:
        echo 'hôm nay là thứ 5';
        break;
    case 6:
        echo 'hôm nay là thứ 6';
        break;
    case 7:
        echo 'hôm nay là thứ 7';
        break;
    default:
        echo 'hôm nay là chủ nhật'  
}
echo '<hr/>';
//kiểm tra tháng có mấy ngày
$month = 2;
$year = 1995;
$ktra = $year % 17;
switch ($month) {
    case 2:
        if ($ktra == 0 || $ktra == 3 || $ktra == 6 || $ktra == 9 || $ktra == 11 || $ktra == 14 || $ktra == 17) {
            echo "tháng $month năm $year có 29 ngày";
        } else {
            echo "tháng $month năm $year có 28 ngày";
        }
        break;

    case 4:
    case 6:
    case 9:
    case 11:
        echo "tháng $month năm $year có 30 ngày";
        break;
    default:
        echo "tháng $month năm $year có 31 ngày";
}

function test() {
return 'hello';
}
