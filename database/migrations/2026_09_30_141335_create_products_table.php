<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('seller_name');      // Nama Mahasiswa / Usaha
            $table->string('seller_prodi')->nullable();        // Prodi / Jurusan   // Prodi / Jurusan
            $table->string('whatsapp_number');  // Nomor WA
            $table->string('title');            // Nama Produk
            $table->string('slug')->nullable();
            $table->integer('price');           // Harga dalam Rupiah
            $table->text('description');        // Deskripsi Singkat
            $table->string('image')->nullable();// Foto Produk
            $table->boolean('is_featured')->default(false); // Produk unggulan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};