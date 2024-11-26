<?php
    $buku = "Komik";
    $harga = "85000";
    $genre = "Comedy";
    $cashback = "0;";

switch ($genre){
    case "Romance":
        $cashback = $harga * 0.05;
        break;
    case "Thriller":
        $cashback = $harga * 0.1;
        break;
    case "Comedy":
        $cashback = $harga * 0.15;
        break;
    default:
        $cashback = 0;
}
echo "Judul Buku : $buku <br>";
echo "Genre : $genre <br>";
echo "Harga : Rp." . number_format($harga, 0, '.','.') . "<br>";
echo "Cashback : Rp." . number_format($cashback, 0, '.','.') . "<br>";