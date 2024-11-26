<?php
    echo "--------------------------------------------------------------------<br>";
    echo "<b>Selamat Datang Di Toko Buku Budi Ganteng</b><br><br>";
    $buku = "Komik";
    $genre = "Romance";

    $rom = 55000;
    $thri = 70000;
    $com = 90000;

    switch ($buku){
        case 'Komik':
            echo "Anda Membeli Buku : $buku <br>";
            echo "Genre : $genre <br>";
            switch ($genre){
                case 'Romance':
                    echo "Harga : $rom <br>";
                    echo "Cashback : ";
                    echo $rom * 0.05;
                    break;
                case 'Thriller':
                    echo "Harga : $thri <br>";
                    echo "Cashback : ";
                    echo $thri * 0.01;
                    break;
                case 'Comedy':
                    echo "Harga : $com <br>";
                    echo "Cashback : ";
                    echo $rom * 0.15;
                    break;
            }
            break;
            case 'Novel':
                echo "Anda Membeli Buku : $buku <br>";
                echo "Genre : $genre <br>";
                switch ($genre){
                    case 'Romance':
                        echo "Harga : $rom <br>";
                        echo "Cashback : ";
                        echo $rom * 0.05;
                        break;
                    case 'Thriller':
                        echo "Harga : $thri <br>";
                        echo "Cashback : ";
                        echo "$thri * 0.01";
                        break;
                    case 'Comedy':
                        echo "Harga : $com <br>";
                        echo "Cashback : ";
                        echo $rom * 0.15;
                        break;
            }
            break;
            case 'Komik':
                echo "Anda Membeli Buku : $buku <br>";
                echo "Genre : $genre <br>";
                switch ($genre){
                    case 'Romance':
                        echo "Harga : $rom <br>";
                        echo "Cashback : ";
                        echo $rom * 0.05;
                        break;
                    case 'Thriller':
                        echo "Harga : $thri <br>";
                        echo "Cashback : ";
                        echo $thri * 0.01;
                        break;
                    case 'Comedy':
                        echo "Harga : $com <br>";
                        echo "Cashback : <br>";
                        echo $rom * 0.15;
                        break;
                }
    }
?>
<?php
    echo "<br>--------------------------------------------------------------------<br>";
    echo "<b>Tes Tentara Nasional Idonesia</b><br>";
    $berat = 69;
    $tinggi = 165;
    $hasil = $berat >= 75 ? "Mantapp Anda Lolos" : "Wkwk Kasian Belum Lolos";

    echo "<br>";
    $hasilnya = $tinggi <= 165 ? "Mantapp Anda Lolos" : "Wkwk Kasian Belum Lolos";
    echo "Berat Badan Anda : $berat <br>";
    echo "Tinggi Badan Anda : $tinggi <br>";
    echo "Hasilnya : $hasil <br>";
    echo "Hasilnya : $hasilnya <br>";
?> 