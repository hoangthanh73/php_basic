<?php
// Bài tập sắp xếp mảng 

$listName = ['Thành' => 23, 'Công' => '24', 'Tiến' => 21, 'Mỹ' => 26];

echo 'sắp xếp mảng theo value tăng dần asort() <br/>';

asort($listName);
foreach ($listName as $name => $age) {
    echo "$name: $age tuổi";
    echo '<br/>';
}

echo 'sắp xếp mảng  theo value giảm dần arsort() <br/>';

arsort($listName);
foreach ($listName as $name => $age) {
    echo "$name: $age tuổi";
    echo '<br/>';
}

echo 'sắp xếp theo key tăng dần ksort() <br/>';

ksort($listName);
foreach ($listName as $name => $age) {
    echo "$name: $age tuổi";
    echo '<br/>';
}

echo 'sắp xếp theo key giảm dần krsort() <br/>';

krsort($listName);
foreach ($listName as $name => $age) {
    echo "$name: $age tuổi";
    echo '<br/>';
}
