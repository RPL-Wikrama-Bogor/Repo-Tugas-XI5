<html>
  <head>
    <title>Kompensasi Pegawai</title>
    <style>
        body {
            text-align: center;
        }
    </style>
  </head>
  <body>
    <h1>Kompensasi Pegawai</h1>
    <form action="" method="post">
      <label for="jam_masuk">Jam Masuk:</label>
      <input type="time" id="jam_masuk" name="jam_masuk" required><br><br>
      <label for="jam_pulang">Jam Pulang:</label>
      <input type="time" id="jam_pulang" name="jam_pulang" required><br><br>
      <h5>default jam kerja biasa adalah 8 jam</h5><br><br>
      <input type="submit" value="Hitung Kompensasi">
      <input type="reset" value="Reset">
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jam_masuk = $_POST["jam_masuk"];
        $jam_pulang = $_POST["jam_pulang"];

        // Konversi jam masuk dan pulang ke format jam dan menit
        $jam_masuk_array = explode(":", $jam_masuk);
        $jam_pulang_array = explode(":", $jam_pulang);
        $jam_masuk_jam = (int) $jam_masuk_array[0];
        $jam_masuk_menit = (int) $jam_masuk_array[1];
        $jam_pulang_jam = (int) $jam_pulang_array[0];
        $jam_pulang_menit = (int) $jam_pulang_array[1];

        // Hitung lama kerja dalam jam
        $lama_kerja_jam = $jam_pulang_jam - $jam_masuk_jam;
        $lama_kerja_menit = $jam_pulang_menit - $jam_masuk_menit;
        if ($lama_kerja_menit < 0) {
          $lama_kerja_jam--;
          $lama_kerja_menit += 60;
        }
        $lama_kerja = $lama_kerja_jam + ($lama_kerja_menit / 60);

        // Hitung jam Lembur
        $jam_lebih = $lama_kerja - 8;

        // Hitung kompensasi
        if ($jam_lebih > 0) {
          $kompensasi = 50000; // Rp. 50.000 untuk 1 jam pertama
          if ($jam_lebih > 1) {
            $kompensasi += ($jam_lebih - 1) * 25000; // Rp. 25.000 untuk jam berikutnya
          }
        } else {
          $kompensasi = 0;
        }

        // Tampilkan hasil
        echo "Lama Kerja: " . number_format($lama_kerja, 2) . " jam<br>";
        echo "Jam Lebih: " . number_format($jam_lebih, 2) . " jam<br>";
        echo "Jumlah Kompensasi: Rp. " . number_format($kompensasi, 0) . "<br>";
      }
    ?>
  </body>
</html>