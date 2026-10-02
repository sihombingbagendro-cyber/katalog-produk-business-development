<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Tampilan Landing Page Utama untuk Konsumen
     */
    public function index(Request $request)
    {
        $categories = Category::all();
        
        $query = Product::with('category');

        // Filter berdasarkan pencarian kata kunci
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%')
                  ->orWhere('description', 'like', '%' . $search . '%')
                  ->orWhere('seller_name', 'like', '%' . $search . '%');
            });
        }

        // Filter berdasarkan Kategori
        if ($request->filled('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        // Filter berdasarkan Program Studi (Prodi)
        if ($request->filled('prodi')) {
            $query->where('seller_prodi', $request->prodi);
        }

        // Ambil produk terlaris / rekomendasi
        $featuredProducts = Product::where('is_featured', true)->take(4)->get();

        // Ambil seluruh produk dengan paginasi
        $products = $query->latest()->paginate(9)->withQueryString();

        return view('home', compact('products', 'categories', 'featuredProducts'));
    }

    /**
     * Tampilan Detail Produk
     */
    public function show($slug)
    {
        $product = Product::with('category')->where('slug', $slug)->firstOrFail();
        
        // Rekomendasi produk sejenis
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->take(3)
            ->get();

        return view('products.show', compact('product', 'relatedProducts'));
    }

    /**
     * Tampilan Direktori Mahasiswa (Penjual)
     */
    public function sellers()
    {
        // Kelompokkan produk berdasarkan nama penjual
        $sellers = Product::all()->groupBy('seller_name');

        return view('sellers', compact('sellers'));
    }
}