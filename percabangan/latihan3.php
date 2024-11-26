<?php
    //makanan
    $hrg_seblak = 10000;
    $hrg_naspad = 15000;
    $hrg_mieayam = 12000;

    //minuman
    $hrg_esjeruk = 5000;
    $hrg_estehmanis = 5000;
    $hrg_eskelapa = 5000;

    $nama = "Raihan Ganteng";
    $jk = "Laki-laki";
    $tgl_beli = "2 Oktober 2024";
    $jenis = "Makanan";
    $menu = "Nasi Padang";
    $harga = $hrg_naspad;
    $jumlah = 10;
    $total = $harga * $jumlah;
    $diskon = 0.1;
    $hasil = $total * $diskon; 
$akhir = $total - $hasil;
    echo "Nama : $nama <br>";
    echo "Jenis Kelamin : $jk <br>";
    echo "Tanggal Beli : $tgl_beli <br>";
    echo "Jenis : $jenis <br>";
    echo "Menu : $menu <br>";
    echo "Harga : $harga <br>";
    echo "Jumlah : $jumlah <br>";
    echo "-----------------------------------------------------------------------------------------------------<br>";
    echo "Total : $total <br>";
    

    if ($hasil >= 5000){
        echo " Mantapp Anda Dapat Diskon : $hasil <br>";
        echo "-----------------------------------------------------------------------------------------------------<br>";
    }else{
        echo "Wkwk Kasian Ga  Dapat Diskon : $total<br>";
    } if ($hasil >= 5000) {
        echo "Total Bayar : $akhir";
    } else{
        echo "Total Bayar : $total";
    }
?>