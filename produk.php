<!DOCTYPE html>
<html lang="id">
<head>
  <title>Profil Pengguna</title>
</head>
<body>

  <?php
  // Variabel
  $nama_produk = "Buku PHP untuk pemula";
  $harga_produk = "120000";
  $diskon = 0.1;
  $harga_diskon = $harga_produk - ($harga_produk * $diskon);
  $nilai = 50;
  $hari = "jumat";
  $buah = ["mangga muda", "mangga arum manis", "mangga golek", "mangga indramayu"];
  $angka = 6;

  // Struktur Kontrol
  if ($nilai > 90) {
    echo "<h1>Luar biasa</h1>";
  } elseif ($nilai > 80) {
    echo "<h1>Baik</h1>";
  } elseif ($nilai > 70) {
    echo "<h1>Cukup</h1>";
  } else {
    echo "<h1>kurang</h1>";
  }

  switch ($hari) {
    case "jumat";
      echo "Diskon 15% untuk semua produk!";
      break;
    case "sabtu";
      echo "Nikmati promo beli 1 gratis 1!";
      break;
    default;
      echo "Belum ada promo hari ini.";
  }

  for ($i = 1; $i <= 10; $i++) {
    echo "<p>$i. Saya belajar php dan itu menyenangkan!</p>";
  }

  echo "<table border = 1><tr><th>No</th><th>Nama Buah</th></tr>";
  foreach ($buah as $mangga) {
    echo "<tr><td>$angka</td><td>$mangga</td></tr>";
    $angka++;
  }
  echo "</table><br>";

  do {
    echo "hitung mundur: $angka <br><br>";
    $angka--;
  } while ($angka >= 1);{
    echo "meluncur........ DUAR!!! <br>";
  }
  ?>
  <h2> <?php echo $nama_produk ?> </h2>
  <p> <?php echo "Harga normal: $harga_produk" ?> </p>
  <p> <?php echo "Harga diskon: $harga_diskon" ?> </p>
</body>
</html>