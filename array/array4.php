<?php
    $mhs = [
        [
            "Nama" => "Raihan Ganteng",
            "Jurusan" => "Informatika",
            "Alamat" => "Bandung",
        ],
        [
            "Nama" => "Raihan Ganteng Pisan",
            "Jurusan" => "Teknik Industri",
            "Alamat" => "Garut",
        ],
    ];

    foreach ($mhs as $data){
        echo "Nama : " . $data['Nama'] . "<br>";
        echo "Jurusan : " . $data['Jurusan'] . "<br>";
        echo "Alamat : " . $data['Alamat'] . "<br>";
        echo "<hr>";
    }
?>