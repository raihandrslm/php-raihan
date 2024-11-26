<?php
    class Contoh{
        public $nama = "Raihan";

        private function Tampil(){
            echo "Perkenalkan nama saya $this->nama, yang gantengnya gaada obat";
        }

        public function keluar(){
            echo $this->Tampil();
        }
    }

    $cetak = new Contoh();
    echo $cetak->keluar();
    echo "<br>".$cetak->nama;
?>