<?php

// index array
$a = ["BMW", "Honda", "Suzuki"];

// associative array
$b = ["Indonesia" => "Nasi Padang", "Malaysia" => "Nasi Lemak", "Amerika" => "Burger"];

// multidimensional array
$c = ['a' => $a, 'b' => $b];

echo $c['b']['Indonesia'];
