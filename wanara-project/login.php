<?php
session_start();

$error_message = "";

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Menerima nama siapa saja, password kelompok tetap 123
    if (!empty($username) && $password == "123") {
        $_SESSION['status_login'] = true;
        $_SESSION['user_nama'] = $username;

        header("Location: isi-data.php");
        exit(); 
    } else {
        $error_message = "Password yang Anda masukkan salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Wanara</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #111a24;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .card-container {
            background-color: #17263c;
            width: 100%;
            max-width: 400px;
            padding: 35px;
            border-radius: 12px;
            border-top: 5px solid #f2bd43; 
            box-sizing: border-box;
            box-shadow: 0 10px 25px rgba(0,0,0,0.4);
        }
        .title {
            color: #f2bd43;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 5px;
        }
        .subtitle {
            color: #ffffff;
            text-align: center;
            font-size: 13px;
            margin-bottom: 25px;
            opacity: 0.8;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            color: #ffffff;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 8px;
        }
        .form-control {
            width: 100%;
            padding: 12px;
            background-color: #0f1926;
            border: 1px solid #23354f;
            border-radius: 6px;
            color: #ffffff;
            font-size: 14px;
            box-sizing: border-box;
        }
        .form-control:focus {
            outline: none;
            border-color: #f2bd43;
        }
        .btn-submit {
            width: 100%;
            padding: 12px;
            background-color: #f2bd43;
            border: none;
            border-radius: 6px;
            color: #17263c;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }
        .error-box {
            background-color: #721c24;
            color: #f8d7da;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 13px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="card-container">
        <div class="title">LOGIN WANARA</div>
        <div class="subtitle">Silahkan masukkan nama/username Anda</div>

        <?php if (!empty($error_message)) : ?>
            <div class="error-box"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <form action="" method="POST">
            <div class="form-group">
                <label>Username / Nama</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan nama kamu..." required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan password kelompok..." required>
            </div>

            <button type="submit" name="login" class="btn-submit">Masuk</button>
        </form>
    </div>

</body>
</html>