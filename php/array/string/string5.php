<?php
//kiểm tra một chuỗi có chứa một chuỗi nào đó hay không
// dùng hàm strpos()
$str1 = 'toi ten la: Hoang Minh Thanh';
$text = 'Thanhf';
if (strpos($str1, $text) !== false) {
    echo 'chuỗi đã cho có chứa: ' . $text;
} else {
    echo 'chuỗi đã cho không chứa: ' . $text;
}
echo '<br/>';
//chuyển đổi tất cả các chữ cái trong chuỗi thành chữ thường 
print (strtolower("BAI TAP PHP CO BAN VA NANG CAO.")) . "<br>";
//chuyển đổi chữ cái đầu tiên của chuỗi thành chữ hoa 
print (ucfirst("bai tap php co ban va nang cao.")) . "<br>";
//chuyển đổi chữ cái đầu tiên của tất cả các từ trong chuỗi thành chữ hoa
print (ucwords("bai tap php co ban va nang cao.")) . "<br>";

echo strtoupper($str1) . '<br/>';
echo strtolower($str1) . '<br/>';
echo ucfirst($str1) . '<br/>';
echo ucwords($str1) . '<br/>';

// chia một chuỗi
$str2 = 103225;
print_r(substr(chunk_split($str2, 2, ':'), 0, -1));
echo '<br/>';

$temp = (string)$str2;
var_dump($temp);
echo "<br/>";
echo $temp === $str2 ? 'chúng giống nhau' : 'chúng khác nhau';
echo '<br/>';

//  lấy username từ địa chỉ email đã cho
$email = 'hoangminhthanh867@gmail.com';
$user = strstr($email, '@', false);
echo $user;
echo '<br/>';

// lấy 3 ký tự cuối của một chuỗi 

echo substr($email, -3);
echo '<br/>';

// thay thế từ đâu tiên của chuỗi bằng từ khác

$str = 'bai tap PHP co ban va nang cao';
echo preg_replace('/bai/', 'thuc', $str);
echo '<br/>';

$str1 = '<h1>welcome to Quang Binh</h1>';
echo preg_replace('/(<h1>)|(<\/h1>)/', '', $str1);
echo $str1;
echo preg_replace('/(<\/?h1>)/', '', $str1);
echo '<br/>';

$tuoi = 1.0;
if ($tuoi >= 10) {
    echo 'bạn đủ tuổi';
} else {
    echo 'bạn không đủ tuổi';
}
echo '<br/>';

echo $tuoi >= 10 ? 'bạn đủ tuổi' : 'bạn không đủ tuổi';
echo '<br/>';

//xóa một phần của chuỗi bắt đầu từ đầu chuỗi

$chuoiBanDau = 'hello! every body';
$chuoiCanXoa = 'hello! ';
$soKyTuCanXoa = strlen($chuoiCanXoa);
echo substr($chuoiBanDau, $soKyTuCanXoa);
echo '<br/>';

// Chèn một chuỗi vào một vị trí bất kì trong chuỗi khác

$chuoiBanDau = 'hoc lap trinh PHP';
$chuoiCanChen = 'tu';
$vitribatdauchen = 0;
$sokitucanxoa = 0; //(số dương là số ký tự bị xóa tính tù đầu chuỗi)
//(số âm là số ký tự còn lại tính từ cuối chuỗi)
$chuoiMoi = substr_replace($chuoiBanDau, $chuoiCanChen . ' ', $vitribatdauchen, $sokitucanxoa);
echo $chuoiMoi;
echo '<br/>';

// lấy từ đầu tiên của một trong một câu

$chuoibandau = 'lay tu dau tien trong mot cau';
$chuoiconlai = 'lay';
$ar = explode(' ', trim($chuoibandau)); // tách chuỗi ban đàu ra nhiều mảng 
echo $ar[0]; //in ra phần tử mảng đầu tiên