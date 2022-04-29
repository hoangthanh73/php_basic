<?php
// khai báo biến vói hằng
$congty = 'takako Việt Nam';
define ('SDT',123235478);
echo SDT;
echo '<br/>';
echo $congty;
echo '<br/>';
if ( $congty == SDT ){echo 'số này sai';}
else {echo 'Hoàng Minh Thành';}
echo '<br/>';
var_dump(isset($congy));
echo '<br/>';
var_dump(defined('SDT'));