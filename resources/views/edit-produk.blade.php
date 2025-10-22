<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Produk</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #bbdefb, #90caf9);
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
            color: #1565c0;
            margin-bottom: 25px;
        }
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
            font-size: 14px;
            outline: none;
            transition: 0.3s;
        }
        input:focus, select:focus {
            border-color: #1565c0;
            box-shadow: 0 0 6px rgba(21,101,192,0.3);
        }
        button {
            width: 100%;
            background: #1565c0;
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
            background: #0d47a1;
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
    <h2>🔵 Form Edit Produk</h2>
    <form action="/produk/update" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Produk:</label>
        <input type="text" name="nama" value="Laptop Lama" required>

        <label>Harga Produk:</label>
        <input type="number" name="harga" value="4000000" required>

        <label>Kategori:</label>
        <select name="kategori">
            <option value="Elektronik" selected>Elektronik</option>
            <option value="Makanan">Makanan</option>
            <option value="Minuman">Minuman</option>
        </select>

        <button type="submit">💾 Perbarui Data</button>
    </form>
</div>
</body>
</html>
