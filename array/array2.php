<?php
    $data = ["Dwi" => 90, "Asep" => 76, "Dudung" => 65, "Romlah" => 85];
    // menambah index di array
    $data["Ahmad"] = 88;
    foreach ($data as $key => $val) {
        echo "Nama : $key <br>";
        echo "Nilai : $val <br>";
        $ket = $val > 75 ? "Mantap Anda Lulus" : "hahaha Kasian Anda Tidak Lulus";
        echo "Keterangan : $ket<br><br>";
    }
?>