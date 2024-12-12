<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "dbbudaya";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Function to handle form data and feedback
function handleFormSubmission($conn) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = trim($_POST['nama']);
        $email = trim($_POST['email']);
        $kesan = trim($_POST['kesan']);

        // Validate input fields
        if (empty($nama) || empty($email) || empty($kesan)) {
            return "<div class='message error'>Semua field harus diisi!</div>";
        }

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO `sabtu budaya` (nama, email, kesan) VALUES (?, ?, ?)");
        if ($stmt === false) {
            return "<div class='message error'>Error pada prepare statement: " . $conn->error . "</div>";
        }

        $stmt->bind_param("sss", $nama, $email, $kesan);

        // Execute the statement
        if ($stmt->execute()) {
            $stmt->close();
            return "<div class='message success'>Data berhasil disimpan.</div>";
        } else {
            return "<div class='message error'>Error: " . $stmt->error . "</div>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 60%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        textarea {
            resize: vertical;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .nav-button {
            background-color: #263d27;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            width: 100%;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
            font-size: 16px;
            cursor: pointer;
        }
        .nav-button:hover {
            background-color: #1e2e20;
        }
        .message {
            text-align: center;
            padding: 15px;
            margin-top: 20px;
            font-size: 16px;
            font-weight: bold;
        }
        .success {
            background-color: #dff0d8;
            color: #3c763d;
        }
        .error {
            background-color: #f2dede;
            color: #a94442;
        }
    </style>
</head>
<body>
<div class="footer">
        &copy; 2024 Sabtu Budaya
    </div>

<div class="container">
    <h1>Formulir Kesan dan Pesan</h1>

    <?php
    // Handle form submission and show feedback
    echo handleFormSubmission($conn);
    ?>

    <form action="" method="POST">
        <a href="cobapya.php" class="nav-button">Lihat Postingan</a>
    </form>
</div>

</body>
</html>

<?php

// Close connection
$conn->close();
?>