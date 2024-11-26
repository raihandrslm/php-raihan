<?php
    // class utama
    class Kendaraan{

        protected $warna = "Putih";
        public $merk;
    }

    // class turunan
    // extends adalah keturunan atau sifat dari class induk
    class Mobil extends Kendaraan{
        public function deskripsi(){
            echo "Warna Mobil adalah : $this->warna";
        }
    }

    $cetak = new Mobil();
    echo $cetak->deskripsi();
?>