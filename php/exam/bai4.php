<?php
$toan = 10;
$ly = 9;
$hoa = 10;
$van = 9;
$su = 9;
$dia = 7;
If( $toan < 0 || $toan > 10)
    {Echo 'điểm toán không hợp lệ';}
    Elseif( $ly < 0 || $ly > 10 )
    { echo 'điểm lý không hợp lệ';}
    Elseif( $hoa < 0 || $hoa > 10 )
    { echo 'điểm hóa không hợp lệ';}
    Elseif( $van < 0 || $van >10 )
    { echo 'điểm văn không hợp lệ';}
    Elseif( $su < 0 || $su > 10 )
    { echo 'điểm su không hợp lệ';}
    Elseif( $dia < 0 || $dia > 10 )
    { echo 'điểm địa không hợp lệ';}
    Elseif( $toan < 4|| $ly < 4 || $hoa < 4 || $van < 4 || $su < 4 || $dia < 4 ){
    echo 'học sinh yếu';}
Else{
    $diemTB = (( $toan + $ly + $hoa + $van + $su + $dia ) / 6 );
    If ( $diemTB < 5 ){
    echo 'học sinh yếu';}
    Elseif( $diemTB >= 5 && $diemTB < 6.5 ){
    echo 'học sinh trung bình';}
    Elseif( $diemTB >= 6.5 && $diemTB < 8){
    echo 'học sinh khá';}
    Else{ echo 'học sinh giỏi';}}
Echo '<br/>';
echo 'điểm trung bình môn là: '.$diemTB;


