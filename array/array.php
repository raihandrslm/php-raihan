<?php
    // array 1 dimensi
    $arrBuah = ["Mangga","Jeruk","Apel","Pisang"];

    // bisa ditampilkan satuan berdasarkan index (key) nya
    echo $arrBuah[2];
    echo "<br>";

    // bisa ditampilkan semua (collective)
    for ($i = 0; $i < count($arrBuah); $i++) {
        echo "$arrBuah[$i]<hr>";
    }
    echo "<hr> foreach <br>";
    foreach ($arrBuah as $buah) {
        echo "$buah<br>";
    }
?> 