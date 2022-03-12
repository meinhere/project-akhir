<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use App\Models\Service;
use App\Models\Footer;
use App\Models\Plant;
use App\Models\PlantCategory;
use App\Models\PlantsTools;
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
            'gambar' => 'icon1.jpg',
            'jenis_service' => 1
        ]);
        Service::create([
            'name' => 'Jenis Tanaman',
            'slug' => 'jenis-tanaman',
            'gambar' => 'icon2.jpg',
            'jenis_service' => 1
        ]);
        Service::create([
            'name' => 'Alat Perkebunan',
            'slug' => 'alat-perkebunan',
            'gambar' => 'icon3.jpg',
            'jenis_service' => 1
        ]);
        Service::create([
            'name' => 'Harga Pasaran',
            'slug' => 'harga-pasaran',
            'gambar' => 'icon4.jpg',
            'jenis_service' => 1
        ]);
        Service::create([
            'name' => 'Langkah Awal',
            'slug' => 'langkah-awal',
            'gambar' => 'service1.jpg',
            'jenis_service' => 2
        ]);
        Service::create([
            'name' => 'Cara Pengobatan',
            'slug' => 'cara-pengobatan',
            'gambar' => 'service2.jpg',
            'jenis_service' => 2
        ]);
        Service::create([
            'name' => 'Siklus Tanah',
            'slug' => 'siklus-tanah',
            'gambar' => 'service3.jpg',
            'jenis_service' => 2
        ]);

        Footer::create([
            'title' => 'Latar Belakang',
            'slug' => 'latar-belakang',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eveniet impedit maiores est dolor rem laborum culpa fuga assumenda. Sequi perspiciatis aliquid nam officia dolorem cupiditate adipisci accusamus aperiam quos consequatur enim cum quis tempore qui officiis laudantium explicabo, asperiores voluptatibus vel, nobis sed ducimus. Consectetur, sapiente. Quaerat illum incidunt magni odit at? Unde, nesciunt rerum? Mollitia ex ipsa fugiat laboriosam iste? Rerum fuga totam impedit atque voluptatum commodi error quis et corrupti mollitia exercitationem maxime eligendi velit, repellat nobis non, optio beatae harum facere ad! Ipsa odit possimus dicta voluptas dolor at, totam repudiandae quod eligendi aspernatur, consequatur veniam voluptate provident delectus non accusamus autem a similique ipsam sed corrupti magnam saepe voluptates? Dolore at eligendi quisquam minima id dolores culpa sunt voluptas, beatae rerum delectus earum est exercitationem suscipit nesciunt tempore? Odio nisi doloribus, natus ratione impedit aperiam sapiente quod fuga obcaecati dicta ab animi debitis voluptate ut odit totam laborum minima, quia mollitia eius accusantium porro nam, fugit sit. Laborum consequuntur possimus officia odio distinctio magnam tempore ut quos laboriosam. Reiciendis, consequuntur quae. Perspiciatis, reiciendis explicabo odio debitis quisquam tempore cumque, quam nam iure ea nobis rerum, cum aliquam qui. Eveniet, vero. Voluptatum, tempora cum. Impedit iste sed veniam possimus, vero ex nesciunt harum quam ipsam aperiam tempore nam dolorum. Eaque illo dolores hic, error vitae quibusdam nostrum delectus explicabo blanditiis! Est a sint sunt libero enim dicta nihil quos eum aspernatur beatae officiis, suscipit consequatur, laudantium accusantium amet voluptates, exercitationem porro fuga. Necessitatibus provident nesciunt deleniti deserunt reprehenderit blanditiis officia corporis vel quisquam suscipit impedit assumenda at dolorum dolore fuga nobis voluptas doloremque, dolor minima libero maiores ab fugit! Magnam, illo fuga! Voluptas quisquam dicta cumque, labore harum sit repellendus debitis eius repellat voluptate iusto. Iste, sapiente, veniam sequi, nemo ratione aspernatur quaerat laboriosam eveniet obcaecati ducimus culpa temporibus. Explicabo numquam quisquam ad sed nesciunt dolorem quasi itaque omnis molestias! Repellendus debitis facere vero architecto ullam impedit iure blanditiis temporibus libero, deleniti animi ab consequatur molestias pariatur assumenda, nam placeat enim nesciunt facilis voluptatem praesentium quaerat delectus nostrum. Rem consequuntur, explicabo necessitatibus pariatur illo odit vel sequi fuga unde voluptatibus voluptatem ducimus illum eveniet ex fugiat suscipit. Expedita eveniet placeat sit, nisi dicta corrupti! Delectus commodi atque unde! Rem facilis quibusdam possimus veritatis, beatae ab nulla porro velit consequatur ex! Autem nisi ducimus alias porro aperiam itaque repudiandae quasi commodi reiciendis atque? Qui placeat inventore in.'
        ]);
        Footer::create([
            'title' => 'Tentang Kami',
            'slug' => 'tentang-kami',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eveniet impedit maiores est dolor rem laborum culpa fuga assumenda. Sequi perspiciatis aliquid nam officia dolorem cupiditate adipisci accusamus aperiam quos consequatur enim cum quis tempore qui officiis laudantium explicabo, asperiores voluptatibus vel, nobis sed ducimus. Consectetur, sapiente. Quaerat illum incidunt magni odit at? Unde, nesciunt rerum? Mollitia ex ipsa fugiat laboriosam iste? Rerum fuga totam impedit atque voluptatum commodi error quis et corrupti mollitia exercitationem maxime eligendi velit, repellat nobis non, optio beatae harum facere ad! Ipsa odit possimus dicta voluptas dolor at, totam repudiandae quod eligendi aspernatur, consequatur veniam voluptate provident delectus non accusamus autem a similique ipsam sed corrupti magnam saepe voluptates? Dolore at eligendi quisquam minima id dolores culpa sunt voluptas, beatae rerum delectus earum est exercitationem suscipit nesciunt tempore? Odio nisi doloribus, natus ratione impedit aperiam sapiente quod fuga obcaecati dicta ab animi debitis voluptate ut odit totam laborum minima, quia mollitia eius accusantium porro nam, fugit sit. Laborum consequuntur possimus officia odio distinctio magnam tempore ut quos laboriosam. Reiciendis, consequuntur quae. Perspiciatis, reiciendis explicabo odio debitis quisquam tempore cumque, quam nam iure ea nobis rerum, cum aliquam qui. Eveniet, vero. Voluptatum, tempora cum. Impedit iste sed veniam possimus, vero ex nesciunt harum quam ipsam aperiam tempore nam dolorum. Eaque illo dolores hic, error vitae quibusdam nostrum delectus explicabo blanditiis! Est a sint sunt libero enim dicta nihil quos eum aspernatur beatae officiis, suscipit consequatur, laudantium accusantium amet voluptates, exercitationem porro fuga. Necessitatibus provident nesciunt deleniti deserunt reprehenderit blanditiis officia corporis vel quisquam suscipit impedit assumenda at dolorum dolore fuga nobis voluptas doloremque, dolor minima libero maiores ab fugit! Magnam, illo fuga! Voluptas quisquam dicta cumque, labore harum sit repellendus debitis eius repellat voluptate iusto. Iste, sapiente, veniam sequi, nemo ratione aspernatur quaerat laboriosam eveniet obcaecati ducimus culpa temporibus. Explicabo numquam quisquam ad sed nesciunt dolorem quasi itaque omnis molestias! Repellendus debitis facere vero architecto ullam impedit iure blanditiis temporibus libero, deleniti animi ab consequatur molestias pariatur assumenda, nam placeat enim nesciunt facilis voluptatem praesentium quaerat delectus nostrum. Rem consequuntur, explicabo necessitatibus pariatur illo odit vel sequi fuga unde voluptatibus voluptatem ducimus illum eveniet ex fugiat suscipit. Expedita eveniet placeat sit, nisi dicta corrupti! Delectus commodi atque unde! Rem facilis quibusdam possimus veritatis, beatae ab nulla porro velit consequatur ex! Autem nisi ducimus alias porro aperiam itaque repudiandae quasi commodi reiciendis atque? Qui placeat inventore in.'
        ]);
        Footer::create([
            'title' => 'Referensi',
            'slug' => 'referensi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eveniet impedit maiores est dolor rem laborum culpa fuga assumenda. Sequi perspiciatis aliquid nam officia dolorem cupiditate adipisci accusamus aperiam quos consequatur enim cum quis tempore qui officiis laudantium explicabo, asperiores voluptatibus vel, nobis sed ducimus. Consectetur, sapiente. Quaerat illum incidunt magni odit at? Unde, nesciunt rerum? Mollitia ex ipsa fugiat laboriosam iste? Rerum fuga totam impedit atque voluptatum commodi error quis et corrupti mollitia exercitationem maxime eligendi velit, repellat nobis non, optio beatae harum facere ad! Ipsa odit possimus dicta voluptas dolor at, totam repudiandae quod eligendi aspernatur, consequatur veniam voluptate provident delectus non accusamus autem a similique ipsam sed corrupti magnam saepe voluptates? Dolore at eligendi quisquam minima id dolores culpa sunt voluptas, beatae rerum delectus earum est exercitationem suscipit nesciunt tempore? Odio nisi doloribus, natus ratione impedit aperiam sapiente quod fuga obcaecati dicta ab animi debitis voluptate ut odit totam laborum minima, quia mollitia eius accusantium porro nam, fugit sit. Laborum consequuntur possimus officia odio distinctio magnam tempore ut quos laboriosam. Reiciendis, consequuntur quae. Perspiciatis, reiciendis explicabo odio debitis quisquam tempore cumque, quam nam iure ea nobis rerum, cum aliquam qui. Eveniet, vero. Voluptatum, tempora cum. Impedit iste sed veniam possimus, vero ex nesciunt harum quam ipsam aperiam tempore nam dolorum. Eaque illo dolores hic, error vitae quibusdam nostrum delectus explicabo blanditiis! Est a sint sunt libero enim dicta nihil quos eum aspernatur beatae officiis, suscipit consequatur, laudantium accusantium amet voluptates, exercitationem porro fuga. Necessitatibus provident nesciunt deleniti deserunt reprehenderit blanditiis officia corporis vel quisquam suscipit impedit assumenda at dolorum dolore fuga nobis voluptas doloremque, dolor minima libero maiores ab fugit! Magnam, illo fuga! Voluptas quisquam dicta cumque, labore harum sit repellendus debitis eius repellat voluptate iusto. Iste, sapiente, veniam sequi, nemo ratione aspernatur quaerat laboriosam eveniet obcaecati ducimus culpa temporibus. Explicabo numquam quisquam ad sed nesciunt dolorem quasi itaque omnis molestias! Repellendus debitis facere vero architecto ullam impedit iure blanditiis temporibus libero, deleniti animi ab consequatur molestias pariatur assumenda, nam placeat enim nesciunt facilis voluptatem praesentium quaerat delectus nostrum. Rem consequuntur, explicabo necessitatibus pariatur illo odit vel sequi fuga unde voluptatibus voluptatem ducimus illum eveniet ex fugiat suscipit. Expedita eveniet placeat sit, nisi dicta corrupti! Delectus commodi atque unde! Rem facilis quibusdam possimus veritatis, beatae ab nulla porro velit consequatur ex! Autem nisi ducimus alias porro aperiam itaque repudiandae quasi commodi reiciendis atque? Qui placeat inventore in.'
        ]);
        Footer::create([
            'title' => 'Biodata',
            'slug' => 'biodata',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eveniet impedit maiores est dolor rem laborum culpa fuga assumenda. Sequi perspiciatis aliquid nam officia dolorem cupiditate adipisci accusamus aperiam quos consequatur enim cum quis tempore qui officiis laudantium explicabo, asperiores voluptatibus vel, nobis sed ducimus. Consectetur, sapiente. Quaerat illum incidunt magni odit at? Unde, nesciunt rerum? Mollitia ex ipsa fugiat laboriosam iste? Rerum fuga totam impedit atque voluptatum commodi error quis et corrupti mollitia exercitationem maxime eligendi velit, repellat nobis non, optio beatae harum facere ad! Ipsa odit possimus dicta voluptas dolor at, totam repudiandae quod eligendi aspernatur, consequatur veniam voluptate provident delectus non accusamus autem a similique ipsam sed corrupti magnam saepe voluptates? Dolore at eligendi quisquam minima id dolores culpa sunt voluptas, beatae rerum delectus earum est exercitationem suscipit nesciunt tempore? Odio nisi doloribus, natus ratione impedit aperiam sapiente quod fuga obcaecati dicta ab animi debitis voluptate ut odit totam laborum minima, quia mollitia eius accusantium porro nam, fugit sit. Laborum consequuntur possimus officia odio distinctio magnam tempore ut quos laboriosam. Reiciendis, consequuntur quae. Perspiciatis, reiciendis explicabo odio debitis quisquam tempore cumque, quam nam iure ea nobis rerum, cum aliquam qui. Eveniet, vero. Voluptatum, tempora cum. Impedit iste sed veniam possimus, vero ex nesciunt harum quam ipsam aperiam tempore nam dolorum. Eaque illo dolores hic, error vitae quibusdam nostrum delectus explicabo blanditiis! Est a sint sunt libero enim dicta nihil quos eum aspernatur beatae officiis, suscipit consequatur, laudantium accusantium amet voluptates, exercitationem porro fuga. Necessitatibus provident nesciunt deleniti deserunt reprehenderit blanditiis officia corporis vel quisquam suscipit impedit assumenda at dolorum dolore fuga nobis voluptas doloremque, dolor minima libero maiores ab fugit! Magnam, illo fuga! Voluptas quisquam dicta cumque, labore harum sit repellendus debitis eius repellat voluptate iusto. Iste, sapiente, veniam sequi, nemo ratione aspernatur quaerat laboriosam eveniet obcaecati ducimus culpa temporibus. Explicabo numquam quisquam ad sed nesciunt dolorem quasi itaque omnis molestias! Repellendus debitis facere vero architecto ullam impedit iure blanditiis temporibus libero, deleniti animi ab consequatur molestias pariatur assumenda, nam placeat enim nesciunt facilis voluptatem praesentium quaerat delectus nostrum. Rem consequuntur, explicabo necessitatibus pariatur illo odit vel sequi fuga unde voluptatibus voluptatem ducimus illum eveniet ex fugiat suscipit. Expedita eveniet placeat sit, nisi dicta corrupti! Delectus commodi atque unde! Rem facilis quibusdam possimus veritatis, beatae ab nulla porro velit consequatur ex! Autem nisi ducimus alias porro aperiam itaque repudiandae quasi commodi reiciendis atque? Qui placeat inventore in.'
        ]);

        Plant::create([
            'name' => 'Lombok',
            'plant_category_id' => 1,
            'detail' => 'Lombok adalah sayuran dengan ciri khas akan pedasnya. Sayuran ini seringkali dipakai untuk membuat sambal.',
            'image' => '1.jpg'
        ]);
        Plant::create([
            'name' => 'Terong',
            'plant_category_id' => 1,
            'detail' => 'Terong adalah jenis sayuran yang memiliki bentuk unik dengan warna ungu sebagai warna ciri khasnya.',
            'image' => '1.jpg'
        ]);
        Plant::create([
            'name' => 'Anggrek',
            'plant_category_id' => 2,
            'detail' => 'Anggrek adalah tanaman hias dengan tingkat kepopulerannya yang sangat banyak di Indonesia.',
            'image' => '3.jpg'
        ]);
        Plant::create([
            'name' => 'Mangga',
            'plant_category_id' => 3,
            'detail' => 'Mangga merupakan salah satu buah yang paling diminati oleh warga karena manis dan lezatnya.',
            'image' => '5.jpg'
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

        PlantsTools::factory(12)->create();

        Tool::create([
            'name' => 'Cetok',
            'image' => '1.jpg'
        ]);
        Tool::create([
            'name' => 'Bambu Kecil',
            'image' => '2.jpg'
        ]);
        Tool::create([
            'name' => 'Penyiram Air',
            'image' => '3.jpg'
        ]);
        Tool::create([
            'name' => 'Cangkul',
            'image' => '4.jpg'
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
