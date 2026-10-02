<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 0. Akun Admin Default
        User::create([
            'name'     => 'Admin BD HMPS MI',
            'email'    => 'admin@hmpsmi.or.id',
            'password' => Hash::make('admin123'),
        ]);

        // 1. Kategori Produk
        $kuliner = Category::create(['name' => 'Kuliner & Minuman', 'slug' => 'kuliner-minuman']);
        $jasa    = Category::create(['name' => 'Jasa & Kreatif', 'slug' => 'jasa-kreatif']);
        $fashion = Category::create(['name' => 'Fashion & Merch', 'slug' => 'fashion-merch']);
        $tech    = Category::create(['name' => 'Teknologi & Servis', 'slug' => 'teknologi-servis']);

        // Nomor WhatsApp standar usaha BD
        $defaultWA = '6289508721206';

        // 2. Data Produk Dummy (12 Produk)
        $products = [
            [
                'category_id' => $kuliner->id,
                'title' => 'Risol Mayo Lumer Smoked Beef (Isi 5)',
                'seller_name' => 'Andi Pratama',
                'seller_prodi' => 'Manajemen Informatika',
                'whatsapp_number' => $defaultWA,
                'price' => 18000,
                'description' => 'Risol mayo hangat dengan isian telur, smoked beef, dan saus mayo rahasia yang melumer di mulut. Dibuat fresh setiap pagi.',
                'image' => 'https://images.unsplash.com/photo-1541529086526-db283c563270?w=600&auto=format&fit=crop&q=80',
                'is_featured' => true,
            ],
            [
                'category_id' => $kuliner->id,
                'title' => 'Kopi Susu Aren "Convergence" 250ml',
                'seller_name' => 'Siti Nurhaliza',
                'seller_prodi' => 'Bisnis Digital',
                'whatsapp_number' => $defaultWA,
                'price' => 15000,
                'description' => 'Espresso house blend dipadu dengan susu segar cair dan gula aren murni. Rasanya creamy dan pas untuk teman nugas.',
                'image' => 'https://images.unsplash.com/photo-1517701604599-bb29b565090c?w=600&auto=format&fit=crop&q=80',
                'is_featured' => true,
            ],
            [
                'category_id' => $jasa->id,
                'title' => 'Jasa Desain Poster Event & Feeds IG',
                'seller_name' => 'Budi Santoso',
                'seller_prodi' => 'Manajemen Informatika',
                'whatsapp_number' => $defaultWA,
                'price' => 45000,
                'description' => 'Melayani pembuatan UI/UX, poster kegiatan HMPS/Ormawa, serta desain Microblog Instagram dengan gaya modern & estetik.',
                'image' => 'https://images.unsplash.com/photo-1626785774573-4b799315345d?w=600&auto=format&fit=crop&q=80',
                'is_featured' => true,
            ],
            [
                'category_id' => $fashion->id,
                'title' => 'Tote Bag Kanvas Custom Estetik MI',
                'seller_name' => 'Citra Dewi',
                'seller_prodi' => 'Bisnis Digital',
                'whatsapp_number' => $defaultWA,
                'price' => 35000,
                'description' => 'Tote bag bahan kanvas tebal dengan perekat retsleting. Sablon berkualitas tinggi tahan cuci dengan desain quote pemrograman.',
                'image' => 'https://images.unsplash.com/photo-1544816155-12df9643f363?w=600&auto=format&fit=crop&q=80',
                'is_featured' => false,
            ],
            [
                'category_id' => $tech->id,
                'title' => 'Jasa Servis & Optimalisasi Laptop Campus',
                'seller_name' => 'Rian Hidayat',
                'seller_prodi' => 'Manajemen Informatika',
                'whatsapp_number' => $defaultWA,
                'price' => 50000,
                'description' => 'Jasa install ulang OS Windows, pembersihan debu hardware, ganti pasta thermal, serta konsultasi upgrade SSD/RAM.',
                'image' => 'https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=600&auto=format&fit=crop&q=80',
                'is_featured' => false,
            ],
            [
                'category_id' => $kuliner->id,
                'title' => 'Dessert Box Matcha & Cadbury',
                'seller_name' => 'Dina Rosita',
                'seller_prodi' => 'Bisnis Digital',
                'whatsapp_number' => $defaultWA,
                'price' => 25000,
                'description' => 'Dessert box kekinian dengan lapisan cake lembut, cream matcha premium, dan topping cokelat Cadbury melimpah.',
                'image' => 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=600&auto=format&fit=crop&q=80',
                'is_featured' => false,
            ],
            [
                'category_id' => $jasa->id,
                'title' => 'Jasa Pembuatan Landing Page & Web Portofolio',
                'seller_name' => 'Farhan Zaki',
                'seller_prodi' => 'Manajemen Informatika',
                'whatsapp_number' => $defaultWA,
                'price' => 150000,
                'description' => 'Bantu mahasiswa dan UMKM membuat website portofolio atau katalog produk profesional menggunakan Tailwind CSS & Laravel.',
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&auto=format&fit=crop&q=80',
                'is_featured' => true,
            ],
            [
                'category_id' => $fashion->id,
                'title' => 'Kaos Oversize Streetwear "Code & Craft"',
                'seller_name' => 'Gilang Ramadhan',
                'seller_prodi' => 'Bisnis Digital',
                'whatsapp_number' => $defaultWA,
                'price' => 85000,
                'description' => 'Kaos bahan Cotton Combed 24s adem dan menyerap keringat. Potongan oversize nyaman dipakai harian di kampus.',
                'image' => 'https://images.unsplash.com/photo-1521572267360-ee0c2909d518?w=600&auto=format&fit=crop&q=80',
                'is_featured' => false,
            ],
            [
                'category_id' => $kuliner->id,
                'title' => 'Dimsum Ayam Udang Mix (Isi 10)',
                'seller_name' => 'Hania Putri',
                'seller_prodi' => 'Manajemen Informatika',
                'whatsapp_number' => $defaultWA,
                'price' => 22000,
                'description' => 'Dimsum olahan daging ayam & udang segar bertabur topping wortel, keju, dan jamur. Dilengkapi saus merah pedas asam manis.',
                'image' => 'https://images.unsplash.com/photo-1496116218417-1a781b1c416c?w=600&auto=format&fit=crop&q=80',
                'is_featured' => false,
            ],
            [
                'category_id' => $tech->id,
                'title' => 'Cetak 3D Model / Keychain Custom',
                'seller_name' => 'Irfan Hakim',
                'seller_prodi' => 'Manajemen Informatika',
                'whatsapp_number' => $defaultWA,
                'price' => 20000,
                'description' => 'Menerima cetak 3D printing presisi tinggi untuk gantungan kunci, figur mini, prototype tugas akhir, atau casing custom.',
                'image' => 'https://images.unsplash.com/photo-1612815154858-60aa4c59eaa6?w=600&auto=format&fit=crop&q=80',
                'is_featured' => false,
            ],
            [
                'category_id' => $jasa->id,
                'title' => 'Jasa Olah Data Statistik SPSS & Excel',
                'seller_name' => 'Jasmine Aulia',
                'seller_prodi' => 'Bisnis Digital',
                'whatsapp_number' => $defaultWA,
                'price' => 75000,
                'description' => 'Bantuan analisis data kuantitatif, uji validitas, rekapitulasi data Excel, dan penyajian grafik untuk keperluan tugas akhir/riset.',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&auto=format&fit=crop&q=80',
                'is_featured' => false,
            ],
            [
                'category_id' => $kuliner->id,
                'title' => 'Snack Bucket Birthday & Graduation',
                'seller_name' => 'Kiki Amalia',
                'seller_prodi' => 'Bisnis Digital',
                'whatsapp_number' => $defaultWA,
                'price' => 40000,
                'description' => 'Bucket jajanan estetik untuk hadiah wisuda atau ulang tahun teman kuliah. Bebas custom jenis snack dan kartu ucapan.',
                'image' => 'https://images.unsplash.com/photo-1513151233558-d860c5398176?w=600&auto=format&fit=crop&q=80',
                'is_featured' => false,
            ],
        ];

        foreach ($products as $item) {
            Product::create([
                'category_id'     => $item['category_id'],
                'title'           => $item['title'],
                'slug'            => Str::slug($item['title']),
                'seller_name'     => $item['seller_name'],
                'seller_prodi'    => $item['seller_prodi'],
                'whatsapp_number' => $item['whatsapp_number'],
                'price'           => $item['price'],
                'description'     => $item['description'],
                'image'           => $item['image'],
                'is_featured'     => $item['is_featured'],
            ]);
        }
    }
}