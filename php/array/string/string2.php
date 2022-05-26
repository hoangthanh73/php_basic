<?php

// chuyển đổi các ký tự trong chuỗi sang in hoa hoặc chữ thường

$strInput = "Tôi tên là: Hoàng Minh Thành";

$strOutput = Ucwords($strInput); // chuyển ký tự đầu tiên của mỗi từ trong chuỗi sang chữ hoa
$strOutput = lcfirst($strInput); // chuyển ký tự đầu tiên trong chuỗi sang chữ thường
$strOutput = mb_strtoupper($strInput, 'UTF-8'); // chuyển các ký tự trong chuỗi sang chữ in hoa
$strOutput = mb_strtolower($strInput, 'UTF-8'); // chuyển các ký tự trong chuỗi sang chữ thường
$strOutput = Ucfirst($strInput); // chuyển đổi ký tự đầu tiên của chuỗi sang chữ in hoa

echo $strOutput;
echo '<br/>';

// chia một chuỗi
$strInput = ' hoang minh thanh ';
$strOutput = chunk_split($strInput, 2, '<br/>'); // chia nhỏ chuỗi (không hỗ trợ tiếng việt có dấu)

$strOutput = substr($strInput, 0, 5); // cắt chuỗi 

$strOutput = strlen($strInput); // hiện thị độ dài chuỗi

$strOutput = str_word_count($strInput); // đếm số từ trong chuỗi

$strOutput = rtrim($strInput,); // xóa dấu cách bên phải cuối cùng chuỗi

$strOutput = str_repeat($strInput, 2); // lặp lại chuỗi n lần

$strOutput = str_replace(' ', '_', $strInput);// tìm và thay thế 

$strOutput = md5($strInput);// chuyển một chuỗi sang chuổi mới theo dạng 32 bit

echo $strOutput;
echo '<br/>';

$strInput = 'Hãy thêm "hương vị" vào cuộc sống';

$strOutput = addslashes($strInput);// thêm dấu \ trước các ký tự (', ", /);
$strOutput = stripslashes($strInput); // xóa các dấu \ trong chuỗi

$strOutput = explode(' ', $strInput);// chuyển một chuỗi thành 1 mảng
$strOutput = implode(' ',$strOutput);
$strOutput = mb_strpos($strInput, 'thêm');// tìm văn bản trong chuỗi
print_r($strOutput);