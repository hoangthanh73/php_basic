<?php
// vẽ một hình chữ nhật hình '*' cạnh 6* 4

for ($x = 1; $x <= 4; $x++) {
    for ($y = 1; $y <= 6; $y++) {
        echo '*';
    }
    echo '<br>';
}

// vẽ tam giác vuông hình '*' cạnh 5 

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo '<br/>';
}

// vẽ tam giác cân

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo '<br/>';
}
for ($a = 4; $a > 0; $a--) {
    for ($b = 1; $b <= $a; $b++) {
        echo '*';
    }
    echo '<br/>';
}
