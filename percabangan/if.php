<?php
    $nilai = 150;

    if($nilai >= 100){
        echo "Nilai Tidak Valid !!!";
    } else if($nilai >= 90){
        echo "Grade A";
    } else if($nilai >= 80){
        echo "Grade B"; 
    } else if($nilai >= 70){
        echo "Grade C"; 
    } else if($nilai >= 60){
        echo "Grade D"; 
    } else if($nilai >= 50){
        echo "Grade E"; 
    } else if($nilai >= 0){
        echo "Anda Harus Belajar Lagi !!!"; 
    }
?>