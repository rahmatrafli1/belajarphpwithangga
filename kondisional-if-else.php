<?php

$suhu = 24.7;

if ($suhu > 38) {
    echo "Suhu panas!";
} elseif ($suhu == 38) {
    echo "Suhu normal";
} else {
    echo "Suhu dingin!";
}
