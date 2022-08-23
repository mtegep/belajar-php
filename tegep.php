<?php
    echo "
        <marquee>
        <h1>Muhammad Tegep Rahmanda - XI RPL 2</h1>
        </marquee>
    ";

    // variable
    $nama = "Muhammad Tegep Rahmanda";
    $kelas = "XI RPL 2";
    $nilai = 99.99;

    echo "Nama : " . $nama;
    echo "<br>";
    echo "Kelas : " . $kelas;
    echo "<br>";
    echo "Nilai : $nilai";

    // Operator Jumlah
    echo "<br><br>";
    $angka1 = 5;
    $angka2 = 10;
    
    $hasil = $angka1 + $angka2;
    echo "Hasil dari penjumlahan : $hasil";

    // Rumus Luas Segitiga
    echo "<br><br>";
    $alas = 8;
    $tinggi = 20;

    $rumus = 0.5 * $alas * $tinggi;
    echo "Hasil rumus : $rumus";

    // Rumus Luas Lingkaran
    echo "<br><br>";
    $phi = 3.14;
    $r = 14;

    $lingkaran = $phi * $r * $r;
    echo "Hasil Luas : $lingkaran";

    // Rumus Volume Balok
    echo "<br><br>";
    $p = 12;
    $l = 18;
    $t = 16;

    $volume_balok = $p * $l * $t;
    echo "Volume Balok : $volume_balok";
?>