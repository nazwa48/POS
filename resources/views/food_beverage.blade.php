<!-- food_beverage.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk Makanan & Minuman</title>
</head>
<body>
    <h1>Daftar Produk Makanan & Minuman</h1>

    <ul>
        @foreach ($products as $product)
            <li>{{ $product }}</li>
        @endforeach
    </ul>
</body>
</html>
