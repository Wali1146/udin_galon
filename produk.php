<!DOCTYPE html>
<html lang="id">
<head>
  <title>Profil Pengguna</title>
</head>
<body>

  <?php
    // Definisikan beberapa variabel di sini
    $nama_produk = "Buku PHP untuk pemula";
    $harga_produk = "120000";
    $diskon = 0.1;
    $harga_diskon = $harga_produk - ($harga_produk * $diskon);
  ?>

  <h2> <?php echo $nama_produk ?> </h2>
  <p> <?php echo $harga_produk?></p>
  <p> <?php echo $harga_diskon ?></p>
</body>
</html>