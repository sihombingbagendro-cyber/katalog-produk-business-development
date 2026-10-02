<?php

// Arahkan folder cache dan view Blade ke direktori /tmp milik Vercel (Read/Write)
$_ENV['APP_STORAGE'] = '/tmp/storage';

// Buat folder storage temporary di Vercel jika belum ada
$storageDirs = [
    '/tmp/storage',
    '/tmp/storage/app',
    '/tmp/storage/framework',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
];

foreach ($storageDirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// Panggil index bawaan Laravel
require __DIR__ . '/../public/index.php';