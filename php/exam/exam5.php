<?php
//viết hàm đảo ngược chuỗi

function ham_dao_nguoc_chuoi($str1)  
{  
	$n = strlen($str1);  //đếm chiều dài chuỗi
	if($n == 1)          // nếu chiều dài chuỗi bằng 1 thì không cần đảo
    {  
	    return $str1;  
    }  
	else  // nếu khác 1 thì đếm giảm thứ tự 
    {  
		$n--;  
		return ham_dao_nguoc_chuoi(substr($str1,1 , $n)). substr($str1, 0, 1);  
    }  
}  
	print_r(ham_dao_nguoc_chuoi('123456789')."<br>");
?>