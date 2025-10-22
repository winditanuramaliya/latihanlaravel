<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Produk</title>
</head>
<body>
    <h2>Form Input Produk</h2>

    <form action="/kirim-produk" method="POST">
        @csrf <!-- Token keamanan wajib di setiap form POST -->

        <label>Nama Produk:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Harga Produk:</label><br>
        <input type="number" name="harga" required><br><br>

        <label>Kategori:</label><br>
        <select name="kategori">
            <option value="Makanan">Makanan</option>
            <option value="Minuman">Minuman</option>
            <option value="Elektronik">Elektronik</option>
        </select><br><br>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Produk</title>
    <style>
        /* ====== Gaya Umum ====== */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #e8f5e9, #a5d6a7);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* ====== Kartu Form ====== */
        .card {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 420px;
            animation: fadeIn 0.8s ease-in-out;
        }

        h2 {
            text-align: center;
            color: #2e7d32;
            margin-bottom: 25px;
        }

        /* ====== Label dan Input ====== */
        label {
            display: block;
            font-weight: 600;
            color: #333;
            margin-bottom: 6px;
        }

        input, select {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            transition: 0.3s ease;
            font-size: 14px;
        }

        input:focus, select:focus {
            border-color: #2e7d32;
            box-shadow: 0 0 6px rgba(46, 125, 50, 0.3);
        }

        /* ====== Tombol ====== */
        button {
            width: 100%;
            background-color: #2e7d32;
            color: white;
            border: none;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #1b5e20;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }

        /* ====== Animasi Masuk ====== */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Form Input Produk</h2>

        <form action="/kirim-produk" method="POST">
            @csrf

            <label>Nama Produk:</label>
            <input type="text" name="nama" placeholder="Masukkan nama produk" required>

            <label>Harga Produk:</label>
            <input type="number" name="harga" placeholder="Masukkan harga" required>

            <label>Kategori:</label>
            <select name="kategori" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Makanan">Makanan</option>
                <option value="Minuman">Minuman</option>
                <option value="Elektronik">Elektronik</option>
            </select>

            <button type="submit">🚀 Kirim Produk</button>
        </form>
    </div>
</body>
</html>
