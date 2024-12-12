<?php
// Koneksi ke database
$host = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'dbbudaya';

$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Buat database dan tabel jika belum ada
$createDatabase = "CREATE DATABASE IF NOT EXISTS $database";
$conn->query($createDatabase);

$conn->select_db($database);

$createTable = "
CREATE TABLE IF NOT EXISTS `sabtu budaya` (
    `ID` INT AUTO_INCREMENT PRIMARY KEY,
    `Nama` VARCHAR(100) NOT NULL,
    `Email` VARCHAR(100) NOT NULL,
    `Kesan` TEXT NOT NULL
)";
$conn->query($createTable);

// Tambahkan data awal jika tabel kosong
$checkData = "SELECT COUNT(*) AS total FROM `sabtu budaya`";
$result = $conn->query($checkData);
$row = $result->fetch_assoc();

if ($row['total'] == 0) {
    $insertData = "
    INSERT INTO `sabtu budaya` (`Nama`, `Email`, `Kesan`) 
    VALUES
        ('John Doe', 'john.doe@example.com', 'Kegiatan ini sangat bermanfaat.'),
        ('Jane Smith', 'jane.smith@example.com', 'Saya sangat menikmati sesi hari ini.'),
        ('Ahmad Ali', 'ahmad.ali@example.com', 'Sabtu Budaya membuka wawasan saya.');
    ";
    $conn->query($insertData);
}

// Query untuk mengambil data
$sql = "SELECT Nama, Email, Kesan FROM `sabtu budaya`";
$result = $conn->query($sql);

// Ambil data dari database
$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Tutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabtu Budaya</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
            padding: 20px;
            background-color: #8B4513;
            color: white;
            margin-bottom: 20px;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #8B4513;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        .footer {
            text-align: center;
            padding: 10px;
            background-color: #8B4513;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Bagikan Kesan dan Ceritakan Keseruan Sabtu Budayamu!</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Kesan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $item): ?>
                <tr>
                    <td><?= htmlspecialchars($item['Nama']) ?></td>
                    <td><?= htmlspecialchars($item['Email']) ?></td>
                    <td><?= htmlspecialchars($item['Kesan']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
<div class="footer">
        &copy; 2024 Sabtu Budaya
    </div>
</html>
