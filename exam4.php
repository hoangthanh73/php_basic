<?php
// viết hàm kiểm tra số nguyên tố
$a = 0;
$check = ham_kiem_tra_so_nguyen_to($a);
if ($check == true)
{
    echo "$a là số nguyên tố";
}
else
{
    echo "$a không phải là số nguyên tố";
}


function ham_kiem_tra_so_nguyen_to($number)
{
    if ($number < 2)
    {
        return false;
    }
    elseif ($number == 2)
    {
        return true;
    }
    else
    {
        for ($check = 2; $check < $number; $check ++)
        {
            if ($number % $check == 0)
            {
                return false;
            }else{
                return true;
            }
        }
    }
}