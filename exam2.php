<?php
// hàm trong PHP
/* Hàm trong PHP dùng để thực hiện một khố lệnh liên tiếp có điểm đầu và điểm cuối;
   Một hàm được xác định thực hiện một công việc cụ thể nào đó;
   Ví dụ hàm kiểm tra số chẵn số lẻ thì mục đích của hàm đó được dùng để kiểm tra số chẵn số lẻ;
   Điều đặc biệt hàm có thể được gọi ở nhiều nơi nhiều chương trình khác nhau;
*/
/* cú pháp function func_name($vars);
        {//các đoạn code 
        return $val;}
    func_name: là tên hàm;
    $vars: là các biến truyền vào trong hàm
    return $val: là hàm sẽ trả về giá trị $val
    Nếu hàm không có giá trị trả thì ta không dùng dòng return này
*/
// kiểm tra số chẵn số lẻ

$number = 252;

if (kiem_tra_so_chan($number)){
    echo 'số chẵn';
}
else{
    echo 'số lẻ';
}

function kiem_tra_so_chan($check_Number)
{
    if ($check_Number % 2 == 0)
        return true;
    else return false;
}
echo '<br/>';

// truyền nhiều biến vào một hàm
$a = 133;
$b = 67;

echo tinh_tong($a, $b);
function tinh_tong($i, $j){
    return $i + $j;
}
echo '<br/>';

/* Nếu một hàm trong PHP bạn khai báo có 2 biến mà bạn chỉ truyền vào 1 biến thì báo lỗi ngay;
   Trong thực tế bạn muốn có những hàm không ràng buộc phải truyền đủ biến vào, vì thế nó cung 
   cấp cho chúng ta 1 chức năng là truyền giá trị mặc định cho biến trong các hàm;
*/
$a = 35;
$b = 65;
$c = 100;

echo tinh_tong_nhieu_so($a, $b);
function tinh_tong_nhieu_so($i, $j, $k = false)
{
    $tong = $i + $j;
    if ($k != false)
    {
        $tong = $tong + $k;
    }return $tong;
}

//=> các biến ta truyền vào chương trình là tham số thực.
//=> các biến ta định nghĩa trong hàm được gọi là tham số hình thức;

//=> biến toàn cục là các biến ta khai báo ở chương trình chính, để lấy giá trị của biến toàn cục ta dùng hàm global$tenbien để lấy
//=> biến cục bộ là biến ta khai báo trong hàm

/* biến tĩnh là các biến cố định bên trong hàm, không giống như biến toàn cục chúng không được biết 
đến bên ngoài hàm mà chỉ dc biết đến bên trong hàm. Nhưng giá trị của chúng sẽ đươc lưu lại sau mỗi
lần gọi hàm
    để khai báo biến tĩnh ta dùng từ khóa static$tenbien
*/
echo '<br/>';
function ham_can_kiem_tra()
{
    static $number = 0;
    $number ++;
    echo $number;
}
ham_can_kiem_tra();
ham_can_kiem_tra();
// các cách gọi hàm trong PHP
/* truyền bằng giá trị
   mặc định tất cả các đối số truyền vào hàm đều truyền bằng giá trị. điều này có nghĩa khi các đối số được truyền đến hàm được gọi,
   giá trị được truyền thông qua biến tạm (tham số hình thức). mọi tham số được thực hiện trên biến tạm này nên 
   không tác động đến biến chính của mình
   nếu ta tác động đến giá trị biến truyền vào thì sau khi thoát khỏi hàm giá trị đó không thay đổi
*/
echo '<br/>';
/*
$a = 1;
function tang_len_1($a){
    return $a + 1;
}
echo tang_len_1($a);
echo $a;

/* truyền bằng tham chiếu ta dùng thêm &
   => làm thay đổi giá trị biến truyền vào sau khi kết thúc hàm 
*/
echo '<br/>';
$b = 1;
function tang_len_1(&$a){
    $a = $a + 1;
    return $a;
}
echo tang_len_1($b);
echo $b;
// một hàm có thể gọi tới một hàm
function A()
{
    B();
}
function B()
{
    C();
}
function C()
{
    echo 'C';
}
A();