<?php

// 1. Set environment variables agar storage dan log menggunakan direktori temporary Vercel (/tmp)
putenv('APP_STORAGE=/tmp/storage');
putenv('LOG_CHANNEL=stderr');
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');

$_ENV['APP_STORAGE'] = '/tmp/storage';
$_ENV['LOG_CHANNEL'] = 'stderr';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp/storage/framework/views';

// 2. Buat struktur direktori di /tmp jika belum ada
$dirs = [
    '/tmp/storage',
    '/tmp/storage/app',
    '/tmp/storage/framework',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// 3. Jalankan aplikasi Laravel dari public/index.php
require __DIR__ . '/../public/index.php';