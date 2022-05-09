<?php
// sắp xếp nổi bọt

// sắp xếp mảng tăng dần
$number = array(12, 45, 75, 13, 75, 43);

$sophantu = count($number);

for ($i = 0; $i < $sophantu - 1; $i++) {
      for ($j = $i + 1; $j < $sophantu; $j++) {
            if ($number[$j] < $number[$i]) {
                  $temp = $number[$j];
                  $number[$j] = $number[$i];
                  $number[$i] = $temp;
            }
      }
}
//print_r($number);

// đưa sắp xếp nổi bọt tăng vào hàm

function sap_xep_noi_bot_tang($number)
{
      $sophantu = count($number);
      for ($i = 0; $i < $sophantu - 1; $i++) {
            for ($j = $i + 1; $j < $sophantu; $j++) {
                  if ($i > $j) {
                        $temp = $number[$j];
                        $number[$j] = $number[$i];
                        $number[$i] = $temp;
                  }
            }
      }
      print_r($number);
      return;
}


// Sắp xếp nổi bọt giảm

function sap_xep_noi_bot_giam($number)
{
      for ($i = 0; $i < count($number) - 1; $i++) {
            for ($j = 1; $j < count($number); $j++) {
                  if ($j > $i) {
                        $temp = $number[$j];
                        $number[$j] = $number[$i];
                        $number[$i] = $temp;
                  }
            }
      }
      print_r($number);
      return;
}

echo sap_xep_noi_bot_giam($number);
echo '<br/>';
echo sap_xep_noi_bot_tang($number);
