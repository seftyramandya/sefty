<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Wanara</title>
    <style>
        body { font-family: sans-serif; background-color: #1a1a1a; color: white; text-align: center; padding-top: 100px; }
        .box { background-color: #2d2d2d; padding: 30px; display: inline-block; border-radius: 10px; border-left: 5px solid #ff9800; }
    </style>
</head>
<body>
    <div class="box">
        <h1>Selamat Datang, <?php echo $_SESSION['nama']; ?>!</h1>
        <p>Anda masuk sebagai: <strong><?php echo $_SESSION['jabatan']; ?></strong></p>
    </div>
</body>
</html>