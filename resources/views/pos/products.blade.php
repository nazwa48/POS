<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kategori - POS</title>
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
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        li {
            margin-bottom: 10px;
        }
        a {
            display: block;
            padding: 10px 20px;
            background-color: #7da9f0;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Kategori</h1>
        <ul>
            <li><a href="{{ url('/category/food-beverage') }}">Makanan & Minuman</a></li>
            <li><a href="{{ url('/category/beauty-health') }}">Kecantikan & Kesehatan</a></li>
            <li><a href="{{ url('/category/home-care') }}">Perawatan Rumah</a></li>
            <li><a href="{{ url('/category/baby-kid') }}">Bayi & Anak-anak</a></li>
        </ul>
    </div>
</body>
</html>
