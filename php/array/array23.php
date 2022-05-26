<?php

// Đếm số lần xuất hiện các phần thử trong mảng;

$arr = [
    'Thành',
    'Trọng',
    'Bá',
    'Thành',
    'Thành',
    'Trọng',
    'Bá',
    'Lệ',
];

function countElm($arr)
{
    $result = array_count_values($arr);

    foreach ($result as $k => $v) {
        echo "$k có số lần lặp là: $v<br/>";
    }
}
print_r(countElm($arr));

// Tìm số lớn nhất trong mảng

$arr = [1, 23234, 3, 45, 4, 6, 43, 6, 53, 7, 576657, 4];

function search_max($arr)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        $max = $i;
        for ($j = 1; $j < count($arr); $j++) {
            if ($arr[$j] > $max) {
                $max = $j;
            }
        }
    }
    return "Max = $arr[$max]";
}

echo search_max($arr);
echo '<br/>';

// tìm key của một số trong mảng, nếu không tồn tại thì trả về -1;

$arr = [1, 23234, 3, 45, 4, 6, 43, 6, 53, 7, 576657, 4];

function search_key_number($search, $arr)
{
    $result = [];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] === $search) {
            $result[] = $i;
        }
    }
    if ($result == []) {
        echo -1;
    } else {
        echo "giá trị cần tìm ở vị trí: ";
        foreach ($result as $v) {
            echo "$v; ";
        }
    }
}
search_key_number(4, $arr);
echo '<br/>';

// Xóa bỏ các phần tử trùng lặp trong mảng sao cho các giá trị còn lại trong mảng là duy nhất


$arr = [
    'Thành',
    'Trọng',
    'Bá',
    'Thành',
    'Thành',
    'Trọng',
    'Bá',
    'Lệ',
];

function unique($arr)
{
    $del = [];
    for ($i = 0; $i < count($arr) - 1; $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] == $arr[$j]) {
                $del[] = $j;
            }
        }
    }
    foreach ($del as $v) {
        unset($arr[$v]);
    }
    return $arr;
}
print_r(unique($arr));
