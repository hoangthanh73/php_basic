<?php
// kiểm tra n có phải là số nguyên tố.
$n = 5;
$check = true;

if ( $n < 2 )
{
    echo $n.' không phải là số nguyên tố';
}
elseif ( $n == 2 )
{
    echo $n.' là số nguyên tố';
}
else
{
    for ( $index = 2; $index < $n; $index ++)
    {
        if ( $n % $index == 0 ){ $check = false; }
    }
    if ( $check == true )
    {
        echo $n.' là số nguyên tố';
    }else{ echo $n.' không phải là số nguyên tố';}
}