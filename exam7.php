<?php
// viết hàm sắp xếp mảng
function ham_sap_xep_mang($a)
{
    for ($x = 0; $x < count($a); ++$x)
    {
        $min = $x;
        for ($y = $x + 1; $y < count($a); ++$y)
        {
            if ($a[$y] < $a[$min])
            {
                $temp = $a[$min];
                $a[$min] = $a[$y];
                $a[$y] = $temp;
            }
        }
    }
    return $a;
}
$a = array (52, 5, 12,'sdg');
print_r(ham_sap_xep_mang($a));