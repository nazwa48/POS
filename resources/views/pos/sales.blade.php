<!DOCTYPE html>
<html>
<head>
    <title>Halaman Penjualan - POS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        form {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
            color: #666;
        }
        select, input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        p {
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Halaman Transaksi POS</h1>
        
        <form action="{{ route('process.sale') }}" method="post">
            @csrf
            <label for="product">Pilih Produk:</label>
            <select name="product" id="product">
                <option value="sabun-cuci-piring">Sabun Cuci Piring</option>
                <option value="minuman-energi">Minuman Energi</option>
                <option value="biskuit">Biskuit</option>
                <option value="sampo-rambut">Sampo Rambut</option>
                <option value="pelembab-wajah">Pelembab Wajah</option>
                <option value="obat-flu">Obat Flu</option>
                <option value="pengharum-ruangan">Pengharum Ruangan</option>
                <option value="lampu-hias">Lampu Hias</option>
                <option value="pakaian-anak">Pakaian Anak</option>
                <option value="boneka">Boneka</option>
                <option value="susu-bayi">Susu Bayi</option>

            </select>

            <label for="quantity">Jumlah:</label>
            <input type="number" name="quantity" id="quantity" min="1" value="1">

            <button type="submit">Proses Penjualan</button>
        </form>

        <p>Silakan pilih produk dan masukkan jumlahnya untuk memulai transaksi.</p>
    </div>
</body>
</html>
