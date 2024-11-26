<?php
    // membuat fungsi
    function perkenalan($nama, $salam){
        echo $salam . ", ";
        echo "Perkenalkan, nama saya ".$nama."<br>";
        echo "Senang berkenalan dengan anda<br>";
    }

    // memanggil fungsi yang sudah dibuat
    perkenalan("Raihan Ganteng","Hi");
    echo "<hr>";

    $saya = "Raihan Nichol";
    $ucapansalam = "Selamat Pagi";

    // memanggilnya lagi
    perkenalan($saya, $ucapansalam);
?>