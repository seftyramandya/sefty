<?php
session_start();
include 'koneksi.php';

// Proteksi: Jika belum login, kembalikan ke form login
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
    <title>Laporan Data - Wanara</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #111a24;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            box-sizing: border-box;
        }
        .container {
            background-color: #17263c;
            width: 100%;
            max-width: 850px;
            padding: 35px;
            border-radius: 12px;
            border-top: 5px solid #f2bd43; 
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
            opacity: 0.7;
        }
        .report-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
            background-color: #0f1926;
            border-radius: 8px;
            overflow: hidden;
        }
        .report-table th {
            background-color: #f2bd43;
            color: #17263c;
            padding: 12px;
            font-weight: bold;
            text-align: left;
            font-size: 14px;
        }
        .report-table td {
            padding: 12px;
            color: #ffffff;
            font-size: 14px;
            border-bottom: 1px solid #23354f;
        }
        .report-table tr:hover {
            background-color: #1c2d47;
        }
        .no-data {
            text-align: center;
            color: #a0aec0;
            font-style: italic;
        }
        .btn-box {
            display: flex;
            justify-content: space-between;
            gap: 15px;
        }
        .btn {
            padding: 10px 20px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 6px;
            font-size: 14px;
            transition: 0.2s;
        }
        .btn-back {
            background-color: #23354f;
            color: #ffffff;
            border: 1px solid #3b557a;
        }
        .btn-back:hover {
            background-color: #2d4363;
        }
        .btn-logout {
            background-color: #ff6b6b;
            color: #ffffff;
        }
        .btn-logout:hover {
            background-color: #e55353;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="title">Daftar Laporan Anggota Kelompok</div>
        <div class="subtitle">Setiap data baru yang diisi akan otomatis bertambah di bawah ini</div>

        <table class="report-table">
            <thead>
                <tr>
                    <th style="width: 8%;">No</th>
                    <th>Nama Lengkap</th>
                    <th style="width: 15%;">NIS</th>
                    <th style="width: 18%;">Kelas</th>
                    <th style="width: 18%;">Jabatan</th>
                </tr>
            </thead>
            <tbody>
            <?php
            // Penyelamat: Agar jika di koneksi.php namanya $conn atau $koneksi, keduanya tetap jalan dan bebas error!
            if (!isset($koneksi) && isset($conn)) {
                $koneksi = $conn;
            }

            // Mengambil semua data anggota dari database, diurutkan dari yang paling baru
            $sql = mysqli_query($koneksi, "SELECT * FROM anggota ORDER BY id DESC");
            $no = 1;

            if ($sql && mysqli_num_rows($sql) > 0) {
                while ($data = mysqli_fetch_array($sql)) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . $data['nama'] . "</td>";
                    echo "<td>" . $data['nis'] . "</td>";
                    echo "<td>" . $data['kelas'] . "</td>";
                    echo "<td>" . $data['jabatan'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5' class='no-data' style='text-align:center; color:#a0aec0; font-style:italic;'>Belum ada data anggota yang diisi.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <div class="btn-box" style="display: flex; gap: 15px; margin-top: 20px;">
        <a href="isi-data.php" class="btn btn-back" style="flex: 1; padding: 12px; text-align: center; text-decoration: none; font-weight: bold; border-radius: 6px; font-size: 14px; background-color: #23354f; color: #ffffff; border: 1px solid #3b557a;">← Tambah Lagi</a>
        
        <a href="indexb.php" class="btn btn-web" style="flex: 1; padding: 12px; text-align: center; text-decoration: none; font-weight: bold; border-radius: 6px; font-size: 14px; background-color: #f2bd43; color: #17263c;">Masuk ke Web Utama →</a>
        
        <a href="logout.php" class="btn btn-logout" style="flex: 1; padding: 12px; text-align: center; text-decoration: none; font-weight: bold; border-radius: 6px; font-size: 14px; background-color: #ff6b6b; color: #ffffff;">Keluar</a>
    </div>
</div>
</body>
</html>
        