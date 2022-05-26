<?php

// Sắp xếp chèn tăng dần

function insert_sort($arr)
{
    for ($i = 1; $i < count($arr); $i++) {

        $loop = $i;
        $value = $arr[$i];

        while ($loop > 0 && $arr[$loop - 1] > $value) {

            $arr[$loop] = $arr[$loop - 1];
            $loop--;
        }
        $arr[$loop] = $value;
    }
    return $arr;
}

print_r(insert_sort($arr = [1, 3, 43, 45, 46, 654, 7]));
