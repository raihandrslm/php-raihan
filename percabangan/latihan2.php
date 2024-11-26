<?php
    $nama = "Muhammad Raihan Darussalam Ganteng Se Alam Semesta";
    $kelas = "XI RPL 2";
    $jk = "Laki-laki";

    $nilai_mtk = 90;
    $nilai_indo = 95;
    $nilai_inggris = 97;
    $nilai_pro = 100;

    $hasil1 = $nilai_mtk + $nilai_indo + $nilai_inggris + $nilai_pro;
    $hasil2 = $hasil1 / 4;
    
    echo "Nama : $nama <br>";
    echo "Kelas : $kelas <br>";
    echo "Jenis Kelamin : $jk <hr>";
    echo "Nilai Matematika : $nilai_mtk <br>";
    echo "Nilai B.Indonesia : $nilai_indo <br>";
    echo "Nilai B.Inggris : $nilai_inggris <br>";
    echo "Nilai Produktif : $nilai_pro <hr>";
    echo "Rata - rata : $hasil2 <br>";
    if ($hasil2 >= 85) {
    echo "Mantapp Anda Lulus !!!";
    }else 
    echo "Wkwk Anda Tidak Lulus !!!";
?>