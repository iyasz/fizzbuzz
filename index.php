<?php 



$tes1 = 100;

for ($i = 1; $i <= $tes1; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "$i . FizzBuzz <br>";
    } elseif ($i % 5 == 0) {
        echo "$i . buzz <br>";
    } elseif ($i % 3 == 0) {
        echo "$i . Fizz <br>";
    } else {
        echo "$i <br>";
    }
}
