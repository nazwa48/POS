<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk Berdasarkan Kategori - POS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        li {
            margin-bottom: 20px; /* Menambahkan margin bawah untuk memisahkan setiap produk */
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            display: flex;
            align-items: center;
        }
        .product-icon {
            font-size: 48px; /* Ukuran ikon */
            margin-right: 20px; /* Memberikan jarak antara ikon dan teks */
        }
        .no-products {
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Produk untuk Kategori: {{ $category }}</h1>
        <ul>
            @if ($category == 'food-beverage')
                <!-- Produk Pertama -->
                <li>
                    <i class="fas fa-bread-slice product-icon"></i> <!-- Menggunakan ikon roti dari Font Awesome -->
                    <div>
                        <h3>Roti Bakar</h3>
                        <p>Roti Bakar adalah roti yang dipanggang hingga renyah dan memiliki berbagai varian rasa.</p>
                    </div>
                </li>
                <!-- Produk Kedua -->
                <li>
                    <i class="fas fa-coffee product-icon"></i> <!-- Menggunakan ikon kopi dari Font Awesome -->
                    <div>
                        <h3>Kopi Arabika</h3>
                        <p>Kopi Arabika adalah kopi berkualitas tinggi dengan rasa yang khas dan aroma yang harum.</p>
                    </div>
                </li>
                <!-- Produk Ketiga -->
                <li>
                    <i class="fas fa-glass-cheers product-icon"></i> <!-- Menggunakan ikon minuman dari Font Awesome -->
                    <div>
                        <h3>Jus Jeruk Segar</h3>
                        <p>Jus Jeruk Segar adalah minuman menyegarkan yang kaya akan vitamin C dan nikmat untuk dinikmati setiap hari.</p>
                    </div>
                </li>
            @elseif ($category == 'beauty-health')
                <!-- Produk Pertama -->
                <li>
                    <i class="fas fa-hand-sparkles product-icon"></i> <!-- Menggunakan ikon sabun dari Font Awesome -->
                    <div>
                        <h3>Sabun Wajah Organik</h3>
                        <p>Sabun Wajah Organik adalah produk perawatan kulit yang lembut dan aman untuk membersihkan wajah dari kotoran dan minyak berlebih.</p>
                    </div>
                </li>
                <!-- Produk Kedua -->
                <li>
                    <i class="fas fa-spa product-icon"></i> <!-- Menggunakan ikon spa dari Font Awesome -->
                    <div>
                        <h3>Krim Anti-Penuaan</h3>
                        <p>Krim Anti-Penuaan adalah produk perawatan kulit yang membantu mengurangi tanda-tanda penuaan dan menjaga kulit tetap muda dan sehat.</p>
                    </div>
                </li>
                <!-- Produk Ketiga -->
                <li>
                    <i class="fas fa-leaf product-icon"></i> <!-- Menggunakan ikon daun dari Font Awesome -->
                    <div>
                        <h3>Minyak Kelapa Organik</h3>
                        <p>Minyak Kelapa Organik adalah minyak alami yang kaya akan nutrisi dan baik untuk perawatan kulit dan rambut.</p>
                    </div>
                </li>
            @elseif ($category == 'home-care')
                <!-- Produk Pertama -->
                <li>
                    <i class="fas fa-spray-can product-icon"></i> <!-- Menggunakan ikon semprotan dari Font Awesome -->
                    <div>
                        <h3>Pembersih Kaca</h3>
                        <p>Pembersih Kaca adalah solusi efektif untuk membersihkan kaca dan permukaan kaca lainnya tanpa meninggalkan residu.</p>
                    </div>
                </li>
                <!-- Produk Kedua -->
                <li>
                    <i class="fas fa-wind product-icon"></i> <!-- Menggunakan ikon angin dari Font Awesome -->
                    <div>
                        <h3>Diffuser Aroma</h3>
                        <p>Diffuser Aroma adalah perangkat yang menyebarkan aroma wangi ke dalam ruangan, menciptakan suasana yang menyenangkan dan menenangkan.</p>
                    </div>
                </li>
                <!-- Produk Ketiga -->
                <li>
                    <i class="fas fa-lightbulb product-icon"></i> <!-- Menggunakan ikon lampu dari Font Awesome -->
                    <div>
                        <h3>Lampu Tidur</h3>
                        <p>Lampu Tidur adalah lampu yang cocok untuk menciptakan suasana hangat dan nyaman di kamar tidur.</p>
                    </div>
                </li>
            @elseif ($category == 'baby-kid')
                <!-- Produk Pertama -->
                <li>
                    <i class="fas fa-tshirt product-icon"></i> <!-- Menggunakan ikon baju dari Font Awesome -->
                    <div>
                        <h3>Baju Bayi Lucu</h3>
                        <p>Baju Bayi Lucu adalah pakaian yang nyaman dan aman untuk bayi, dengan desain yang menarik dan kualitas yang baik.</p>
                    </div>
                </li>
                <!-- Produk Kedua -->
                <li>
                    <i class="fas fa-robot product-icon"></i> <!-- Menggunakan ikon robot dari Font Awesome -->
                    <div>
                        <h3>Robot Mainan Edukatif</h3>
                        <p>Robot Mainan Edukatif adalah mainan yang menyenangkan dan bermanfaat untuk mengembangkan kreativitas dan keterampilan motorik anak-anak.</p>
                    </div>
                </li>
                <!-- Produk Ketiga -->
                <li>
                    <i class="fas fa-book product-icon"></i> <!-- Menggunakan ikon buku dari Font Awesome -->
                    <div>
                        <h3>Buku Cerita Anak</h3>
                        <p>Buku Cerita Anak adalah bahan bacaan yang menghibur dan mendidik, cocok untuk mengembangkan minat membaca anak-anak.</p>
                    </div>
                </li>
            @else
                <li class="no-products">Belum ada produk untuk kategori ini</li>
            @endif
        </ul>
        
        </ul>
    </div>
</body>
</html>
