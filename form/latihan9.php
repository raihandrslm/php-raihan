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
            <h2>Form Bilangan</h2>
            <table>
                <tr>
                    <td>Masukkan Bilangan</td>
                    <td>:</td>
                    <td><input type="text" name="masukkan_bilangan" value=""></td>
                </tr>
                <tr>
                    <td>Jenis Bilangan</td>
                    <td>:</td>
                    <td>
                        <select name="jenis_bilangan" value="">
                            <option value="Kelipatan3">Kelipatan 3</option>
                            <option value="Ganjil">Ganjil</option>
                            <option value="Genap">Genap</option>
                            <option value="Besar ke Terkecil">Besar ke Terkecil</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="kirim" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </center> 
</body>
</html>

<?php
    if(isset($_POST['kirim'])){
        $bilangan = $_POST['masukkan_bilangan'];
        $jenis = $_POST['jenis_bilangan'];

        if ($jenis == "Besar ke Terkecil"){
            for ($i = $bilangan; $i >= 1 ; $i--){
                echo "$i";
            }
        } else if ($jenis == "Ganjil"){
            for ($i = 1; $i <= $bilangan ; $i+=2){
                echo "$i";
            }
        } else if ($jenis == "Genap"){ 
            for ($i = 2; $i <= $bilangan ; $i+=2){
                echo "$i";
            }
        } else if ($jenis == "Kelipatan3"){
            for ($i = 3; $i <= $bilangan ; $i+=3){
                echo "$i";
            }
        }
    }
?>