<?php

// viết chương trình lấy username của 1 email;

//cách 1: chia chuỗi thành mảng dc cách nhau bởi ký tự '@'
$strInput = 'hoangminhthanh867543@gmail.com';
$strOutput = explode('@', $strInput);
echo ($strOutput[0]);
echo '<br/>';
//cách 2: dùng hàm strstr() để lấy một phần của chuỗi tính từ vị trí chỉ định đến cuỗi chuỗi
$strOutput = strstr($strInput, '@', true); // false: hiên thị những ký tự sau ký tự được chọn
echo $strOutput;
echo '<br/>';
// chia chuỗi  151430 thành dạng 15:14:30
$number = 151430;
if (strlen($number) == 5) {
}
$number1 = chunk_split($number, 2, ':'); // dùng chunk_split chia mỗi 2 ký tự trong chuỗi bằng dấu :
$output = substr($number1, 0, -1); // dùng substr() để xóa ký tự : cuối chuỗi
echo $output;
echo '<br/>';

$number = 33421.2365;
$output = number_format($number, 4, '.', ',');
echo $output;
echo '<br/>';

// kiểm tra 1 chuỗi có chứa 1 chuỗi nào đó không
$str1 = 'hoang minh thanh';
$str2 = 'minh hoang';
var_dump(strpos($str1, $str2)); // hàm strpos sẽ hiện thị vị trí xuất hiện chuỗi tìm kiếm 

// chuyển đổi giá trị của một biến thành chuỗi(ép kiểu);
$number = 4365;
$str = (string)$number;
echo '<br/>';
/*
function ham_kiem_tra($number, $str)
{
    if ($number === $str) {
        return 'giống nhau';
    }
    return 'khác nhau';
}
echo ham_kiem_tra($number, $str);
*/

// lấy 3 ký tự cuôiz của một chuỗi;
$strex = 'quá trình tự học';
$sophantu = (mb_strlen($strex) - 3);
$output = mb_substr($strex, -3);
echo $output;
echo '<br/>';

//thay thế từ đầu tiên của chuỗi bằng từ cuối cùng của chuỗi

// bước 1: chuyển chuỗi thành mảng để tìm từ đầu tiên và thay thế trong mảng
// bước 2: dùng hàm str_replace để thay thế

$str1 = "hello! wellcome to Quang Binh";
$str2 = explode('! ', $str1);
$output = str_replace($str2[0], 'hi', $str1);
echo $output;