<?php
$g = null ;
echo 'kiểu mảng <br/>';
$top = array( 'Nguyễn Văn A', 'Hoàng Thị B', 'Trần C');
var_dump($top);
echo '<br/>';
echo $top[1];
echo'<hr/>';
$abc = array(
    $abc[2][1] = 'Hoàng An',
    $abc[4][2] = 'Trần Ngọc',
    $abc[6][3] = 'Lê Sơ');
print_r($abc);
var_dump($abc);
$check = is_array($abc);
var_dump($check);
$checknull = is_null( $g );
var_dump( $checknull );
