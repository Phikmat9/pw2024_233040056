<?php
$nam_dep = "Hikmat";
$nam_bel = "Pandu";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "$nam_dep $nam_bel <br>";
    } else if ($i %3 === 0) {
        echo "$nam_dep <br>";
    } else if ($i %5 === 0) {
        echo "$nam_bel <br>";
    } else {
        echo "$i <br>";
    }
}

echo ". <br>";
echo ". <br>";
echo ". <br>";