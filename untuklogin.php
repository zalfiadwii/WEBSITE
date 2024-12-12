<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['email'])) {
    // Jika tidak login, arahkan ke halaman login
    header("Location: login.html");
    exit();
}
?>