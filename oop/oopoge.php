<?php
    class Raihan{
        public $ganteng;
        public $sholeh = "rajin sholat dan rajin ngaji";

        public function Ganteng(){
            echo "Raihan Ganteng";
        }
        public function Data(){
            echo "Raihan seorang Laki-laki Sholeh yang $this->sholeh";
        }
    }

    $cetak = new Raihan();

    echo $cetak->Ganteng();
    echo "<br>";
    echo $cetak->Data();
?>