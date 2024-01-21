<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Peminjaman Buku</title>
    <link rel="stylesheet" href="styleget.css">
  </head>
  <body>
    <h2>Form Peminjaman Buku</h2>

    <form action="get.php" method="GET">

      <label for="judul_buku">Judul Buku:</label>
      <input type="text" name="judul_buku" required /><br />

      <label for="tanggal_pinjam">Tanggal Pinjam:</label>
      <input type="date" name="tanggal_pinjam" required /><br />

      <label for="tanggal_kembali">Tanggal Kembali:</label>
      <input type="date" name="tanggal_kembali" required /><br />

      <input type="submit" value="Pinjam" />
    </form>
  </body>
  <?php
// Validasi input
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $judul_buku = test_input($_GET["judul_buku"]);
    $tanggal_pinjam = test_input($_GET["tanggal_pinjam"]);
    $tanggal_kembali = test_input($_GET["tanggal_kembali"]);

    echo "<P>judul buku: $judul_buku</p>";
    echo "<P>Tanggal pinjam : $tanggal_pinjam </p>";
    echo "<P>Tanggal kembali : $tanggal_kembali </p>";
    echo "Peminjaman berhasil! HARAP KEMBALIKAN BUKU TEPAT WAKTU";

} else {
  echo "<p>Harap Isi Terlebih Dahulu</p>";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

</html>
