<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Hello, world!</title>
  </head>
  <body class="table table-success table-striped">
    <h1 class="text-center">Form Pasien</h1>
    

<form action="halamanBMI.php" method="GET" >
<div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label text-center">Tanggal Periksa</label> 
    <div class="col-8">
      <input id="tanggal" name="tanggal" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama_lengkap" class="col-4 col-form-label text-center">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama_lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="berat__" class="col-4 col-form-label text-center">Berat</label> 
    <div class="col-8">
      <input id="berat__" name="berat__" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-4 col-form-label text-center">Tinggi</label> 
    <div class="col-8">
      <input id="tinggi__" name="tinggi__" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="umur__" class="col-4 col-form-label text-center">Umur</label> 
    <div class="col-8">
      <input id="umur" name="umur__" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 text-center">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="laki" type="radio" class="custom-control-input" value="laki-laki"> 
        <label for="laki" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="perempuan" type="radio" class="custom-control-input" value="perempuan"> 
        <label for="perempuan" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
<hr>
<?php require_once "classBMI.php"; ?>

    <div class="container">
    <h2 class="text-center mb-5">Data BMI Pasien</h2>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">tanggal Periksa</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Gender</th>
                <th scope="col">Umur</th>
                <th scope="col">Berat (kg)</th>
                <th scope="col">Tinggi (cm)</th>
                <th scope="col">BMI</th>
                <th scope="col">Hasil</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($ar_pasien as $pasien) {
                echo '<tr><td>' . $nomor . '</td>';
                echo '<td>' . $pasien['tanggal'] . '</td>';
                echo '<td>' . $pasien['nama'] . '</td>';
                echo '<td>' . $pasien['kelamin'] . '</td>';
                echo '<td>' . $pasien['umur'] . '</td>';
                echo '<td>' . $pasien['berat'] . '</td>';
                echo '<td>' . $pasien['tinggi'] . '</td>';
                $BMI = $pasien["berat"] / (($pasien["tinggi"] / 100) ** 2);
                echo '<td>' . number_format($BMI, 1) . '</td>';
                $status = new bmiPasien();
                echo $status->statusBMI($BMI);
                echo '</tr>';
                $nomor++;
            }
            ?>
        </tbody>
    </table>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>