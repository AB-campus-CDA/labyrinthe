<?php
// fonction recursive
// math : factoriel de n
$n = 5;
$result = 1;

// iter
for ($i=$n; $i>0; $i--) {
    $result *= $i;
}

//print_r($result."\n");

// rec
function f($in) {

    if ($in == 0) {return  1;};

    return $in * f($in - 1);
};

print_r(f(6)."\n");