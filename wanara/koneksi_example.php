<?php
$host = "localhost";
$user = "root"; // Sesuaikan dengan username database kamu
$pass = "";     // Sesuaikan dengan password database kamu
$db   = "db_wanara";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>