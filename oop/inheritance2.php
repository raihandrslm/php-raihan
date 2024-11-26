<?php
    class BangunDatar{

        public $luas;
    }

    class luas extends BangunDatar{

        public function Persegi($sisi){
            echo "<h3>Menghitung Luas Persegi</h3>";
            echo "Sisinya : $sisi <br>";
            echo "L = Sisi x Sisi <br>";
            $this->luas = $sisi * $sisi;
            echo "Hasilnya adalah : <b><i>$this->luas</i></b>";
        }

        public function PersegiPanjang($panjang,$lebar){
            echo "<h3>Menghitung Luas Persegi Panjang</h3>";
            echo "Panjangnya : $panjang <br>";
            echo "Lebarnya : $lebar <br>";
            echo "L = Panjang x Lebar <br>";
            $this->luas = $panjang * $lebar;
            echo "Hasilnya adalah : <b><i>$this->luas</i></b>";
        }

        public function Segitiga($setengah,$alas,$tinggi){
            echo "<h3>Menghitung Luas Segitiga</h3>";
            echo "Alasnya : $alas <br>";
            echo "Tinggi : $tinggi <br>";
            echo "L = 1/5 x Alas x Tinggi <br>";
            $this->luas = $setengah * $alas * $tinggi;
            echo "Hasilnya adalah : <b><i>$this->luas</i></b>";
        }
    }
    $cetak = new luas();
    echo $cetak->Persegi(5,5);
    echo "<hr>";

    echo $cetak->PersegiPanjang(10,5);
    echo "<hr>";

    echo $cetak->Segitiga(0.5,5,15);
    echo "<hr>";
?>