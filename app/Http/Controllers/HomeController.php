<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Ambil semua kategori untuk filter
        $categories = Category::all();

        // Query dasar produk beserta kategorinya
        $query = Product::with('category');

        // Filter berdasarkan pencarian nama produk/penjual
        if ($request->has('search') && $request->search != '') {
            $query->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('seller_name', 'like', '%' . $request->search . '%');
        }

        // Filter berdasarkan kategori
        if ($request->has('category') && $request->category != '') {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        // Ambil hasil produk
        $products = $query->latest()->get();

        // Ambil produk unggulan untuk section Hero / Banner
        $featuredProducts = Product::where('is_featured', true)->take(3)->get();

        return view('home', compact('categories', 'products', 'featuredProducts'));
    }
}