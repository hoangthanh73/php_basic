<?php
//bài tập về mảng
$stafts = array(
    array(
        'Name'=>'Hoàng Minh Thành',
        'Born'=>'Quảng Bình',
        'Birth'=>1995
    ),
    array(
        'Name'=>'Trần Cường',
        'Born'=>'Quảng Trị',
        'Birth'=>1996
    ),
    array(
        'Name'=>'Nhật Luân',
        'Born'=>'Huế',
        'Birth'=>1997
    ),
    array(
        'Name'=>'Phan Quang Nhứt',
        'Born'=>'Đà Nẵng',
        'Birth'=>1998
    )
);

echo '<ul>';
foreach($stafts as $key => $staft){
    echo '<li>';
    echo 'Name: '.$staft['Name'].'<br/>';
    echo 'Born: '.$staft['Born'].'<br/>';
    echo 'Birth: '.$staft['Birth'].'<br/>';
    //echo'<hr/>';
    echo '</li>';
}
echo '</ul>';

echo '<ul>';
foreach($stafts as $key => $staft){
    echo '<li>';
        echo 'Phần tử thứ: '.$key.'<br/>';
        echo '<pre>';
        var_dump($staft);
        echo '</pre>';
    echo '</li>';
}
echo '</ul>';

// gọi phần tử thứ 2 trong key 'Name'
echo '<br/>';
$name = $stafts[2]['Name'];
echo $name;
echo '<br/>';

// Thêm phần tử vào mảng
$new_Staft = array(
    'Name'=>'Công Tiến',
    'Born'=>'Quảng Nam',
    'Birth'=>1999
);
//$stafts[1] = $new_Staft;
$stafts[] = $new_Staft;
//array_push($stafts, $new_Staft);
//echo var_dump($stafts);

//xóa phần tử của mảng ta dùng hàm unset
//unset($stafts[4]['Born']);
//sửa giá trị phần tử của mảng
$stafts[1]['Name'] = 'Trần Mạnh Cường';
echo '<ul>';
foreach($stafts as $key => $staft){
    echo '<li>';
        echo 'Phần tử thứ: '.$key.'<br/>';
        echo '<pre>';
        var_dump($staft);
        echo '</pre>';
    echo '</li>';
}
echo '</ul>';
