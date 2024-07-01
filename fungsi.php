<?php

function bilangHalo()
{
    echo "Halo";
}

function bilangNama($nama = "")
{
    if ($nama != "") {
        echo "Halo " . $nama . ". Selamat Datang!";
    } else {
        echo "Hai!";
    }
}

function tambah($angka1, $angka2)
{
    $total = $angka1 + $angka2;
    echo $total;
}

// bilangHalo();
bilangNama("Rafli");
// tambah(1, 1);
