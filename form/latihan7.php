<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="POST">
            <h2>Form Data Diri</h2>
            <hr color="black" size="3">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value=""></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tempat_lahir" value=""></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_lahir" value=""></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type="radio" name="jenis_kelamin" value="Laki - laki">Laki - laki 
                        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" id=""></textarea></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama" id="">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td>
                        <select name="pendidikan_terakhir" id="">
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMK">SMK</option>
                            <option value="S1">S1</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <select name="status" id="">
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Baru Jadian">Baru Jadian</option>
                            <option value="Ditinggal Nikah">Ditinggal Nikah</option>
                            <option value="Nikah">Nikah</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="hobi" value="Membaca">Membaca
                        <input type="radio" name="hobi" value="Menulis">Menulis
                        <input type="radio" name="hobi" value="Ngepush">Ngepush
                    </td>
                </tr>
                <tr>
                    <td>Cita - cita</td>
                    <td>:</td>
                    <td>
                        <select name="cita_cita" id="">
                            <option value="Programmer">Programmer</option>
                            <option value="Bos Muda">Bos Muda</option>
                            <option value="Masuk Surga">Masuk Surga</option>
                            <option value="B anyak Duit">Banyak Duit</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kata - kata Bijak</td>
                    <td>:</td>
                    <td><textarea name="kata_kata_bijak" id=""></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" value="Gaskeun"></td>
                </tr>
            </table>
        </form>
    </center>
    <hr  color="black" size="3">
</body>
</html>

<?php
    if(isset($_POST['proses'])){
        $nama2 = $_POST['nama'];
        $tempat_lahir2 = $_POST['tempat_lahir'];
        $tanggal_lahir2 = $_POST['tanggal_lahir'];
        $jenis_kelamin2 = $_POST['jenis_kelamin'];
        $alamat2 = $_POST['alamat'];
        $agama2 = $_POST['agama'];
        $last_pendidikan = $_POST['pendidikan_terakhir'];
        $status2 = $_POST['status'];
        $hobi2 = $_POST['hobi'];
        $cita_cita2 = $_POST['cita_cita']; 
        $kata_kata2 = $_POST['kata_kata_bijak'];

        echo "<br><center>
            <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>$nama2</td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>$tempat_lahir2</td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>$tanggal_lahir2</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>$jenis_kelamin2</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>$alamat2</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>$agama2</td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir</td>
                <td>:</td>
                <td>$last_pendidikan</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>$status2</td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>$hobi2</td>
            </tr>
            <tr>
                <td>Cita - cita</td>
                <td>:</td>
                <td>$cita_cita2</td>
            </tr>
            <tr>
                <td>Kata - kata</td>
                <td>:</td>
                <td>$kata_kata2</td>
            </tr>
            </table>
            </center>";
    }
?>