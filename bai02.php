<?php

$n = 17;
$isPrime = true;

if ($n < 2) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo $n . " la so nguyen to.";
} else {
    echo $n . " khong phai la so nguyen to.";
}

?>