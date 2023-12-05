
<!DOCTYPE html>
<html>
<head>
    <title>Hapus Akun</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
        }
        .btn {
            background-color: #dc3545;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hapus Akun</h2>
        <p>Anda yakin ingin menghapus akun Anda? Tindakan ini tidak dapat dibatalkan.</p>
        <form id="Hapusakun-form" method="POST" action="{{ route('deleteAccount.store') }}">
            @csrf
            <button type="submit" class="btn">Hapus Akun</button>
        </form>
        <p><a href="/website">Kembali ke Beranda</a></p>
    </div>
</body>
</html>
