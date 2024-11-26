<?php
    class Pendaftaran{
       
        public function dataDiri($nama, $umur){
            
            echo "Nama : ".$nama."<br>";
            echo "Umur : ".$umur;
        }
    }

    $cetak = new Pendaftaran();
    echo $cetak->dataDiri("Raihan Ganteng",17);
?>