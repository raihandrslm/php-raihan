<?php
    $jabatan = "Project Manager";
    $absen = "1";
    $performa = "100";

    switch ($jabatan){
        case 'Programmer Junior':
            $gaji_dasar = 6000000; 
            break;
        case 'Programmer Senior':
            $gaji_dasar = 10000000;
            break;
        case 'Project Manager':
            $gaji_dasar = 15000000;
            break;
        default:
            $gaji_dasar = 0;
            break; 
    }
    $kehadiran = $absen ? 200000 : 0;

    if ($performa > 90){
        $bonus_kinerja = $gaji_dasar * 0.1;
    } else if ($performa >= 75 && $performa <= 90){
        $bonus_kinerja = $gaji_dasar * 0.05;
    } else {
        $bonus_kinerja = 0;
    }

    $total_gaji = $gaji_dasar + $kehadiran + $bonus_kinerja;
    $pajak_penghasilan = $total_gaji * 0.05;
    $total_gaji_bersih = $total_gaji - $pajak_penghasilan;

    echo "<h2>PT. Han Technology</h2>";
    echo "Jabatan : $jabatan <br>";
    echo "Gaji Dasar : Rp" . number_format($gaji_dasar, 0, ".",".");
    echo "<br> Tunjangan Kehadiran : Rp" . number_format($kehadiran, 0, ".",".");
    echo "<br> Bonus Kinerja : Rp" . number_format($bonus_kinerja, 0, ".",".");
    echo "<br> Total Gaji Sebelum Pajak : Rp" . number_format($total_gaji, 0, ".",".");
    echo "<br> Pajak Penghasilan Rp" . number_format($pajak_penghasilan, 0, ".",".");
    echo "<br> Total Gaji Bersih Rp" . number_format($total_gaji_bersih, 0, ".",".");
?>