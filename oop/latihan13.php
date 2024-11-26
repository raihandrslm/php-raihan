<?php
    class BangunDatar{
    var $luas;

    public function Persegi($sisi){
        echo "Sisinya : $sisi <br>";
        $this->luas = $sisi * $sisi;
        echo "L = Sisi x Sisi <br>";
        echo "Jadi hasilnya adalah : <b><i>$this->luas</i></b> <hr>";
    }
    public function PersegiPanjang($panjang, $lebar){
        $this->luas = $panjang * $lebar;
        echo "Panjangnya : $panjang <br>";
        echo "Lebarnya : $lebar <br>";
        echo "L = Panjang x Lebar <br>";
        echo "Jadi hasilnya adalah : <b><i>$this->luas</i></b> <hr>";
    }
    public function Segitiga($setengah,$alas,$tinggi){
        $this->luas = $setengah * $alas * $tinggi;
        echo "Alasnya : $alas <br>";
        echo "Tingginya : $tinggi <br>";
        echo "L = 1/5 x Alas x Tinggi <br>";
        echo "Jadi hasilnya adalah : <b><i>$this->luas</i></b> <hr>";
    }
    public function Lingkaran($phi,$r){
        $this->luas = $phi * $r;
        echo "Phi : $phi <br>";
        echo "Jari-jari : $r <br>";
        echo "L = Phi x Jari-jari <br>";
        echo "Jadi hasilnya adalah : <b><i>$this->luas</i></b> <hr>";
    }
}
    $cetak = new BangunDatar();
    echo "<h2>Menghitung Luas Persegi</h2>";
    echo $cetak->Persegi(5);

    echo "<h2>Menghitung Luas Persegi Panjang</h2>";
    echo $cetak->PersegiPanjang(5,10);

    echo "<h2>Menghitung Luas Segitiga</h2>";
    echo $cetak->Segitiga(0.5,5,15);

    echo "<h2>Menghitung Luas Lingkaran</h2>";
    echo $cetak->Lingkaran(3.14,15);
?>