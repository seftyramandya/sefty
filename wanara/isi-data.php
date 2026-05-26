<?php
session_start();

// Proteksi agar tidak bisa melompati halaman login
if (!isset($_SESSION['status_login']) || $_SESSION['status_login'] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Data - Wanara</title>
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
            max-width: 450px;
            padding: 35px;
            border-radius: 12px;
            border-top: 5px solid #f2bd43; 
            box-sizing: border-box;
            position: relative;
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
            font-size: 14px;
            margin-bottom: 30px;
            opacity: 0.9;
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
        select.form-control {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='10' height='10' fill='%23ffffff'><polygon points='0,0 10,0 5,5'/></svg>");
            background-repeat: no-repeat;
            background-position: right 12px center;
        }
        select.form-control option {
            background-color: #0f1926;
            color: #ffffff;
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
        .btn-logout {
            position: absolute;
            top: 15px;
            right: 15px;
            color: #ff6b6b;
            text-decoration: none;
            font-size: 12px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="card-container">
        <a href="logout.php" class="btn-logout">Logout</a>

        <div class="title">Isi Data Anggota</div>
        <div class="subtitle">Silahkan lengkapi data diri Anda di bawah ini</div>

        <form action="" method="POST">
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap kamu..." required>
            </div>

            <div class="form-group">
                <label>NIS (Nomor Induk Siswa)</label>
                <input type="text" name="nis" class="form-control" placeholder="Masukkan NIS kamu..." required>
            </div>

            <div class="form-group">
                <label>Kelas</label>
                <input type="text" name="kelas" class="form-control" placeholder="Masukkan kelas kamu..." required>
            </div>

            <div class="form-group">
                <label>Jabatan</label>
                <select name="jabatan" class="form-control" required>
                    <option value="" disabled selected>Pilih jabatan...</option>
                    <option value="Ketua">Ketua</option>
                    <option value="Sekretaris">Sekretaris</option>
                    <option value="Bendahara">Bendahara</option>
                    <option value="Anggota">Anggota</option>
                </select>
            </div>

            <button type="submit" name="submit" class="btn-submit">Simpan Data</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            // Memanggil file koneksi database
            include 'koneksi.php';

            // Penyelamat otomatis: menyamakan variabel jika file koneksi menggunakan $conn
            if (!isset($koneksi) && isset($conn)) {
                $koneksi = $conn;
            }

            // Mengambil inputan form dengan aman
            $nama    = htmlspecialchars($_POST['nama']);
            $nis     = htmlspecialchars($_POST['nis']);
            $kelas   = htmlspecialchars($_POST['kelas']);
            $jabatan = htmlspecialchars($_POST['jabatan']);

            // Perintah SQL untuk memasukkan data ke dalam tabel anggota
            $query = "INSERT INTO anggota (nama, nis, kelas, jabatan) VALUES ('$nama', '$nis', '$kelas', '$jabatan')";
            $simpan = mysqli_query($koneksi, $query);

            if ($simpan) {
                // Jika sukses, paksa browser langsung pindah ke halaman tabel laporan
                echo "<script>window.location.href='lihat-data.php';</script>";
                exit();
            } else {
                // Jika gagal, sistem akan menampilkan detail pesan error dari MySQL agar ketahuan rusaknya di mana
                $error_database = mysqli_error($koneksi);
                echo "<script>alert('Gagal menyimpan data ke database! Error: $error_database');</script>";
            }
        }
        ?>
    </div>

</body>
</html>