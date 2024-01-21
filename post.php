<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Perpustakaan</title>
    <link rel="stylesheet" href="stylepost.css">
</head>
<body>
    <div class="tabel">
    <h2>Login Perpustakaan</h2>
    <form method="post" action="get.php">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama">
        <br>

        <label for="nisn">NISN :</label>
        <input type="nisn" name="nisn" id="nisn">
        <br>

        <label for="kelas">Kelas:</label>
        <select name="kelas" id="kelas">
        <option value="rpl">RPL</option>
        <option value="tkj">TKJ</option>
        <option value="ki">KI</option>
        <option value="dpib">DPIB</option>
        <option value="titl">TITL</option>
        <option value="tsm">TSM</option>
        <option value="tpm">TPM</option>
        <option value="tkr">TKR</option>  
        </select>
        <br>

        <input type="submit" value="Login">
    </form>
    </div>
</body>
<?php
// Fungsi untuk membersihkan dan melindungi input
function test_input($data) {
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = test_input($_POST["nama"]);
    $nisn = test_input($_POST["nisn"]);
    $kelas = test_input($_POST["kelas"]);
    if ($nama && $nisn  && $kelas) {
        echo "Login berhasil!";
        // Redirect atau lakukan aksi lain setelah login berhasil
    } else {
        $errors["login"] = "nama, nisn, atau kelas salah";
    }
 }
?>
</html>
