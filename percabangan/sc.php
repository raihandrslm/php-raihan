<?php
    $akun = "Ujang";
    $aksi = "Hapus";

    switch ($akun){
        case 'Admin':
            echo "Tipe Akun : $akun <br>";
            echo "Aksi : ";
        switch($aksi){
            case 'Edit':
                echo "Edit Akun Admin <br>";
            break;
            case 'Hapus':
                echo "Anda Menghapus Akun Admin <br>";
            break;
        } break;
        case 'User':
            echo "Tipe Akun : $akun <br>";
            echo "Aksi : ";
            switch($aksi){
                case 'Edit':
                    echo "Edit Akun User <br>";
                break;
                case 'Hapus':
                    echo "Anda Tidak Bisa Menghapus Akun User <br>";
                break;
            } break;
            default:
                echo "Akun Tidak Ditemukan, Silahkan Ulang Kembali!!!";
    }
?>