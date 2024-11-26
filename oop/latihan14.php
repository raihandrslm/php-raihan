<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <h3>Data Diri Calon Pendaftar</h3>
            <tr>
                <td>Jurusan</td>
                <td></td>
                <td><select name="jurusan" id="">
                    <option value="Pilih Jurusan"></option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
                    <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                </select></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td></td>
                <td><input type="text" name="nama_lengkap"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td></td>
                <td><input type="radio" name="jenis_kelamin" value="Laki - laki">Laki - laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td></td>
                <td><input type="text" name="tempat_lahir"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td></td>
                <td><input type="date" name="tanggal_lahir"></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td></td>
                <td><input type="text" name="no_hp"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td></td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="kirim" value="Gaskeun"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
    if (isset($_POST['kirim'])){
        $jurusan = $_POST['jurusan'];
        $naleng = $_POST['nama_lengkap'];
        $jk = $_POST['jenis_kelamin'];
        $tpl = $_POST['tempat_lahir'];
        $tgl = $_POST['tanggal_lahir'];
        $nohp = $_POST['no_hp'];
        $email = $_POST['email'];

        class ppdb{
            
            public function Daftar($jurusan,$naleng,$jk,$tpl,$tgl,$nohp,$email){

            echo "<br>
            <table style='border-spacing:10px; text-align:left;'>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>$jurusan</td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>$naleng</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>$jk</td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>$tpl</td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>$tgl</td>
            </tr>
            <tr>
                <td>No HP</td>
                <td>:</td>
                <td>$nohp</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>$email</td>
            </tr>
            </table>";
        }
    }

        $cetak = new ppdb();
        echo $cetak->Daftar($jurusan,$naleng,$jk,$tpl,$tgl,$nohp,$email);
}
?>