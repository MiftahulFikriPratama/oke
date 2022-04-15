<?php
  class bmiPasien
  {
      public $tanggal,
      $nama,
      $berat,
      $tinggi,
      $umur,
      $jenisKelamin;

    public function hasilBMI()
    {
     return "<b>Nama : $this->nama <br><br>
             Berat Badan : $this->berat <br><br>
             Tinggi Badan : $this->tinggi <br><br>
             Jenis Kelamin : $this->jenisKelamin</b>";
    }
    public function statusBMI($BMI)
    {
        if ($BMI < 18.5){
            return "<td>Kekurangan Berat Badan</td>";
        } else if ($BMI >= 18.5 && $BMI <= 24.9) {
            return "<td>Normal (ideal)</td>";
        } else if ($BMI >= 25.0 && $BMI <= 29.9) {
            return "<td>Kelebihan Berat Badan</td>";
        } else {
            return "<td>Kegemukan (Obesitas) </td>";
        }
    }
    
  }
  if (isset($_GET["nama_lengkap"])) {
    $bmi = new bmiPasien;
    $bmi->tanggal = $_GET["tanggal"];
    $bmi->nama = $_GET["nama_lengkap"];
    $bmi->berat = $_GET["berat__"];
    $bmi->tinggi = $_GET["tinggi__"];
    $bmi->umur = $_GET["umur__"];
    $bmi->jenisKelamin = $_GET["jenis_kelamin"];
  }
  $pasien1 =['tanggal' => "03-10-2020", 'nama' => 'fikri pratama', 'kelamin' => 'laki-laki', 'umur' => 18, 'berat' => 46.2, 'tinggi' => 155];
  $pasien2 =['tanggal' => "12-11-2021", 'nama' => 'azahudi', 'kelamin' => 'laki-laki', 'umur' => 20, 'berat' => 42.8, 'tinggi' => 158];
  $pasien3 =['tanggal' => "27-07-2022",'nama' => 'syakira', 'kelamin' => 'perempuan', 'umur' => 22, 'berat' => 90.3, 'tinggi' => 154];
  $pasien4 =['tanggal' => $bmi->tanggal, 'nama' => $bmi->nama, 'kelamin' => $bmi->jenisKelamin, 'umur' => $bmi->umur, 'berat' => $bmi->berat, 'tinggi' => $bmi->tinggi];

  $ar_pasien = [$pasien1, $pasien2, $pasien3, $pasien4];
?>