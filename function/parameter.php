<?php
    function Pendaftaran($jurusan,$nama,$jk,$tempat_lahir,$tanggal_lahir,$no_hp,$email){
        echo "Jurusan       : $jurusan <br>";
        echo "Nama Lengkap  : $nama <br>";
        echo "Jenis Kelamin : $jk <br>";
        echo "Tempat Lahir  : $tempat_lahir <br>";
        echo "Tanggal Lahir : $tanggal_lahir <br>";
        echo "Nomor HP Siswa   : $no_hp <br>";
        echo "Email         : $email <br>";
    }
    function Alamat($provinsi,$kabkot,$kecamatan,$deskelu,$alamat,$kodepos){
        echo "Provinsi       : $provinsi <br>";
        echo "Kab/Kota       : $kabkot <br>";
        echo "Kecamatan      : $kecamatan <br>";
        echo "Desa/Kelurahan : $deskelu <br>";
        echo "Alamat         : $alamat <br>";
        echo "Kode Pos       : $kodepos <br>";
    }
    function DataAsalSekolah($namaaskol,$alamatsek){
        echo "Nama Asal Sekolah : $namaaskol <br>";
        echo "Alamat Sekolah    : $alamatsek <br>";
    }
    function DataOrangTua($namaortu,$pekerjaanortu,$no_hp,$alamat){
        echo "Nama Lengkap Ayah/Ibu/Wali : $namaortu <br>";
        echo "Pekerjaan Ayah/Ibu/Wali    : $pekerjaanortu <br>";
        echo "Nomor HP                   : $no_hp <br>";
        echo "Alamat                     : $alamat <br>";
    }

    echo "<h3>Data Diri</h3>";
    Pendaftaran("RPL","Raihan Ganteng Calon Kyai","Laki - laki gagah perkasa","Bandung","19 November 2008","088806375195","muhammadraihanganteng123@gmail.com");
    echo "<hr>";
    echo "<h3>Alamat</h3>";
    Alamat("Jawa Barat","Bandung","Dayeuhkolot","Cangkuang Wetan","Jl.Cibiuk","9082");
    echo "<hr>";
    echo "<h3>Data Asal Sekolah</h3>";
    DataAsalSekolah("SMK Assalaam Bandung","Jl.Situ Tarate");
    echo "<hr>";
    echo "<h3>Data Orang Tua</h3>";
    DataOrangTua("Rahasia","Rahasia","089512347654","Jl.Cibiuk");
?>