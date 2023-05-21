<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Abdillatur Rohman',
            'username' => 'Lacher',
            'email' => 'adijpr25@gmail.com',
            'password' => bcrypt('password')

        ]);
        User::factory(4)->create();

        Category::create ([
            'name' => 'Otot Arm',
            'slug' => 'otottangan'
        ]);

        Category::create ([
            'name' => 'Otot Abs',
            'slug' => 'ototperut'
        ]);

        Category::create ([
            'name' => 'Otot Chest',
            'slug' => 'ototdada'
        ]);
        Category::create ([
            'name' => 'Otot Leg',
            'slug' => 'ototpaha'
        ]);
        Category::create ([
            'name' => 'Otot Back',
            'slug' => 'ototpunggung'
        ]);

        Post::factory(20)->create();
        // Post::create ([
        //     'judul' => 'Cara Membesarkan Otot Leg Dalam 10 Menit',
        //     'category_id' => 4,
        //     'user_id' => 2,
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum Paha sit amet consectetur adipisicing elit. Quaerat cum eaque rem tempore adipisci.',
        //     'body' => '<p> Paha ipsum dolor sit amet consectetur adipisicing elit. Quaerat cum eaque rem tempore adipisci.</p><p> Illum, ratione in inventore quisquam officiis deserunt sunt beatae pariatur maxime ab iusto sequi soluta tempore magnam, exercitationem doloremque et incidunt excepturi harum rerum laudantium ad veritatis</p><p> maxime ab iusto sequi soluta tempore magnam, exercitationem doloremque et incidunt excepturi harum rerum laudantium ad veritatis! Cum quae, obcaecati blanditiis quaerat omnis consequatur reprehenderit aut quam iusto nulla. Minima possimus nisi aliquid omnis eum consequatur, nulla non adipisci recusandae.</p>'
        // ]);
        // Post::create ([
        //     'judul' => 'Cara Membesarkan Otot Dada Dalam 10 Menit',
        //     'category_id' => 3,
        //     'user_id' => 1,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum Paha sit amet consectetur adipisicing elit. Quaerat cum eaque rem tempore adipisci.',
        //     'body' => '<p> Paha ipsum dolor sit amet consectetur adipisicing elit. Quaerat cum eaque rem tempore adipisci.</p><p> Illum, ratione in inventore quisquam officiis deserunt sunt beatae pariatur maxime ab iusto sequi soluta tempore magnam, exercitationem doloremque et incidunt excepturi harum rerum laudantium ad veritatis</p><p> maxime ab iusto sequi soluta tempore magnam, exercitationem doloremque et incidunt excepturi harum rerum laudantium ad veritatis! Cum quae, obcaecati blanditiis quaerat omnis consequatur reprehenderit aut quam iusto nulla. Minima possimus nisi aliquid omnis eum consequatur, nulla non adipisci recusandae.</p>'
        // ]);
        // Post::create ([
        //     'judul' => 'Cara Membesarkan Otot Abs Dalam 10 Menit',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem kedua Paha sit amet consectetur adipisicing elit. Quaerat cum eaque rem tempore adipisci.',
        //     'body' => '<p> Paha ipsum dolor sit amet consectetur adipisicing elit. Quaerat cum eaque rem tempore adipisci.</p><p> Illum, ratione in inventore quisquam officiis deserunt sunt beatae pariatur maxime ab iusto sequi soluta tempore magnam, exercitationem doloremque et incidunt excepturi harum rerum laudantium ad veritatis</p><p> maxime ab iusto sequi soluta tempore magnam, exercitationem doloremque et incidunt excepturi harum rerum laudantium ad veritatis! Cum quae, obcaecati blanditiis quaerat omnis consequatur reprehenderit aut quam iusto nulla. Minima possimus nisi aliquid omnis eum consequatur, nulla non adipisci recusandae.</p>'
        // ]);
        // Post::create ([
        //     'judul' => 'Cara Membesarkan Otot Arm Dalam 10 Menit',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum Paha sit amet consectetur adipisicing elit. Quaerat cum eaque rem tempore adipisci.',
        //     'body' => '<p> Paha ipsum dolor sit amet consectetur adipisicing elit. Quaerat cum eaque rem tempore adipisci.</p><p> Illum, ratione in inventore quisquam officiis deserunt sunt beatae pariatur maxime ab iusto sequi soluta tempore magnam, exercitationem doloremque et incidunt excepturi harum rerum laudantium ad veritatis</p><p> maxime ab iusto sequi soluta tempore magnam, exercitationem doloremque et incidunt excepturi harum rerum laudantium ad veritatis! Cum quae, obcaecati blanditiis quaerat omnis consequatur reprehenderit aut quam iusto nulla. Minima possimus nisi aliquid omnis eum consequatur, nulla non adipisci recusandae.</p>'
        // ]);
    }
}
