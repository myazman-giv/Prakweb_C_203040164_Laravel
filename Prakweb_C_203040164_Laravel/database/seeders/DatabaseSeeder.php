<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Yazman Yazid',
            'username' => 'myazmany',
            'email' => 'myazman9b@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Walter Samuel',
        //     'email' => 'walterkris10@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);


        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, neque.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis sint, consequuntur vitae aliquam reiciendis quibusdam, corrupti nemo cupiditate eligendi illo dicta quam eos maxime aspernatur dolore quo quia odit suscipit unde id soluta dolor exercitationem rem iure. Delectus ducimus incidunt accusantium enim consequuntur, ipsum fugit laborum odit! Esse possimus quam qui blanditiis, debitis recusandae dolor aspernatur incidunt corporis hic in, minima sint reiciendis autem libero dolorum nemo quaerat! Amet vero maxime laudantium veniam facere? Fugiat sint possimus repellat illo, ab ad ipsum, deleniti error reiciendis cupiditate hic sed corrupti, labore libero neque? Eaque eligendi beatae dolorum unde perferendis necessitatibus dicta!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, dua.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis sint, consequuntur vitae aliquam reiciendis quibusdam, corrupti nemo cupiditate eligendi illo dicta quam eos maxime aspernatur dolore quo quia odit suscipit unde id soluta dolor exercitationem rem iure. Delectus ducimus incidunt accusantium enim consequuntur, ipsum fugit laborum odit! Esse possimus quam qui blanditiis, debitis recusandae dolor aspernatur incidunt corporis hic in, minima sint reiciendis autem libero dolorum nemo quaerat! Amet vero maxime laudantium veniam facere? Fugiat sint possimus repellat illo, ab ad ipsum, deleniti error reiciendis cupiditate hic sed corrupti, labore libero neque? Eaque eligendi beatae dolorum unde perferendis necessitatibus dicta!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, tiga.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis sint, consequuntur vitae aliquam reiciendis quibusdam, corrupti nemo cupiditate eligendi illo dicta quam eos maxime aspernatur dolore quo quia odit suscipit unde id soluta dolor exercitationem rem iure. Delectus ducimus incidunt accusantium enim consequuntur, ipsum fugit laborum odit! Esse possimus quam qui blanditiis, debitis recusandae dolor aspernatur incidunt corporis hic in, minima sint reiciendis autem libero dolorum nemo quaerat! Amet vero maxime laudantium veniam facere? Fugiat sint possimus repellat illo, ab ad ipsum, deleniti error reiciendis cupiditate hic sed corrupti, labore libero neque? Eaque eligendi beatae dolorum unde perferendis necessitatibus dicta!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, tiga.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis sint, consequuntur vitae aliquam reiciendis quibusdam, corrupti nemo cupiditate eligendi illo dicta quam eos maxime aspernatur dolore quo quia odit suscipit unde id soluta dolor exercitationem rem iure. Delectus ducimus incidunt accusantium enim consequuntur, ipsum fugit laborum odit! Esse possimus quam qui blanditiis, debitis recusandae dolor aspernatur incidunt corporis hic in, minima sint reiciendis autem libero dolorum nemo quaerat! Amet vero maxime laudantium veniam facere? Fugiat sint possimus repellat illo, ab ad ipsum, deleniti error reiciendis cupiditate hic sed corrupti, labore libero neque? Eaque eligendi beatae dolorum unde perferendis necessitatibus dicta!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
