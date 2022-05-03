<?php
// lệnh break, continue, go to, die, exit
// câu lệnh break dùng để thoát khỏi vòng lặp cho dù vòng lặp chưa kết thúc
// ví dụ 

for ($i = 1; $i < 10; $i ++)
{
    if ($i > 4){
        break;
    }echo "$i ";
}echo '<br/>';
//câu lệnh continue sẽ bỏ qua những câu lệnh bên dưới nó và bước qua vòng lặp kế tiếp
//ví dụ

for ($i = 1; $i < 10; $i ++)
{
    if ($i == 4){
        continue;
    }echo "$i ";
}echo '<br/>';
// Câu lệnh go to dùng để nhảy đến một câu lệnh nào đó

//lệnh die và exit sẽ ảnh hưởng đến cả chương trình và những câu lệnh phía dưới lệnh die và exit sẽ không được thực hiện
// ví dụ

echo $i;
//die;
exit;
echo 21648;

//=> thực tế ta chỉ sử dụng lệnh continue, break, die, exit thôi
//=> lênh goto ta ít khi dùng vì nó làm chương trình rối và khó bảo trì, nâng cấp