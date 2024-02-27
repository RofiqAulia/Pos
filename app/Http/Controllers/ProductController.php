<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function foodBeverage()
    {
        // Contoh data produk untuk kategori Food & Beverage
        $products = [
            ['name' => 'Mie Goreng', 'price' => 15000],
            ['name' => 'Nasi Goreng', 'price' => 20000],
            ['name' => 'Es Teh Manis', 'price' => 5000],
        ];
    
        return view('products.food_beverage', compact('products'));
    }
    
    public function beautyHealth()
    {
        // Contoh data produk untuk kategori Beauty & Health
        $products = [
            ['name' => 'Sabun Mandi', 'price' => 10000],
            ['name' => 'Shampoo', 'price' => 15000],
            ['name' => 'Lipstik', 'price' => 25000],
        ];
    
        return view('products.beauty_health', compact('products'));
    }
    
    public function homeCare()
    {
        // Contoh data produk untuk kategori Home Care
        $products = [
            ['name' => 'Pembersih Lantai', 'price' => 20000],
            ['name' => 'Pengharum Ruangan', 'price' => 15000],
            ['name' => 'Sapu', 'price' => 10000],
        ];
    
        return view('products.home_care', compact('products'));
    }
    
    public function babyKid()
    {
        // Contoh data produk untuk kategori Baby & Kid
        $products = [
            ['name' => 'Popok Bayi', 'price' => 30000],
            ['name' => 'Mainan Balok', 'price' => 25000],
            ['name' => 'Baju Anak', 'price' => 35000],
        ];
    
        return view('products.baby_kid', compact('products'));
    }
}
