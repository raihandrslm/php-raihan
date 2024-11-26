<?php
    echo "<center><h2>Novel Populer</h2></center>";
    $nov = [
        [
            "No Urut" => "1",
            "Judul" => "Jatuh Cinta Sendirian",
            "Genre" => "Romance",
            "Penulis" => "Mang Oleh",
            "Penerbit" => "Adiknya Mang Oleh",
            "Tahun Rilis" => "2012",
        ],
        [
            "No Urut" => "2",
            "Judul" => "Kuntilanak Botak",
            "Genre" => "Horror, Komedi",
            "Penulis" => "Asep",
            "Penerbit" => "Asep Gramedia",
            "Tahun Rilis" => "2010",
        ],
        [
            "No Urut" => "3",
            "Judul" => "Dia Masa Lalumu Aku Masa Depanmu",
            "Genre" => "Sedih",
            "Penulis" => "Ujang Bucin",
            "Penerbit" => "Jajang Perpus",
            "Tahun Rilis" => "2024",
        ],
        [
            "No Urut" => "4",
            "Judul" => "Rahasia Hati",
            "Genre" => "Romance",
            "Penulis" => "Dadang",
            "Penerbit" => "Endang Novel",
            "Tahun Rilis" => "2017",
        ],
        [
            "No Urut" => "5",
            "Judul" => "Disukai Balik",
            "Genre" => "Romance",
            "Penulis" => "Ervan",
            "Penerbit" => "Alief",
            "Tahun Rilis" => "2023",
        ],
        [
            "No Urut" => "6",
            "Judul" => "Cinta Kandas Balap Liar Ku Gas",
            "Genre" => "Sedih",
            "Penulis" => "Hexsa",
            "Penerbit" => "Hexsa",
            "Tahun Rilis" => "2024",
        ],
        [
            "No Urut" => "7",
            "Judul" => "Penantian Panjang",
            "Genre" => "Romance",
            "Penulis" => "Diva",
            "Penerbit" => "Adit",
            "Tahun Rilis" => "2022",
        ],
        [
            "No Urut" => "8",
            "Judul" => "Pocong Jabrig",
            "Genre" => "Horror, Komedi",
            "Penulis" => "Tatang Bolenang",
            "Penerbit" => "Agus Prikitiw",
            "Tahun Rilis" => "2013",
        ],
        [
            "No Urut" => "9",
            "Judul" => "Calon Kyai",
            "Genre" => "Religi",
            "Penulis" => "Raihan",
            "Penerbit" => "Ervan",
            "Tahun Rilis" => "2018",
        ],
        [
            "No Urut" => "10",
            "Judul" => "5 CM",
            "Genre" => "Petualangan, Persahabatan",
            "Penulis" => "Dony Dhirgantoro",
            "Penerbit" => "Grasindo",
            "Tahun Rilis" => "2005",
        ],
        [
            "No Urut" => "11",
            "Judul" => "Pulang",
            "Genre" => "Drama",
            "Penulis" => "Leila S.Chudori",
            "Penerbit" => "Kepustakaan Populer Gramedia",
            "Tahun Rilis" => "2012",
        ],
        [
            "No Urut" => "12",
            "Judul" => "Rindu",
            "Genre" => "Religi, Drama",
            "Penulis" => "Tere Liye",
            "Penerbit" => "Republika",
            "Tahun Rilis" => "2014",
        ],
        [
            "No Urut" => "13",
            "Judul" => "Laskar Pelangi",
            "Genre" => "Drama",
            "Penulis" => "Andrea Hirata",
            "Penerbit" => "Bentang Pustaka",
            "Tahun Rilis" => "2005",
        ],
        [
            "No Urut" => "14",
            "Judul" => "Si Kabayan Jadi Sarjana",
            "Genre" => "Komedi, Sosial",
            "Penulis" => "Hardiana H.",
            "Penerbit" => "Balai Pustaka",
            "Tahun Rilis" => "1987",
        ],
        [
            "No Urut" => "15",
            "Judul" => "Perahu Kertas",
            "Genre" => "Romansa, Coming-of-age",
            "Penulis" => "Dee Lestari",
            "Penerbit" => "Bentang Pustaka",
            "Tahun Rilis" => "2009",
        ],
        [
            "No Urut" => "16",
            "Judul" => "Hujan",
            "Genre" => "Romansa, Fiksi Ilmiah",
            "Penulis" => "Tere Liye",
            "Penerbit" => "Gramedia Pustaka Utama",
            "Tahun Rilis" => "2016",
        ],
        [
            "No Urut" => "17",
            "Judul" => "Janji",
            "Genre" => "Romansa, Drama",
            "Penulis" => "Tere Liye",
            "Penerbit" => "Republika Penerbit",
            "Tahun Rilis" => "2020",
        ],
        [
            "No Urut" => "18",
            "Judul" => "Kata",
            "Genre" => "Romansa, Kehidupan",
            "Penulis" => "Rintik Sedu(Nadhifa Allya Tsana)",
            "Penerbit" => "GagasMedia",
            "Tahun Rilis" => "2018",
        ],
        [
            "No Urut" => "19",
            "Judul" => "Jingga dan Senja",
            "Genre" => "Romansa, Remaja",
            "Penulis" => "Esti Kinasih",
            "Penerbit" => "Gramedia Pustaka Utama",
            "Tahun Rilis" => "2010",
        ],
        [
            "No Urut" => "20",
            "Judul" => "Sepotong Hati Yang Baru",
            "Genre" => "Romansa, Kehidupan",
            "Penulis" => "Tere Liye",
            "Penerbit" => "Gramedia Pustaka Utama",
            "Tahun Rilis" => "2012",
        ],
    ];
    foreach ($nov as $data){
        echo "No Urut : " . $data['No Urut'] . "<br>";
        echo "Judul : " . $data['Judul'] . "<br>";
        echo "Genre : " . $data['Genre'] . "<br>";
        echo "Penulis : " . $data['Penulis'] . "<br>";
        echo "Penerbit : " . $data['Penerbit'] . "<br>";
        echo "Tahun Rilis : " . $data['Tahun Rilis'] . "<br>";
        echo "----------------------------------------------------------------------<br>";
    }
?>