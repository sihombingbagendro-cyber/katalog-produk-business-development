<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Kelola Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style> body { font-family: 'Plus Jakarta Sans', sans-serif; } </style>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen">

    <!-- Header Navbar Admin -->
    <header class="bg-slate-800 border-b border-slate-700 px-6 py-4 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-lg bg-blue-600 flex items-center justify-center font-bold text-white">BD</div>
            <span class="font-bold text-lg text-white">Panel Admin - HMPS MI</span>
        </div>
        <a href="<?php echo e(route('home')); ?>" target="_blank" class="text-xs text-blue-400 hover:underline">Lihat Website Utama ↗</a>
    </header>

    <main class="max-w-7xl mx-auto p-6">
        
        <!-- Pesan Sukses Notification -->
        <?php if(session('success')): ?>
            <div class="bg-emerald-500/10 border border-emerald-500/50 text-emerald-400 px-4 py-3 rounded-xl mb-6 text-sm">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <!-- Judul & Tombol Tambah -->
        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-2xl font-bold text-white">Daftar Produk</h1>
                <p class="text-xs text-slate-400 mt-1">Kelola barang dan jasa yang ditampilkan pada katalog</p>
            </div>
            <a href="<?php echo e(route('admin.products.create')); ?>" class="px-4 py-2.5 bg-blue-600 hover:bg-blue-500 text-white font-semibold text-xs rounded-xl shadow-lg transition">
                + Tambah Produk Baru
            </a>
        </div>

        <!-- Tabel Produk -->
        <div class="bg-slate-800 border border-slate-700 rounded-2xl overflow-hidden shadow-xl">
            <table class="w-full text-left border-collapse text-sm">
                <thead>
                    <tr class="bg-slate-900/60 text-slate-400 border-b border-slate-700 text-xs uppercase tracking-wider">
                        <th class="p-4">Foto</th>
                        <th class="p-4">Nama Produk</th>
                        <th class="p-4">Kategori</th>
                        <th class="p-4">Harga</th>
                        <th class="p-4">Penjual</th>
                        <th class="p-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-700/50 text-slate-200">
                    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="hover:bg-slate-700/30 transition">
                            <td class="p-4">
                                <img src="<?php echo e($product->image); ?>" alt="" class="w-12 h-12 rounded-lg object-cover bg-slate-900">
                            </td>
                            <td class="p-4 font-semibold text-white"><?php echo e($product->title); ?></td>
                            <td class="p-4"><span class="px-2.5 py-1 bg-slate-700 rounded-md text-xs text-blue-300"><?php echo e($product->category->name); ?></span></td>
                            <td class="p-4 text-emerald-400 font-bold">Rp <?php echo e(number_format($product->price, 0, ',', '.')); ?></td>
                            <td class="p-4 text-xs"><?php echo e($product->seller_name); ?></td>
                            <td class="p-4">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="<?php echo e(route('admin.products.edit', $product->id)); ?>" class="px-3 py-1.5 bg-amber-600/20 text-amber-400 border border-amber-500/30 rounded-lg text-xs hover:bg-amber-600 hover:text-white transition">
                                        Edit
                                    </a>
                                    <form action="<?php echo e(route('admin.products.destroy', $product->id)); ?>" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="px-3 py-1.5 bg-red-600/20 text-red-400 border border-red-500/30 rounded-lg text-xs hover:bg-red-600 hover:text-white transition">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="p-8 text-center text-slate-500 text-sm">
                                Belum ada data produk. Klik tombol "+ Tambah Produk Baru" di atas.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            <?php echo e($products->links()); ?>

        </div>

    </main>

</body>
</html><?php /**PATH C:\xampp\htdocs\katalog-mahasiswa\resources\views/admin/products/index.blade.php ENDPATH**/ ?>