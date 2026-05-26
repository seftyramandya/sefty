<?php
include 'koneksi.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; // Password teks biasa sesuai request tugas sekolah

    // Cek apakah username sudah pernah terdaftar atau belum
    $cek_user = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    
    if (mysqli_num_rows($cek_user) > 0) {
        $error = "Username sudah digunakan! Silahkan cari nama lain.";
    } else {
        // Masukkan username dan password baru ke database (data diri dibiarkan kosong dulu)
        $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if (mysqli_query($conn, $query)) {
            echo "<script>
                    alert('Pendaftaran akun berhasil! Silahkan login.');
                    window.location.href = 'login.php';
                  </script>";
        } else {
            $error = "Gagal mendaftar: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Akun - Wanara</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #0b132b;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-box {
            background-color: #1c2541;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
            width: 350px;
            border-top: 5px solid #ffbc42;
        }
        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #ffbc42;
        }
        .input-group {
            margin-bottom: 20px;
        }
        .input-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #48567b;
            background-color: #0b132b;
            color: #fff;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .btn-register {
            width: 100%;
            padding: 11px;
            background-color: #ffbc42;
            border: none;
            color: #0b132b;
            font-weight: bold;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        .btn-register:hover {
            background-color: #e0a33a;
        }
        .error {
            color: #ff4d4d;
            font-size: 14px;
            text-align: center;
            margin-bottom: 15px;
        }
        .link-login {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #ffbc42;
            text-decoration: none;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="register-box">
    <h2>DAFTAR AKUN</h2>
    
    <?php if (isset($error)) : ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>

    <form action="" method="POST">
        <div class="input-group">
            <label>Buat Username</label>
            <input type="text" name="username" required autocomplete="off">
        </div>
        <div class="input-group">
            <label>Buat Password</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit" name="register" class="btn-register">Daftar Sekarang</button>
        <a href="login.php" class="link-login">Sudah punya akun? Login di sini</a>
    </form>
    <a href="register.php" style="display: block; text-align: center; margin-top: 15px; color: #ffbc42; text-decoration: none; font-size: 14px;">Belum punya akun? Daftar di sini</a>
</div>

</body>
</html>