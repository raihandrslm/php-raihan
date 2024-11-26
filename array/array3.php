<?php
    $nilai =
    [
    ["Rani","Bandung","Islam",165],
    ["Roni","Kuningan","Islam",175],
    ["Dedeng","Cimahi","Kristen",160],
    ];

    // menampilkan nilai array secara indidvidu berdasarkan (baris & kolom)
    echo $nilai[1][2];
    echo "<hr>";
    // manampilkan nilai array secara kolektif
    for ($i = 0; $i < count($nilai); $i++){ // for untuk menghitung baris
        for ($n = 0; $n < count($nilai[$i]); $n++){ // for untuk menghitung kolom
            echo $nilai[$i][$n] . "<br>";
        }
        echo "<hr>";
    }

    // menggunakan foreach
    foreach ($nilai  as $siswa) { // untuk menghitung baris
        foreach ($siswa as $biodata) { // untuk menghitung kolom 
            echo $biodata . " ";
        }
        echo "<br>";
    }
?>