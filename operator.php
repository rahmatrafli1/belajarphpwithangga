<?php

// Operator aritmatika
// +, -, *, /, %, **
$a = 1;
$b = 1;

$tambah = $a + $b;
$kurang = $a - $b;
$kali = $a * $b;
$bagi = $a / $b;
$modulus = $a % $b;
$pangkat = $a ** $b;

echo "Contoh Operator Aritmatika: <br>";
echo $a . '+' . $b . '=' . $tambah;
echo '<br>';
echo $a . '-' . $b . '=' . $kurang;
echo '<br>';
echo $a . 'x' . $b . '=' . $kali;
echo '<br>';
echo $a . ':' . $b . '=' . $bagi;
echo '<br>';
echo $a . 'mod' . $b . '=' . $modulus;
echo '<br>';
echo $a . '^' . $b . '=' . $pangkat;
echo '<br><br>';

// Operator Assignment
echo "Contoh Operator Assignment: <br>";
echo $a += $a;
echo "<br>";
echo $a -= $a;
echo "<br><br>";

// Operator Perbandingan
echo "Contoh Operator Perbandingan: <br>";
$komparasi = $a > $b;
echo var_dump($komparasi);

// Operator Increment/Decrement
echo "Contoh Operator Increment/Decrement: <br>";
$a--;
echo $a;
