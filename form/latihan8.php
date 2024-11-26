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
            <h2 >Nilai Ujian Sekolah</h2>
            <hr color="black" size="3">
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value=""></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" value=""></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <select name="jurusan" id="">
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
                            <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><b>Masukkan Nilai</b></td>
                </tr>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="text" name="nilai_harian" value="">40%</td>
                </tr>
                <tr>
                    <td>Nilai Sikap</td>
                    <td>:</td>
                    <td><input type="text" name="nilai_sikap" value="">20%</td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="text" name="nilai_uts" value="">20%</td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="text" name="nilai_uas" value="">20%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" value="Gaskeun"></td>
                </tr>
            </table>
        </form>
    </center>
    <hr color="black" size="3">
</body>
</html>

<?php
    if(isset($_POST['proses'])){
        $nama1 = $_POST['nama'];
        $kelas1 = $_POST['kelas'];
        $jurusan1 = $_POST['jurusan'];
        $nilai_harian1 = $_POST['nilai_harian'];
        $nilai_sikap1 = $_POST['nilai_sikap'];
        $nilai_uts1 = $_POST['nilai_uts'];
        $nilai_uas1 = $_POST['nilai_uas'];   
    }
        $hiji = $nilai_harian1;
        $dua = $nilai_sikap1;
        $tilu = $nilai_uts1;
        $opat = $nilai_uas1;    

        $harian = $hiji * 0.4;
        $sikap = $dua * 0.2;
        $uts = $tilu * 0.2;
        $uas = $opat * 0.2;
        $rata_rata = $harian + $sikap + $uts + $uas;

        $keterangan = $rata_rata > 75 ? "<b>Mantapp Anda Lulus</b>" : "<b>Wkwk Kasian Ga Lulus</b>";

        echo "<br><center>
            <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>$nama1</td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>$kelas1</td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>$jurusan1</td>
            </tr>
            <tr>
                <td>Nilai Harian</td>
                <td>:</td>
                <td>$nilai_harian1</td>
            </tr>
            <tr>
                <td>Nilai Sikap</td>
                <td>:</td>
                <td>$nilai_sikap1</td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td>$nilai_uts1</td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td>$nilai_uas1</td>
            </tr>
            <tr>
                <td>Rata - rata</td>
                <td>:</td>
                <td>$rata_rata</td>
            </tr> 
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td>$keterangan</td>
            </tr> 
            </table>
            </center>";
?>