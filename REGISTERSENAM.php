<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$pesan = ""; // Variabel untuk menyimpan pesan
$form_successful = false; // Variabel untuk menentukan apakah form berhasil disubmit

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_masuk'])) {
    // Ambil data dari form dan sanitasi untuk mencegah XSS
    $id = uniqid();  // Menggunakan uniqid() untuk menghasilkan ID unik
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $kata_sandi = $_POST['kata_sandi'];
    $ulang_sandi = $_POST['ulang_sandi'];

    // Validasi kata sandi
    if ($kata_sandi === $ulang_sandi) {
        // Menyiapkan query dengan prepared statement
        $stmt = $conn->prepare("INSERT INTO registerr (id, Nama, Email, `Buat Kata Sandi`, `Ulangi Kata Sandi`) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $id, $nama, $email, $kata_sandi, $ulang_sandi);

        // Eksekusi query
        if ($stmt->execute()) {
            $pesan = "Yeay prosesnya berhasil!";
            $form_successful = true; // Menandakan bahwa form berhasil disubmit
        } else {
            $pesan = "Error: " . $stmt->error;
        }

        // Tutup statement
        $stmt->close();
    } else {
        $pesan = "Kata sandi dan ulangi kata sandi tidak cocok!";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pra Senam</title>
    <link rel="stylesheet" href="style.css"> <!-- Jika menggunakan file CSS terpisah -->
</head>
<body>
    <div class="pesan">
        <?php if ($pesan != ""): ?>
            <p><?php echo $pesan; ?></p>
        <?php endif; ?>
    </div>

    <h2>Form Login</h2>
    <form method="POST" action="">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="kata_sandi">Kata Sandi:</label><br>
        <input type="password" id="kata_sandi" name="kata_sandi" required><br><br>

        <label for="ulang_sandi">Ulangi Kata Sandi:</label><br>
        <input type="password" id="ulang_sandi" name="ulang_sandi" required><br><br>

        <input type="submit" name="submit_masuk" value="Masuk">
    </form>

    <!-- Tombol Selanjutnya hanya muncul setelah form berhasil disubmit -->
    <?php if ($form_successful): ?>
        <form method="get" action="http://localhost/PUNYA%20PYA/SENAM.html">
            <input type="submit" value="Selanjutnya" />
        </form>
    <?php endif; ?>
    <div class="back-link">
            <a href="http://localhost/PUNYA%20PYA/bismillah.uas.php">Kembali ke Beranda</a>
        </div>
    </div>

    <style>
        /* Atur font dasar */
        body {
            font-family: Arial, sans-serif;
            background-color: #d3a298;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column; /* Menyusun elemen secara vertikal */
        }

        /* Pesan error atau sukses */
        .pesan p {
            color: green;
            font-weight: bold;
        }

        /* Styling form */
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        /* Styling input dan label */
        input[type="text"], input[type="email"], input[type="password"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #f06292;
            border-radius: 5px;
            box-sizing: border-box;
        }

        /* Warna untuk tombol submit */
        input[type="submit"] {
            background-color: #d3a298;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        /* Hover effect untuk tombol */
        input[type="submit"]:hover {
            background-color: #5c4033;
        }

        /* Warna dan ukuran label */
        label {
            color: #5c4033;
            font-size: 14px;
            font-weight: bold;
        }

        /* Judul form */
        h2 {
            color: #5c4033;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
        .back-link a {
            padding: 10px 20px;
            background-color: chocolate;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .back-link a:hover {
            background-color:  #5c4033;
        }
    </style>
</body>
</html>