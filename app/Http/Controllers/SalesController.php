<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SalesController extends Controller
{
    public function index()
    {
        return view('sales');
    }

    public function processSale(Request $request)
    {
        // Mendapatkan data produk dan jumlah dari formulir penjualan
        $product = $request->input('product');
        $quantity = $request->input('quantity');
        
        // Contoh: Harga produk (gantilah dengan data sebenarnya)
        $productPrice = [
            'mie-instan' => 3000,
            'minuman-soda' => 3500,
            'kacang-almond' => 8000,
            'sabun-mandi' => 3000,
            'krim-pemutih wajah' => 70000,
            'suplemen-vitamin' => 100000,
            'pembersih-lantai' => 20000,
            'wangian-ruangan' => 15000,
            'lampu-led' => 25000,
            'pakaian-bayi' => 200000,
            'mainan-anak' => 70000,
            'susu-formula' => 350000,
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
            return view('sales-thankyou', ['saleData' => $saleData]);
        } else {
            // Handle jika produk tidak ditemukan
            return redirect()->route('sales')->with('error', 'Produk tidak ditemukan.');
        }
    }
}
