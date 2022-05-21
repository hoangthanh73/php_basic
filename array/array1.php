<?php

// Khai báo và tạo mảng đơn giản;

$color = array(
    'green',
    'blue',
    'red',
    'white',
    'black'
);
foreach ($color as $value => $c)
{
    echo $value.' => '.$c;
    echo '<br/>';
} 

sort($color);  //dùng hàm sort() để sắp xếp thứ tự của mảng
foreach ($color as $i => $x)
{
    echo "$i => $x";
    echo '<br/>';
}
echo "<ul><li>$x</li>";
// tạo một mảng liên hợp trong PHP

$mang_lien_hop_thu_do = array (
    'viet Nam' => 'Ha Noi',
    'Thailand' => 'Bangkok',
    'Laos' => 'Vientiane',
    'Cambodia' => 'Phnompenh',
    'Malaysia' => 'Kuala Lumpur',
    'Indonesia' => 'Jakatar',
    'Mianma' => 'Manila'
);
asort ($mang_lien_hop_thu_do); // dùng hàm asort() để sắp xếp giá trị của mạng mak k lamg thay đổi biến số truyền vào
foreach ($mang_lien_hop_thu_do as $nation => $capital)// dùng vòng lặp để in các giá trị của mảng
{
    echo "Thủ đô của $nation là: $capital";
    echo '<br/>';
}
unset ($mang_lien_hop_thu_do['Thailand']); // dùng hàm unset để xóa 1 phần tử trong mảng
print_r ($mang_lien_hop_thu_do);
echo '<br/>';

// lấy ra phần tử đầu tiên của mảng
echo reset($color).'<br/>';

// Chèn phần tử vào vị trí bất kỳ trong mảng

$mang_ban_dau = array (
    'xanh',
    'đỏ',
    'tím',
    'vàng'
);
$bien_can_chen = 'trắng';
$vi_tri_can_chen = 2;
$phan_tu_mang_bi_xoa = 1;

array_splice ($mang_ban_dau, $vi_tri_can_chen, null, $bien_can_chen);
print_r($mang_ban_dau);