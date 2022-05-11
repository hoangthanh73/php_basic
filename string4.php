<?php
// các hàm xử lý chuỗi thường dùng trong PHP
$txt = ' my name is: Hoang Minh Thanh ';
$txt1 = 'hoc PHP';
$txt2 = 'hoc HTML';

echo strlen($txt);// độ dài chuỗi
echo '<br/>';

echo str_Word_count($txt);// đếm số lượng từ trong 1 chuỗi
echo '<br/>';

echo strrev($txt);// đảo ngược chuỗi => trả về chuỗi đảo ngược
echo '<br/>';

echo strpos($txt, 'Thanh');// tìm văn bản trong chuỗi => trả về vị trí của kí tự đầu tiên trong văn bản
echo '<br/>';

echo str_replace('my name is', 'toi ten la', $txt);// thay thế một đoạn văn bản cụ thể trong một chuỗi
echo '<br/>';

echo ucwords ($txt);// chuyển đổi chữ cái đầu tiên của mỗi từ sang IN HOA
echo '<br/>';

echo strtoupper($txt);// chuyển đổi tất cả các chữ cái trong chuỗi sang chữ in hoa
echo '<br/>';

echo strtolower ($txt);//chuyển đổi tất cả các chữ cái trong chuỗi sang chữ thường
echo '<br/>';

echo str_repeat($txt, 3);// lặp lại chuỗi 3 lần
echo '<br/>';

echo strcmp($txt1, $txt2); // so sánh 2 chuỗi txt1 và txt2
echo '<br/>';

echo substr($txt, 10, 2);// substr($tring, start, lenght)
echo '<br/>';

echo trim($txt, ' my name is: ');// xóa các ký tự được chọn
