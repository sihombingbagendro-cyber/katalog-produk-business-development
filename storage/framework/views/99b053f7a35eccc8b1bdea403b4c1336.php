<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk - Admin</title>
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
        <a href="<?php echo e(route('admin.products.index')); ?>" class="text-xs text-slate-400 hover:text-white transition">← Kembali ke Daftar Produk</a>
    </header>

    <main class="max-w-3xl mx-auto p-6">
        
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-white">Edit Produk</h1>
            <p class="text-xs text-slate-400 mt-1">Ubah informasi produk atau jasa pada katalog</p>
        </div>

        <!-- Form Edit Produk -->
        <form action="<?php echo e(route('admin.products.update', $product->id)); ?>" method="POST" class="bg-slate-800 border border-slate-700 rounded-2xl p-6 shadow-xl space-y-5">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <!-- Nama Produk -->
            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Nama Produk / Jasa *</label>
                <input type="text" name="title" value="<?php echo e(old('title', $product->title)); ?>" required
                       class="w-full h-11 px-4 bg-slate-900 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 text-sm">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- Kategori -->
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Kategori *</label>
                    <select name="category_id" required class="w-full h-11 px-4 bg-slate-900 border border-slate-700 rounded-xl text-white focus:outline-none focus:border-blue-500 text-sm">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>" <?php echo e($product->category_id == $category->id ? 'selected' : ''); ?>>
                                <?php echo e($category->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <!-- Harga -->
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Harga (Rp) *</label>
                    <input type="number" name="price" value="<?php echo e(old('price', $product->price)); ?>" required
                           class="w-full h-11 px-4 bg-slate-900 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 text-sm">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- Nama Penjual / Mahasiswa -->
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Nama Penjual / Pemilik *</label>
                    <input type="text" name="seller_name" value="<?php echo e(old('seller_name', $product->seller_name)); ?>" required
                           class="w-full h-11 px-4 bg-slate-900 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 text-sm">
                </div>

                <!-- Nomor WhatsApp -->
                <div>
                    <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Nomor WA Penjual *</label>
                    <input type="text" name="whatsapp_number" value="<?php echo e(old('whatsapp_number', $product->whatsapp_number)); ?>" required
                           class="w-full h-11 px-4 bg-slate-900 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 text-sm">
                </div>
            </div>

            <!-- Upload Foto Produk -->
            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">URL Foto Produk / Link Gambar *</label>
                <input type="text" name="image" value="<?php echo e(old('image', $product->image)); ?>" required
                       class="w-full h-11 px-4 bg-slate-900 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 text-sm">
            </div>

            <!-- Deskripsi Produk -->
            <div>
                <label class="block text-xs font-semibold text-slate-300 uppercase tracking-wider mb-2">Deskripsi Produk *</label>
                <textarea name="description" rows="4" required
                          class="w-full p-4 bg-slate-900 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-blue-500 text-sm"><?php echo e(old('description', $product->description)); ?></textarea>
            </div>

            <!-- Tombol Simpan -->
            <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-700">
                <a href="<?php echo e(route('admin.products.index')); ?>" class="px-5 py-2.5 bg-slate-700 hover:bg-slate-600 text-white font-semibold text-xs rounded-xl transition">
                    Batal
                </a>
                <button type="submit" class="px-6 py-2.5 bg-amber-600 hover:bg-amber-500 text-white font-semibold text-xs rounded-xl shadow-lg transition">
                    Perbarui Produk
                </button>
            </div>
        </form>

    </main>

</body>
</html><?php /**PATH C:\xampp\htdocs\katalog-mahasiswa\resources\views/admin/products/edit.blade.php ENDPATH**/ ?>