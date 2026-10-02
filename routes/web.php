<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminProductController;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. Katalog Utama (Publik)
Route::get('/', function (Request $request) {
    $query = Product::with('category');

    if ($request->has('category') && $request->category != '') {
        $query->whereHas('category', function ($q) use ($request) {
            $q->where('slug', $request->category)
              ->orWhere('name', 'like', '%' . $request->category . '%');
        });
    }

    if ($request->has('search') && $request->search != '') {
        $query->where('title', 'like', '%' . $request->search . '%');
    }

    $products = $query->latest()->paginate(12)->withQueryString();
    $categories = Category::all();

    return view('home', compact('products', 'categories'));
})->name('home');

// 2. Route Login & Logout Admin
Route::get('/login', function () {
    if (Auth::check()) {
        return redirect()->route('admin.products.index');
    }
    return view('auth.login');
})->name('login');

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/admin/products');
    }

    return back()->withErrors([
        'email' => 'Email atau password yang dimasukkan salah.',
    ])->onlyInput('email');
})->name('login.post');

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// 3. Manajemen Admin Produk (Diproteksi Auth)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/products', [AdminProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [AdminProductController::class, 'create'])->name('products.create');
    Route::post('/products', [AdminProductController::class, 'store'])->name('products.store');
    Route::get('/products/{id}/edit', [AdminProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}', [AdminProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [AdminProductController::class, 'destroy'])->name('products.destroy');
});