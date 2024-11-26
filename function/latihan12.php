<?php
    function Persegi($sisi){
        echo "<center><h1>Menghitung Bangun Datar</h1></center>";
        echo "<h2>Menghitung Luas Persegi</h2>";
        echo "Sisi : $sisi <br>";
        $luas = $sisi * $sisi;
        echo "L = Sisi x Sisi <br>";
        echo "Jadi hasilnya adalah : <b><i>$luas</b></i>";
        echo "<hr>";
    }
    function PersegiPanjang($panjang,$lebar){
        echo "<h2>Menghitung Luas Persegi Panjang</h2>";
        $luas = $panjang * $lebar;
        echo "Panjang : $panjang <br>";
        echo "Lebar : $lebar <br>";
        echo "L = Panjang x Lebar <br>";
        echo "Jadi hasilnya adalah : <b><i>$luas</i></b>";
        echo "<hr>";
    }
    function Segitiga($setengah,$alas,$tinggi){
        echo "<h2>Menghitung Luas Segitiga</h2>";
        $luas = $setengah * $alas * $tinggi;
        echo "Alas : $alas <br>";
        echo "Tinggi : $tinggi <br>";
        echo "L = 1/5 x Alas x Tinggi <br>";
        echo "Jadi hasilnya adalah : <b><i>$luas</i></b>";
        echo "<hr>";
    }
    function Lingkaran($phi,$r){
        echo "<h2>Menghitung Luas Lingkaran</h2>";
        $luas = $phi * $r;
        echo "Phi : $phi <br>";
        echo "Jari - jari : $r <br>";
        echo "Phi x Jari-jari <br>";
        echo "Jadi hasilnya adalah : <b><i>$luas</i></b>";
        echo "<hr>";
    }
    Persegi(10);
    PersegiPanjang(10,15);
    Segitiga(0.5,10,10);
    Lingkaran(3.14,15);
?>          