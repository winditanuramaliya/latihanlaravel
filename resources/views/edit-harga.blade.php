<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Harga Produk</title>
</head>
<body>
    <h2>Form Ubah Harga Produk</h2>

    <p>Nama Produk: <b>Laptop ASUS</b></p>
    <p>Kategori: <b>Elektronik</b></p>
    <p>Harga Saat Ini: <b>Rp5.000.000</b></p>

    <form action="/produk/update-harga" method="POST">
        @csrf
        @method('PATCH')

        <label>Harga Baru:</label><br>
        <input type="number" name="harga" value="5000000" required><br><br>

        <button type="submit">Perbarui Harga</button>
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Harga Produk</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e1bee7, #ce93d8);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background: #fff;
            padding: 35px 40px;
            border-radius: 18px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 420px;
            animation: fadeIn 0.8s ease-in-out;
        }
        h2 {
            text-align: center;
            color: #6a1b9a;
            margin-bottom: 25px;
        }
        p {
            color: #444;
            margin: 5px 0;
        }
        label {
            display: block;
            font-weight: 600;
            color: #333;
            margin-bottom: 6px;
        }
        input {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            transition: 0.3s;
        }
        input:focus {
            border-color: #6a1b9a;
            box-shadow: 0 0 6px rgba(106,27,154,0.3);
        }
        button {
            width: 100%;
            background: #6a1b9a;
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
            background: #4a148c;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            transform: translateY(-1px);
        }
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(-20px);}
            to {opacity: 1; transform: translateY(0);}
        }
    </style>
</head>
<body>
<div class="card">
    <h2>🟣 Edit Harga Produk</h2>

    <p><b>Nama Produk:</b> Laptop ASUS</p>
    <p><b>Kategori:</b> Elektronik</p>
    <p><b>Harga Saat Ini:</b> Rp5.000.000</p>

    <form action="/produk/update-harga" method="POST">
        @csrf
        @method('PATCH')

        <label>Harga Baru:</label>
        <input type="number" name="harga" value="5000000" required>

        <button type="submit">💰 Update Harga</button>
    </form>
</div>
</body>
</html>
