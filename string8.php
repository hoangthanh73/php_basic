<?php
$strInput = 'Hoàng "Minh" Thành';
echo strstr($strInput, 'Minh', true);
echo '<br/>';
echo mb_substr($strInput, 0, 1, 'UTF-8');
echo '<br/>';
echo addslashes($strInput);
echo '<br/>';
echo stripslashes($strInput);
echo '<br/>';

$strInput = str_replace('à', 'a', $strInput);
$strInput = trim($strInput, ' ');
echo chunk_split($strInput, 1, '/');
echo '<br/>';
echo $strInput;
echo '<br/>';
echo strlen($strInput);

$strInput = 'hoang minh thanh';
$strdel = 'hoang';
$strInput -= $strdel;