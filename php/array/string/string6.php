<?php
// xóa một phần của chuỗi bắt đầu từ đầu chuỗi
$chuoibandau = 'trường trung học phổ thông số 2 Bố Trạch';
for ($i = 0; $i < mb_strlen($chuoibandau); $i++) {
    echo mb_substr($chuoibandau, $i, 1);
}
echo '<br/>';
// bản chất của chuỗi trong PHP là một mảng ký tự

// lấy user name từ email

$strInput = 'hoangminhthanh867@gmail.com';
echo strstr($strInput, '@', true);
echo '<br/>';

// viết hàm đảo ngược chuỗi

function ham_dao_nguoc_chuoi($string)
{
    return strrev($string); // không hỗ trợ tiếng việt
}
echo ham_dao_nguoc_chuoi(987654321);
echo '<br/>';
echo ham_dao_nguoc_chuoi('9876543210');

$string = 'Hoang Minh Thanh';
$stringOutput = [];

for ($i = strlen($string) - 1; $i >= 0; $i--) {
    $strOutput = $string[$i];
    echo substr($strOutput, 0, 1);
}
