<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class POSController extends Controller
{
    public function home()
    {
        return view('pos.home');
    }

    public function products()
    {
        return view('pos.products');
    }

    public function productsByCategory($category)
    {
        return view('pos.products-by-category', ['category' => $category]);
    }

    public function user($id, $name)
    {
        return view('pos.user-profile', ['id' => $id, 'name' => $name]);
    }

    public function sales()
    {
        return view('pos.sales');
    }


    public function processSale(Request $request)
{
    // Mendapatkan data produk dan jumlah dari formulir penjualan
    $product = $request->input('product');
    $quantity = $request->input('quantity');

    // Contoh: Harga produk (gantilah dengan data sebenarnya)
    $productPrice = [
        'sabun-cuci-piring' => 5000,
        'minuman-energi' => 1200,
        'biskuit' => 3000,
        'sampo-rambut' => 9000,
        'pelembab-wajah' => 103000,
        'obat-flu' => 57000,
        'pengharum-ruangan' => 50000,
        'lampu-hias' => 65000,
        'pakaian-anak' => 150000,
        'boneka' => 35000,
        'susu-bayi' => 90000,
    ];

    // Memastikan produk yang dipilih ada dalam array harga
    if (array_key_exists($product, $productPrice)) {
        // Menghitung total pembelian
        $totalAmount = $quantity * $productPrice[$product];

        // Menyimpan data penjualan ke dalam array sementara (gantilah dengan penyimpanan ke database atau sistem lainnya)
        $saleData = [
            'product' => $product,
            'quantity' => $quantity,
            'total_amount' => $totalAmount,
            'timestamp' => now(),
        ];
        // Menyimpan data penjualan ke dalam sesi untuk digunakan di halaman terima kasih
        Session::put('saleData', $saleData);

        // Redirect atau tampilkan halaman terima kasih atau struk pembelian
        return view('pos.sales-thankyou', ['saleData' => $saleData]);
    } else {
        // Handle jika produk tidak ditemukan
        return redirect()->route('pos.sales')->with('error', 'Produk tidak ditemukan.');
    }
}

    }