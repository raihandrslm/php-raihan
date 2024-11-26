<?php
    class Pendaftaran{
        
        public function dataDiri($jurusan,$naleng,$jk,$tempatlahir,$tgl_lahir,$nosiswa,$email){
            
            echo "Jurusan : ".$jurusan."<br>";
            echo "Nama Lengkap : ".$naleng."<br>";
            echo "Jenis Kelamin : ".$jk."<br>";
            echo "Tempat Lahir : ".$tempatlahir."<br>";
            echo "Tanggal Lahir : ".$tgl_lahir."<br>";
            echo "Nomor HP Siswa : ".$nosiswa."<br>";
            echo "Email : ".$email."<br>";
        }

        public function AlamatPendaftar($provinsi,$kabkot,$kecamatan,$desakel,$alamat,$kodepos){

            echo "Provinsi : ".$provinsi."<br>";
            echo "Kab/Kota : ".$kabkot."<br>";
            echo "Kecamatan : ".$kecamatan."<br>";
            echo "Desa / Kelurahan : ".$desakel."<br>";
            echo "Alamat : ".$alamat."<br>";
            echo "Kode Pos : ".$kodepos."<br>";
        }

        public function DataAskol($nama_askol,$alamat_sekolah){
            echo "Nama Asal Sekolah : ".$nama_askol."<br>";
            echo "Alamat Sekolah : ".$alamat_sekolah."<br>";
        }

        public function DataOrtu($naleng_ortu,$pekerjaan_ortu,$nohp,$alamat_lengkap){
            echo "Nama Lengkap Orang Tua : ".$naleng_ortu."<br>";
            echo "Pekerjaan Orang Tua : ".$pekerjaan_ortu."<br>";
            echo "Nomor HP : ".$nohp."<br>";
            echo "Alamat Lengkap : ".$alamat_lengkap."<br>";
        }
    }
    $cetak = new Pendaftaran();
    echo "<h2>Data Diri Calon Pendaftar</h2>";
    echo $cetak->dataDiri("Rekayasa Perangkat Lunak","Raihan Ganteng","Laki-laki","Bandung","19 November 2008","0888-0637-2175","muhammadraihanganteng123@gmail.com"); 
    echo "<hr>";

    echo "<h2>Alamat Calon Pendaftar</h2>";
    echo $cetak->AlamatPendaftar("Jawa Barat","Bandung","Dayeuhkolot","Cangkuang","JL.Cibiuk","12345");
    echo "<hr>";

    echo "<h2>Data Asal Sekolah</h2>";
    echo $cetak->DataAskol("SMK Oxford","New Rancamanyar City");
    echo "<hr>";

    echo "<h2>Data Orang Tua</h2>";
    echo $cetak->DataOrtu("Rahasia Ah","Karyawan Swasta","0893-4578-1945","JL.Cibiuk");
    echo "<hr>";

?>