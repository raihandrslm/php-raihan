<?php
    // ini class
    class Raihan{
        
        // ini property/atribut
        public $ganteng;
        public $sholeh;

        // ini method/function
        public function Ganteng(){
            echo "Raihan ganteng pisan, ga ada obat";
        }
    }
    // ini object
    $cetak = new Raihan();
    echo $cetak->Ganteng();
?>