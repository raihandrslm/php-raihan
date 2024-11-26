<?php
    $years = date("Y");

    //ternary
    $kabisat = $years % 4 == -0 ? 'Kabisat' : "Bukan Tahun Kabisat";

    echo "$years Itu tahun $kabisat";
?>