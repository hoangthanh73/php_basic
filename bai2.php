<?php
// tìm ước chung lớn nhất và bội chung nhỏ nhất của 2 số a, b
/* cách 1: nếu 1 trong 2 số bằng 0 => return ucln = a + b
           nếu != 0 thì sử dụng vòng lặp chạy từ giá trị biến nhỏ hơn về 1;
               => nếu cả a và b đều chia hết cho giá trị đó thì return kq, dừng vòng lặp
   cách 2: dùng toán tử '-': lấy số lớn - số nhỏ, 
                            đến khi nào mà phần dư và số còn lại bằng nhau thì phần dư còn lại đó là ước chung lớn nhất
   cách 3: dùng giải thuật euclid
*/
function Boi_chung_nho_nhat($a, $b)
{
    return ($a * $b);
}

function Uoc_chung_lon_nhat($a, $b)
{
    if ($a == 0) {
        return $b;
    }
    return Uoc_chung_lon_nhat($b % $a, $a);
}

$a = 10;
$b = 15;

echo "ước chung lớn nhất là: ";
echo Uoc_chung_lon_nhat($a, $b);
echo '<br/>';

echo "bội chung nhỏ nhất là: ";
echo Boi_chung_nho_nhat($a, $b);
