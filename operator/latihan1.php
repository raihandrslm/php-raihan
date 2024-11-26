<?php
    echo "<h1>Menghitung Luas Bangun Datar</h1> <br>";

    $sisi = 5;
    $luas = $sisi * $sisi;

    echo "<h2>Menghitung Luas Persegi</h2>";
    echo "Rumus : L = S x S <br>";
    echo "Sisi : $sisi <br>";
    echo "Luas : $luas <br>";
    echo "<hr>";

    $panjang = 10;
    $lebar = 5;
    $luas = $panjang * $lebar;

    echo "<h2>Menghitung Luas Persegi Panjang</h2>";
    echo "Rumus : L = Panjang x Lebar <br>";
    echo "Panjang : $panjang <br>";
    echo "Lebar : $lebar <br>";
    echo "Luas : $luas";
    echo "<hr>";

    $alas = 20;
    $tinggi = 5;
    $i = 1/2;
    $luas = $i * $alas * $tinggi;

    echo "<h2>Menghitung Luas Segitiga</h2>";
    echo "Rumus : L = 1/2 x Alas x Tinggi <br>";
    echo "Alas : $alas <br>";
    echo "Tinggi : $tinggi <br>";
    echo "Luas : $luas";
    echo "<hr>";

    $phi = 3.14;
    $r = 20;
    $luas = $phi * $r * $r;

    echo "<h2>Menghitung Luas Lingkaran</h2>";
    echo "Rumus : L = Phi x R x R <br>";
    echo "Phi : $phi <br>";
    echo "Jari - jari : $r <br>";
    echo "Luas : $luas";
    echo "<hr>";
?>