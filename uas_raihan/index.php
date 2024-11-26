<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
    body{
        background: linear-gradient(to right,#0575E6,#021B79)
    }
</style>

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <center><img src="madrid.png" alt="" width="25%"></center>
        <h1 class ="text-center">PENGGAJIHAN</h1>
        <h1 class ="text-center ">GURU/KARYAWAN YAYASAN ASSALAAM</h1>
        <br>
        <form action="" method="post">
        <div class="card">
        <div class="card-header">
             Data Penggajihan
        </div>
        <div class="card-body">
            <p>No</p>
        <input type="text" name="no" id="" placeholder="No" class="form-control">
        <br>
        <p>Nama</p>
        <input type="text" name="nama" id="" placeholder="Nama" class="form-control">
        <br>
        <p>Unit Pendidikan</p>
        <select name="unit" id="" class="form-select">
            <option value="">Pilih Unit Pendidikan</option>
            <option value="TK">TK</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="MTs">MTs</option>
            <option value="MA">MA</option>
            <option value="SMA">SMA</option>
            <option value="SMK">SMK</option>
        </select>
        <br>
        <p>Tanggal Gaji</p>
        <input type="date" name="tgl_gaji" id="" class="form-control">
        <br>

        <div class="container">
  <div class="row">
    <div class="col">
      <h2 class="text-center"><b>Gaji</b></h2>
      <p>Jabatan</p>
      <select name="jabatan" id="" class="form-select">
        <option value="">Pilih Jabatan</option>
        <option value="Kepala Sekolah">Kepala Sekolah</option>
        <option value="Wakasek">Wakasek</option>
        <option value="Guru">Guru</option>
        <option value="Karyawan">Karyawan</option>
      </select>
      <br>
      <p>Lama Kerja</p>
        <input type="text" name="lama_kerja" id="" placeholder="Lama Kerja" class="form-control">
        <br>
        <p>Status Kerja</p>
      <select name="status" id="" class="form-select">
        <option value="">Pilih Status Kerja</option>
        <option value="Tetap">Tetap</option>
        <option value="Kontrak">Kontrak</option>
      </select>
      <br>
    </div>
    <div class="col">
      <h2 class="text-center"><b>Potongan</b></h2>
      <p>BPJS</p>
      <input type="number" name="bpjs" placeholder="BPJS" class="form-control">
      <br>
      <p>Pinjaman</p>
      <input type="number" name="pinjaman" placeholder="Pinjaman" class="form-control">
      <br>
    <p>Cicilan</p>
    <input type="number" name="cicilan" placeholder="Cicilan" class="form-control">
    <br>
    <p>Infaq</p>
    <input type="number" name="infaq" placeholder="Infaq" class="form-control">
    <br>
    </div>
  </div>
        <center><button class="btn btn-primary " name="proses">Gaskeun</button></center>
  </div>
</div>
    </form></div>

    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php
if(isset($_POST['proses'])) {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unitpen = $_POST['unit'];
    $tgl_gaji = $_POST['tgl_gaji'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['lama_kerja'];
    $stat_kerja = $_POST['status'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $cicilan = $_POST['cicilan'];
    $infaq = $_POST['infaq'];

 $gaji = [
        'Kepala Sekolah' => 10000000,
        'Wakasek' => 7000000,
        'Guru' => 5000000,
        'Karyawan' => 2500000
    ];

    if($stat_kerja == "Tetap"){
      $bonus = 1000000;
    }else if($status_kerja == "Kontrak"){
      $bonus = 0;
    }else{
      echo "wkwk Kasian Error!!";
    }
    $hasil_gaji = $gaji[$jabatan];
    $gaber = ($hasil_gaji + $bonus) - ($bpjs + $pinjaman + $cicilan + $infaq);



    class Gaji{
      function strukGaji($no2,$nama2,$unitpen2,$tgl_gaji2,$jabatan2,$gaji2,$lama_kerja2,$stat_kerja2,$bonus2,$bpjs2,$pinjaman2,$cicilan2,$infaq2,$gaber2){
      echo "<table align='center'>";
      echo "<tr>
            <td><b>No</b></td>
            <td>:</td>
            <td>$no2</td>
            </tr>";
      echo "<tr>
            <td><b>Nama</b></td>
            <td>:</td>
            <td>$nama2</td>
            </tr>";
      echo "<tr>
            <td><b>Unit Pendidikan</b></td>
            <td>:</td>
            <td>$unitpen2</td>
            </tr>";
      echo "<tr>
            <td><b>Tanggal Gaji</b></td>
            <td>:</td>
            <td>$tgl_gaji2</td>
            </tr>";
      echo "<tr>
            <td><b>Jabatan</b></td>
            <td>:</td>
            <td>$jabatan2</td>
            </tr>";
      echo "<tr>
            <td><b>Gaji</b></td>
            <td>:</td>
            <td>$gaji2</td>
            </tr>";
      echo "<tr>
            <td><b>Lama Kerja</b></td>
            <td>:</td>
            <td>$lama_kerja2</td>
            </tr>";
      echo "<tr>
            <td><b>Status Kerja</b></td>
            <td>:</td>
            <td>$stat_kerja2</td>
            </tr>";
      echo "<tr>
            <td><b>Bonus</b></td>
            <td>:</td>
            <td>$bonus2</td>
            </tr>";
      echo "<tr>
            <td><b>BPJS</b></td>
            <td>:</td>
            <td>$bpjs2</td>
            </tr>";
      echo "<tr>
            <td><b>Pinjaman</b></td>
            <td>:</td>
            <td>$pinjaman2</td>
            </tr>";
      echo "<tr>
            <td><b>Cicilan</b></td>
            <td>:</td>
            <td>$cicilan2</td>
            </tr>";
      echo "<tr>
            <td><b>Infaq</b></td>
            <td>:</td>
            <td>$infaq2</td>
            </tr>";
      echo "<tr>
            <td><b>Gaji Bersih</b></td>
            <td>:</td>
            <td>$gaber2</td>
            </tr>";
      echo "</table>";
    }
    }
    $gaji = new Gaji();
     echo "<div class='card mt-5 ms-5 me-5 ps-5 pe-5'><div class='card-body fs-3'>";
    echo "<h1 class='text-center'><b>STRUK GAJI</b></h1>";
    $gaji->strukGaji($no,$nama,$unitpen,$tgl_gaji,$jabatan,$hasil_gaji,$lama_kerja,$stat_kerja,$bonus,$bpjs,$pinjaman,$cicilan,$infaq,$gaber);
     echo "</div></div>";
  }