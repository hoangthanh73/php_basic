<?php
// tính tổng 1 đến n sử dụng mảng

$n = 10;
$result = [];
$tong = 0;

for ($i = $n; $i > 0; $i--) {
    $result[] = $i;
}
foreach ($result as $value) {
    $tong += $value;
}
print_r($result);
echo '<br/>';
echo $tong;
