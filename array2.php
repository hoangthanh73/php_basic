<?php
// bài tập mảng 

$news = array (1, 534,567, 35, 35,64);

// tìm số lớn nhất trong 1 mảng
      //dùng hàm sort sắp xếp các giá trị trong mảng rồi in ra giá trị thứ n - 1 trong mảng đã sắp xếp
print_r($news[count($news)-1]);
echo '<br/>';
//tìm số nhỏ nhất thì ta in ra phần tử thứ 0 của mảng
print_r ($news[0]);

// tính tổng 1 đến n