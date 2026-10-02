<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk Mahasiswa - BD HMPS MI 2026</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eff6ff', 100: '#dbeafe', 500: '#3b82f6', 600: '#2563eb', 700: '#1d4ed8', 900: '#1e3a8a'
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen flex flex-col justify-between selection:bg-blue-500 selection:text-white">

    <!-- Navbar -->
    <nav class="bg-slate-900/80 backdrop-blur-md border-b border-slate-800 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
           <a href="<?php echo e(route('home')); ?>" class="flex items-center gap-3">
    <!-- Logo HMPS MI & Business Development -->
    <div class="flex items-center gap-2">
        <img src="<?php echo e(asset('Assets/images/logo-hmps.png.jpeg')); ?>" alt="Logo HMPS MI" class="h-10 w-auto rounded">
        <img src="<?php echo e(asset('Assets/images/logo-bd.png.png')); ?>" alt="Logo Business Development" class="h-10 w-auto rounded">
    </div>
    
    <!-- Teks dibuat bertumpuk (2 baris) agar rapi -->
    <div class="flex flex-col leading-tight">
        <span class="text-sm font-semibold text-slate-300 tracking-wide">BUSINESS DEVELOPMENT</span>
        <span class="text-base font-bold text-white">HMPS MI <span class="text-blue-500">POLMED 2026</span></span>
    </div>
</a>

            
            <div class="hidden md:flex items-center gap-8">
                <a href="#katalog" class="text-sm font-medium text-slate-300 hover:text-white transition">Katalog Produk</a>
                <a href="#tentang" class="text-sm font-medium text-slate-300 hover:text-white transition">Tentang Kami</a>
                <a href="#kontak" class="text-sm font-medium text-slate-300 hover:text-white transition">Kontak</a>
            </div>

            <div>
                <a href="https://wa.me/6289508721206?text=Halo%20Admin%20BD%20HMPS%20MI,%20saya%20ingin%20bertanya%20mengenai%20katalog" 
                   target="_blank" 
                   class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-500 hover:to-indigo-500 text-white font-semibold text-sm shadow-lg shadow-blue-500/20 transition duration-200">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                    Hubungi Kami
                </a>
            </div>
        </div>
    </nav>
        <!-- HERO SECTION: SELAMAT DATANG + FOTO ANGGOTA -->
    <section  class="bg-slate-900 text-white py-16 px-6 border-b border-slate-800">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            
            <!-- Sisi Kiri: Ucapan Selamat Datang -->
            <div class="space-y-4">
                <span class="bg-blue-600/20 text-blue-400 px-4 py-1.5 rounded-full text-sm font-semibold tracking-wide border border-blue-500/30">
                    Business Development Division
                </span>
                <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight leading-tight">
                    Selamat Datang di <br>
                    <span class="bg-gradient-to-r from-blue-400 to-indigo-500 bg-clip-text text-transparent">
                        Katalog Business Development HMPS MI
                    </span>
                </h1>
                <p class="text-slate-400 text-lg leading-relaxed">
                    Wadah resmi produk kreatif dan inovatif hasil karya mahasiswa Manajemen Informatika POLMED. Temukan berbagai produk unggulan mulai dari kuliner hingga jasa digital di sini!
                </p>
                <div class="pt-2">
                    <a href="#katalog" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-3 rounded-xl shadow-lg shadow-blue-500/20 transition-all">
                        Lihat Produk Katalog
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                </div>
            </div>

             <!-- Sisi Kanan: Foto Anggota + Caption -->
<div class="flex flex-col items-center justify-center w-full">
    <div class="relative group w-full max-w-lg">
        <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl blur opacity-30 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
        <img src="<?php echo e(asset('Assets/images/foto-anggota.png.jpeg')); ?>" 
             alt="Foto Anggota HMPS MI" 
             class="relative rounded-2xl shadow-2xl object-cover max-h-[380px] w-full border border-slate-800">
    </div>
    
    <!-- Label Caption @Anggota Business Development (Sentral di Tengah Foto) -->
    <p class="mt-3 text-sm font-medium text-slate-400 bg-slate-800/80 px-4 py-1.5 rounded-full border border-slate-700/60 flex items-center justify-center gap-1.5 shadow-sm">
        <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span>
        @Anggota Business Development
    </p>
</div>
            </div>

        </div>
    </section>

    <!-- SECTION VISI & MISI -->
    <section id ="tentang" class="bg-slate-900/50 py-16 px-6 border-b border-slate-800">
        <div class="max-w-7xl mx-auto">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <h2 class="text-3xl font-bold text-white">Visi & Misi Kami</h2>
                <p class="text-slate-400 mt-2">Komitmen Divisi Business Development HMPS MI POLMED dalam mencetak wirausahawan muda yang inovatif.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Kartu VISI -->
                <div class="bg-slate-800/60 p-8 rounded-2xl border border-slate-700/50 shadow-xl hover:border-blue-500/50 transition duration-300">
                    <div class="w-12 h-12 bg-blue-600/20 rounded-xl flex items-center justify-center text-blue-400 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3">VISI</h3>
                    <p class="text-slate-300 leading-relaxed">
                        Menjadi wadah pengembangan bisnis mahasiswa Manajemen Informatika untuk menciptakan bisnis inovatif yang menggabungkan kreativitas, teknologi, dan ilmu manajemen.
                    </p>
                </div>

                <!-- Kartu MISI -->
                <div class="bg-slate-800/60 p-8 rounded-2xl border border-slate-700/50 shadow-xl hover:border-indigo-500/50 transition duration-300">
                    <div class="w-12 h-12 bg-indigo-600/20 rounded-xl flex items-center justify-center text-indigo-400 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3">MISI</h3>
                    <p class="text-slate-300 leading-relaxed">
                        Kami fokus meningkatkan skill mahasiswa melalui seminar dan membangun wadah kolaborasi untuk berbagi ide. Tujuannya adalah membantu mahasiswa mewujudkan bisnis digital yang inovatif, dan membentuk mental profesional dan kreatif.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Banner -->
    <section class="relative pt-12 pb-20 overflow-hidden">
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[300px] bg-blue-600/20 rounded-full blur-[120px] -z-10"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-400 text-xs font-semibold uppercase tracking-wider mb-6">
                ✨ Showcase Produk & Karya Mahasiswa
            </span>
            <h1 class="text-4xl sm:text-6xl font-extrabold text-white tracking-tight leading-tight max-w-4xl mx-auto mb-6">
                Katalog Produk & Jasa <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-indigo-400">Divisi BD HMPS MI 2026</span>
            </h1>
            <p class="text-lg text-slate-400 max-w-2xl mx-auto mb-10 leading-relaxed">
                Dukung kewirausahaan dan karya kreatif kreasi mahasiswa HMPS MI Politeknik Negeri Medan.
            </p>

            <!-- Search Bar Simpel (Tanpa Select Prodi) -->
            <form action="<?php echo e(route('home')); ?>#katalog" method="GET" class="max-w-2xl mx-auto bg-slate-800/80 backdrop-blur border border-slate-700/80 p-2.5 rounded-2xl shadow-2xl flex flex-col sm:flex-row gap-2.5">
                <div class="flex-1 relative">
                    <input type="text" name="search" value="<?php echo e(request('search')); ?>" 
                        placeholder="Cari nama produk, jasa, atau nama penjual..." 
                        class="w-full h-12 pl-4 pr-4 bg-slate-900/50 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 text-sm">
                </div>
                <button type="submit" class="h-12 px-8 bg-blue-600 hover:bg-blue-500 text-white font-semibold text-sm rounded-xl transition shadow-lg shadow-blue-500/25">
                    Cari Produk
                </button>
            </form>
        </div>
    </section>

    <!-- Section Katalog Produk -->
    <section id="katalog" class="py-12 bg-slate-950 border-t border-slate-800/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex flex-col md:flex-row md:items-center justify-between mb-8 gap-4">
                <div>
                    <h2 class="text-2xl font-bold text-white">Daftar Produk & Jasa</h2>
                    <p class="text-slate-400 text-sm">Temukan barang dan layanan terbaik karya mahasiswa</p>
                </div>

                <!-- Filter Category Pills -->
                <div class="flex flex-wrap gap-2">
                    <a href="<?php echo e(route('home')); ?>#katalog" 
                       class="px-4 py-2 rounded-xl text-xs font-semibold transition <?php echo e(!request('category') ? 'bg-blue-600 text-white' : 'bg-slate-800 text-slate-400 hover:bg-slate-700'); ?>">
                        Semua
                    </a>
                    <?php if(isset($categories)): ?>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('home', ['category' => $cat->slug])); ?>#katalog" 
                               class="px-4 py-2 rounded-xl text-xs font-semibold transition <?php echo e(request('category') == $cat->slug ? 'bg-blue-600 text-white' : 'bg-slate-800 text-slate-400 hover:bg-slate-700'); ?>">
                                <?php echo e($cat->name); ?>

                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Grid Produk -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php if(isset($products)): ?>
                    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden hover:border-slate-700 transition duration-300 group flex flex-col justify-between">
                            <div>
                                <div class="relative h-48 overflow-hidden bg-slate-800">
                                    <img src="<?php echo e($product->image); ?>" alt="<?php echo e($product->title); ?>" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                    <span class="absolute top-3 left-3 px-3 py-1 rounded-full text-xs font-semibold bg-slate-900/80 backdrop-blur text-blue-400 border border-slate-700">
                                        <?php echo e($product->category->name); ?>

                                    </span>
                                    <?php if($product->is_featured): ?>
                                        <span class="absolute top-3 right-3 px-3 py-1 rounded-full text-xs font-bold bg-amber-500 text-slate-950 shadow-md">
                                            ⭐ Terlaris
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <div class="p-5">
                                    <h3 class="text-lg font-bold text-white mb-2 line-clamp-1 group-hover:text-blue-400 transition">
                                        <?php echo e($product->title); ?>

                                    </h3>
                                    <p class="text-slate-400 text-xs line-clamp-2 mb-4 leading-relaxed">
                                        <?php echo e($product->description); ?>

                                    </p>
                                    
                                    <div class="p-3 bg-slate-800/50 rounded-xl mb-4 border border-slate-800">
                                        <div class="text-xs text-slate-400">Penjual / Pemilik:</div>
                                        <div class="text-sm font-semibold text-slate-200"><?php echo e($product->seller_name); ?></div>
                                    </div>
                                </div>
                            </div>

                            <div class="p-5 pt-0 flex items-center justify-between border-t border-slate-800/60 mt-auto">
                                <div>
                                    <div class="text-[10px] text-slate-500 uppercase tracking-wider font-semibold">Harga</div>
                                    <div class="text-lg font-extrabold text-emerald-400">
                                        Rp <?php echo e(number_format($product->price, 0, ',', '.')); ?>

                                    </div>
                                </div>
                                <a href="https://wa.me/<?php echo e($product->whatsapp_number); ?>?text=Halo%20<?php echo e(urlencode($product->seller_name)); ?>,%20saya%20tertarik%20dengan%20produk%20*<?php echo e(urlencode($product->title)); ?>*%20di%20Katalog%20HMPS%20MI" 
                                   target="_blank" 
                                   class="px-4 py-2.5 bg-emerald-600 hover:bg-emerald-500 text-white font-semibold text-xs rounded-xl transition flex items-center gap-1.5 shadow-lg shadow-emerald-600/20">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                                    Beli via WA
                                </a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="col-span-full py-16 text-center bg-slate-900 border border-slate-800 rounded-2xl">
                            <p class="text-slate-400 text-sm">Produk tidak ditemukan. Coba gunakan kata kunci lain.</p>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>

            <!-- Pagination -->
            <?php if(isset($products)): ?>
                <div class="mt-10">
                    <?php echo e($products->links()); ?>

                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Footer -->
    <!-- FOOTER SECTION -->
<footer class="bg-slate-950 text-slate-400 py-12 px-6 border-t border-slate-800/80">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- Kolom 1: Profil / Branding -->
        <div class="space-y-3">
            <div class="flex items-center gap-2">
                <img src="<?php echo e(asset('Assets/images/logo-hmps.png.jpeg')); ?>" alt="Logo HMPS MI" class="h-8 w-auto rounded">
                <img src="<?php echo e(asset('Assets/images/logo-bd.png.png')); ?>" alt="Logo BD" class="h-8 w-auto rounded">
                <span class="text-white font-bold tracking-wide text-lg">HMPS MI POLMED</span>
            </div>
            <p class="text-sm text-slate-400 leading-relaxed">
                Divisi Business Development HMPS MI 2026. Himpunan Mahasiswa Program Studi Manajemen Informatika POLMED.
            </p>
        </div>

        <!-- Kolom 2: Kontak WhatsApp -->
        <div class="space-y-3">
            <h3 class="text-white font-semibold text-base tracking-wide">Hubungi Kami (WhatsApp)</h3>
            <ul class="space-y-2 text-sm">
                <li>
                    <a href="https://wa.me/6281234567890" target="_blank" class="inline-flex items-center gap-2 text-slate-300 hover:text-emerald-400 transition">
                        <svg class="w-5 h-5 text-emerald-500 fill-current" viewBox="0 0 24 24">
                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                        </svg>
                        +62 812-3456-7890 (Admin BD)
                    </a>
                </li>
            </ul>
        </div>

        <!-- Kolom 3: Media Sosial Instagram -->
        <div class="space-y-3">
            <h3 class="text-white font-semibold text-base tracking-wide">Media Sosial</h3>
            <ul class="space-y-2 text-sm">
                <li>
                    <a href="https://instagram.com/hmps_bd_mi_polmed" target="_blank" class="inline-flex items-center gap-2 text-slate-300 hover:text-pink-400 transition">
                        <svg class="w-5 h-5 text-pink-500 fill-current" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                        @hmps_bd_mi_polmed
                    </a>
                </li>
                <li>
                    <a href="https://instagram.com/hmpsmi" target="_blank" class="inline-flex items-center gap-2 text-slate-300 hover:text-pink-400 transition">
                        <svg class="w-5 h-5 text-pink-500 fill-current" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                        @hmpsmi
                    </a>
                </li>
            </ul>
        </div>
            <!-- FOOTER SECTION (TAMBAHKAN id="kontak") -->
<footer id="kontak" class="bg-slate-950 text-slate-400 py-12 px-6 border-t border-slate-800/80">
    <!-- Isi footer WhatsApp & IG kamu -->
</footer>
    </div>

    <!-- Copyright -->
    <div class="max-w-7xl mx-auto mt-8 pt-6 border-t border-slate-800/60 text-center text-xs text-slate-500">
        &copy; 2026 BD HMPS MI. All rights reserved.
    </div>
</footer>
<!-- MODAL POPUP PEMESANAN WA -->
<div id="waModal" class="fixed inset-0 bg-slate-950/80 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 w-full max-w-md shadow-2xl relative animate-in fade-in zoom-in duration-200">
        
        <!-- Tombol Close -->
        <button onclick="closeWaModal()" class="absolute top-4 right-4 text-slate-400 hover:text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>

        <h3 class="text-xl font-bold text-white mb-1">Form Pemesanan Produk</h3>
        <p class="text-xs text-slate-400 mb-4" id="modalProductName">Produk: -</p>

        <form id="waForm" onsubmit="sendWaOrder(event)" class="space-y-4">
            <input type="hidden" id="modalSellerPhone">
            <input type="hidden" id="modalItemTitle">

            <div>
                <label class="block text-xs font-medium text-slate-300 mb-1">Nama Lengkap</label>
                <input type="text" id="buyerName" required placeholder="Contoh: Budi Santoso" class="w-full bg-slate-800 border border-slate-700 rounded-xl px-3 py-2 text-sm text-white focus:outline-none focus:border-blue-500">
            </div>

            <div>
                <label class="block text-xs font-medium text-slate-300 mb-1">Kelas / Prodi</label>
                <input type="text" id="buyerClass" required placeholder="Contoh: MI-3A" class="w-full bg-slate-800 border border-slate-700 rounded-xl px-3 py-2 text-sm text-white focus:outline-none focus:border-blue-500">
            </div>

            <div>
                <label class="block text-xs font-medium text-slate-300 mb-1">Jumlah Pesanan / Catatan</label>
                <textarea id="buyerNotes" rows="2" placeholder="Contoh: 2 pcs, warna hitam" class="w-full bg-slate-800 border border-slate-700 rounded-xl px-3 py-2 text-sm text-white focus:outline-none focus:border-blue-500"></textarea>
            </div>

            <button type="submit" class="w-full bg-emerald-600 hover:bg-emerald-500 text-white font-semibold py-2.5 rounded-xl transition flex items-center justify-center gap-2 text-sm">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                Lanjutkan ke WhatsApp
            </button>
        </form>
    </div>
</div>

<script>
function openWaModal(productName, sellerPhone) {
    document.getElementById('modalProductName').innerText = 'Produk: ' + productName;
    document.getElementById('modalItemTitle').value = productName;
    document.getElementById('modalSellerPhone').value = sellerPhone;
    document.getElementById('waModal').classList.remove('hidden');
}

function closeWaModal() {
    document.getElementById('waModal').classList.add('hidden');
}

function sendWaOrder(event) {
    event.preventDefault();
    const phone = document.getElementById('modalSellerPhone').value;
    const item = document.getElementById('modalItemTitle').value;
    const name = document.getElementById('buyerName').value;
    const buyerClass = document.getElementById('buyerClass').value;
    const notes = document.getElementById('buyerNotes').value;

    const message = `Halo Kak, saya *${name}* dari *${buyerClass}*.\n\nSaya ingin memesan produk: *${item}*\nCatatan/Jumlah: ${notes || '-'}\n\nApakah stok masih ada?`;
    
    const waUrl = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;
    window.open(waUrl, '_blank');
    closeWaModal();
}
</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\katalog-mahasiswa\resources\views/home.blade.php ENDPATH**/ ?>