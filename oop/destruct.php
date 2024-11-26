<?php
    // ini adalah class
    class Manusia{
        // ini adalah property
        var $nama;
        var $warna;

        // method construct dijalankan pertama kali
        function __construct(){
            echo "Ini adalah isi method construct <br>";
        }

        // method destruct dijalankan terakhir
        function __destruct(){
            echo "Ini adalah isi method destruct <br>";
        }

        // ini adalah method manusia
        function tampilkan_nama(){
            return "Nama Saya Ujangoding <br>";
        }
    }

    // instansiasi class manusia
    $manusia = new Manusia();

    // memanggil method tampilkan_nama dari class manusia
    echo $manusia->tampilkan_nama();
?>