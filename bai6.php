<?php
$toan = 1;
$van = 2;
$anh = 7;
//kiểm tra nhập điểm có đúng không
if ( $toan > 10 || $toan <0){
    echo "điểm Toán không hợp lệ";
}
elseif ( $van > 10 || $van < 0){
    echo "điểm Văn không hợp lệ";
}
elseif ( $anh > 10 || $anh < 0){
    echo "điểm Anh Văn không hợp lệ";
}
//kiểm tra điểm liệt
elseif ( $toan == 0 || $van == 0 || $anh == 0){
    echo "thí sinh bị loại";
}
//kiểm tra tổng điểm có trên 15 không
else{ 
    if(( $toan + $van + $anh ) < 15 ){
    echo 'Thí sinh bị loại';
    }
    else{
    echo 'chúc mừng bạn đã đậu tốt nghiệp';
    }
}