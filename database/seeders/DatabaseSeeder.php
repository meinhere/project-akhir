<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use App\Models\Service;
use App\Models\Footer;
use App\Models\Plant;
use App\Models\PlantCategory;
use App\Models\PlantTool;
use App\Models\Tool;
use App\Models\Price;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Sabil Ahmad',
            'username' => 'sabilahmad',
            'email' => 'sabilahmad615@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'Admin'
        ]);
        User::create([
            'name' => 'Abid Fawwaz',
            'username' => 'abidfawwaz',
            'email' => 'abidfw16@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'Petani'
        ]);
        User::create([
            'name' => 'M Afif Fadhlurrohman',
            'username' => 'mafif',
            'email' => 'mafif176@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'User'
        ]);

        User::factory(5)->create();

        Category::create([
            "name" => "Tanaman",
            "slug" => 'tanaman'
        ]);
        Category::create([
            "name" => "Obat - Obatan",
            "slug" => 'obat-obatan'
        ]);
        Category::create([
            "name" => "Perawatan",
            "slug" => 'perawatan'
        ]);
        Category::create([
            "name" => "Tips dan Trik",
            "slug" => 'tips-dan-trik'
        ]);

        Article::factory(20)->create();

        Service::create([
            'name' => 'Chat dengan Petani',
            'slug' => 'chat-dengan-petani',
            'gambar' => 'service-images/icon1.jpg',
            'jenis_service' => 1
        ]);
        Service::create([
            'name' => 'Jenis Tanaman',
            'slug' => 'jenis-tanaman',
            'gambar' => 'service-images/icon2.jpg',
            'jenis_service' => 1
        ]);
        Service::create([
            'name' => 'Alat Perkebunan',
            'slug' => 'alat-perkebunan',
            'gambar' => 'service-images/icon3.jpg',
            'jenis_service' => 1
        ]);
        Service::create([
            'name' => 'Harga Pasaran',
            'slug' => 'harga-pasaran',
            'gambar' => 'service-images/icon4.jpg',
            'jenis_service' => 1
        ]);
        Service::create([
            'name' => 'Langkah Awal',
            'slug' => 'langkah-awal',
            'gambar' => 'service-images/service1.jpg',
            'jenis_service' => 2
        ]);
        Service::create([
            'name' => 'Cara Pengobatan',
            'slug' => 'cara-pengobatan',
            'gambar' => 'service-images/service2.jpg',
            'jenis_service' => 2
        ]);
        Service::create([
            'name' => 'Siklus Tanah',
            'slug' => 'siklus-tanah',
            'gambar' => 'service-images/service3.jpg',
            'jenis_service' => 2
        ]);

        Footer::create([
            'title' => 'Latar Belakang',
            'slug' => 'latar-belakang',
            'body' => '<p>Website adalah salah satu media yang paling sering di akses dan digunakan  dalam mencari berbagai informasi dan sarana komunikasi, tentu saja dari berbagai website yang tersedia memiliki fungsi dan fitur yang berbeda pula.</p>
            <p>Untuk saat ini forum perkebunan masih sangat minim dikarenakan masih banyak diluar sana perkembangan di bidang perkebunan masih belum berkembang pesat sehingga kami mencoba untuk mengembangkan sebuah website.</p>
            <p>Didalam website, kami mencoba untuk menyelesaikan masalah dibidang perkebunan, dari bagaimana cara merawat tanaman, peralatan dan kebutuhan apa saja yang dibutuhkan untuk perkebunan, juga bagaimana mempercepat tanaman dan untuk merawat atau mengobati yang baik dalam perkebunan.</p>'
        ]);
        Footer::create([
            'title' => 'Tentang Kami',
            'slug' => 'tentang-kami',
            'body' => 'Jago kebun adalah sebuah website untuk mengedukasi bidang perkebunan, baik cara merawat tanaman sampai kebutuhan apa saja dalam perkebunan dan dibantu oleh pakar-pakar yang ahli di bidang perkebunan.'
        ]);
        Footer::create([
            'title' => 'Referensi',
            'slug' => 'referensi',
            'body' => 'Kami mengambil referensi website kami dari www.halodoc.com, fiture yang akan kami adopsi antaralain home page, chat via artikel, chat online melalui fiture konsultasi. Alasan kami mengambil referensi dari website tersebut, kami rasa sangat sesuai dengan konsep website yang akan kami kembangkan.'
        ]);
        Footer::create([
            'title' => 'Biodata',
            'slug' => 'biodata',
            'body' => '<div><p>Abid Fawwaz Naufal</p><a href="https://lynk.id/abidey_08" >https://lynk.id/abidey_08</a></div><div class="mt-4"><p>M. Afif Fadlurrohman Najib</p><a href="https://lynk.id/mafiffadhlurrohman" >https://lynk.id/mafiffadhlurrohman</a></div><div class="mt-4"><p>Sabil Ahmad Hidayat</p><a href="https://lynk.id/sabil_ahmad11" >https://lynk.id/sabil_ahmad11</a></div>'
        ]);

        Plant::create([
            'name' => 'Lombok',
            'plant_category_id' => 1,
            'detail' => 'Lombok adalah sayuran dengan ciri khas akan pedasnya. Sayuran ini seringkali dipakai untuk membuat sambal.',
            'image' => 'plant-images/1.jpg'
        ]);
        Plant::create([
            'name' => 'Terong',
            'plant_category_id' => 1,
            'detail' => 'Terong adalah jenis sayuran yang memiliki bentuk unik dengan warna ungu sebagai warna ciri khasnya.',
            'image' => 'plant-images/2.jpg'
        ]);
        Plant::create([
            'name' => 'Anggrek',
            'plant_category_id' => 2,
            'detail' => 'Anggrek adalah tanaman hias dengan tingkat kepopulerannya yang sangat banyak di Indonesia.',
            'image' => 'plant-images/3.jpg'
        ]);
        Plant::create([
            'name' => 'Mangga',
            'plant_category_id' => 3,
            'detail' => 'Mangga merupakan salah satu buah yang paling diminati oleh warga karena manis dan lezatnya.',
            'image' => 'plant-images/4.jpg'
        ]);

        PlantCategory::create([
            'name' => 'Sayuran',
            'slug' => 'sayuran',
            'detail' => 'Semua jenis sayuran yang ada, berada disini.'
        ]);
        PlantCategory::create([
            'name' => 'Tanaman Hias',
            'slug' => 'tanaman-hias',
            'detail' => 'Semua jenis tanaman hias yang ada, berada disini.'
        ]);
        PlantCategory::create([
            'name' => 'Buah Buahan',
            'slug' => 'buah-buahan',
            'detail' => 'Semua jenis buah-buahan yang ada, berada disini.'
        ]);

        // PlantTool::factory(12)->create();

        Tool::create([
            'name' => 'Cetok',
            'image' => 'tool-images/1.jpg'
        ]);
        Tool::create([
            'name' => 'Ember',
            'image' => 'tool-images/2.jpg'
        ]);
        Tool::create([
            'name' => 'Penyiram Air',
            'image' => 'tool-images/3.jpg'
        ]);
        Tool::create([
            'name' => 'Sarung Tangan',
            'image' => 'tool-images/4.jpg'
        ]);

        Price::create([
            'plant_id' => 1,
            'harga_lama' => 6000,
            'harga_baru' => 8000,
        ]);
        Price::create([
            'plant_id' => 2,
            'harga_lama' => 5000,
            'harga_baru' => 4500,
        ]);
        Price::create([
            'plant_id' => 3,
            'harga_lama' => 20000,
            'harga_baru' => 22000,
        ]);
        Price::create([
            'plant_id' => 4,
            'harga_lama' => 8000,
            'harga_baru' => 7000,
        ]);
    }
}
