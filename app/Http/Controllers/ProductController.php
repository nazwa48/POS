<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        return view('products');
    }
    public function showFoodBeverage()
    {
        $products = [
            'Mie Instan', 'Minuman Soda', 'Kacang Almond', 'Es Krim', 'Kopi', 'Teh', 'Susu', 'Roti', 'Biskuit', 'Snack'
        ];
        return view('products-by-category', ['products' => $products, 'category' => 'Food & Beverage']);
    }

    public function showBeautyHealth()
    {
        $products = [
            'Sabun Mandi', 'Krim Pemutih Wajah', 'Suplemen Vitamin', 'Losion Tubuh', 'Masker Wajah', 'Shampo', 'Pasta Gigi', 'Sikat Gigi', 'Deodoran', 'Parfum'
        ];
        return view('products-by-category', ['products' => $products, 'category' => 'Beauty & Health']);
    }

    public function showHomeCare()
    {
        $products = [
            'Pembersih Lantai', 'Pengharum Ruangan', 'Pembersih Toilet', 'Sapu', 'Pengki', 'Penghapus Noda', 'Pel Lantai', 'Sarung Tangan', 'Sabut', 'Kain Lap'
        ];
        return view('products-by-category', ['products' => $products, 'category' => 'Home Care']);
    }

    public function showBabyKid()
    {
        $products = [
            'Pakaian Bayi', 'Mainan Anak', 'Susu Formula', 'Popok Bayi', 'Buku Cerita', 'Puzzle Anak', 'Mobil-Mobilan', 'Boneka', 'Gunting Kertas', 'Lego'
        ];
        return view('products-by-category', ['products' => $products, 'category' => 'Baby & Kid']);
    }

}


