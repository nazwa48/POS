<html>
<head>
<title>Daftar Produk Berdasarkan Kategori - POS</title>
</head>
<body>
<h1>Daftar Produk untuk Kategori: {{ $category }}</h1>
<ul>
@foreach ($products as $product)
    <li>{{ $product }}</li>
@endforeach
</ul>
</body>
</html>
