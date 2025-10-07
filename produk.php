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
  ?>

  <h2> <?php echo $nama_produk ?> </h2>
  <p> <?php echo $harga_produk ?> </p>
  <p> <?php echo $harga_diskon ?> </p>
</body>
</html>