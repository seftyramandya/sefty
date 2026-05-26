<?php
session_start();
session_destroy(); // Menghapus seluruh session aktif
header("Location: login.php"); // Mengembalikan user ke halaman login
exit();
?>