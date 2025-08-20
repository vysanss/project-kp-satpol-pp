<!DOCTYPE html>
<html>
<head>
    <title>Admin Alert</title>
    <script>
        alert("Akses halaman admin terdeteksi!");
    </script>
    <style>
        body {
            background: linear-gradient(135deg, #f44336 0%, #ff9800 100%);
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .alert-container {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.15);
            padding: 40px 32px;
            text-align: center;
            max-width: 400px;
        }
        .alert-icon {
            font-size: 48px;
            color: #f44336;
            margin-bottom: 16px;
        }
        h2 {
            color: #333;
            margin-bottom: 12px;
        }
        .desc {
            color: #666;
            font-size: 16px;
            margin-bottom: 24px;
        }
        .btn-login {
            background: #f44336;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 12px 32px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.2s;
            text-decoration: none;
            display: inline-block;
        }
        .btn-login:hover {
            background: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="alert-container">
        <div class="alert-icon">&#9888;</div>
        <h2>Akses Ditolak</h2>
        <div class="desc">Tolong, login sebagai admin terlebih dahulu untuk mengakses halaman ini.</div>
        <a href="/admin/login" class="btn-login">Login Admin</a>
    </div>
</body>
</html>
